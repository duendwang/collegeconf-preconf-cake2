<?php
App::uses('AppController', 'Controller');
/**
 * PotentialAttendees Controller
 *
 * @property PotentialAttendee $PotentialAttendee
 */
class PotentialAttendeesController extends AppController {

/**
 * beforeFilter method
 *
 * @return void
 */

        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('add','confirm');
        }

/**
 * index method
 *
 * @return void
 */
	public function index($locality = null, $all = 0) {
		$this->PotentialAttendee->recursive = 0;
                if ($this->Auth->user('UserType.account_type_id') == 4) {
                    $this->paginate = array(
                        'conditions' => array(
                            'PotentialAttendee.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences(),
                            'PotentialAttendee.locality_id =' => $this->Auth->user('locality_id'),
                            //Index method to display all potential attendees, regardless of status
                            //Proces method will display only unresolved potential attendees
                            /**'AND' => array(
                                'PotentialAttendee.imported' => 0,
                                'PotentialAttendee.ignored' => 0,
                            )**/
                        ),
                        'order' => array('PotentialAttendee.last_name' => 'asc')
                    );
                } elseif(in_array($this->Auth->user('UserType.account_type_id'),array(2,3))) {
                    $locality_ids = $this->PotentialAttendee->Locality->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences(),'RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                    $this->set('localities',$this->PotentialAttendee->Locality->find('all',array('conditions' => array('Locality.id' => $locality_ids),'recursive' => 0,'order' => 'Locality.name')));
                    if(isset($locality)) {
                        $this->paginate = array(
                            'conditions' => array('PotentialAttendee.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences(),'PotentialAttendee.locality_id =' => $locality),
                            'order' => array('PotentialAttendee.last_name' => 'asc')
                        );
                    } elseif ($all = 1) {
                        $this->paginate = array(
                            'conditions' => array('PotentialAttendee.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences()),
                            'order' => array('PotentialAttendee.last_name' => 'asc')
                        );
                    } elseif ($all = 0) {
                        $this->paginate = array(
                            'conditions' => array('PotentialAttendee.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences(),'PotentialAttendee.locality_id' => $locality_ids),
                            'order' => array('PotentialAttendee.last_name' => 'asc')
                        );
                    }
                }
		//$this->set('potentialAttendees', $this->paginate());
                $potentialAttendees = $this->paginate();
                foreach($potentialAttendees as &$potentialAttendee):
                    if($potentialAttendee['PotentialAttendee']['imported'] == 1) {
                        $potentialAttendee['PotentialAttendee']['status'] = 'Imported';
                    } elseif($potentialAttendee['PotentialAttendee']['ignored'] == 1) {
                        $potentialAttendee['PotentialAttendee']['status'] = 'Ignored';
                    } elseif($potentialAttendee['PotentialAttendee']['notified'] == 1) {
                        $potentialAttendee['PotentialAttendee']['status'] = 'LRC Notified';
                    } else {
                        $potentialAttendee['PotentialAttendee']['status'] = 'Received';
                    }
                endforeach;
                $this->set(compact('potentialAttendee'));
        }

/**
 * process method
 * 
 * @param type $locality
 * @throws NotFoundException
 * @return void
 */
        public function process($locality) {
            if ($this->Auth->user('UserType.account_type_id') == 4) {
                $locality = $this->Auth->user('locality_id');
            }
            
            if (!isset($locality)) {
                $this->Session->setFlash(__('Invalid request. If this persists, plesae notify the system adminstrator.'),'failure');
                $this->redirect(array('controller' => 'pages', 'action' => 'display','home'));
            } elseif (!$this->PotentialAttendee->Locality->exists($locality)) {
                throw new NotFoundException(__('Invalid locality code'));
                //$this->redirect(array('controller' => 'pages', 'action' => 'display','home'));
            }
            
            //TODO need to add checking for assigned locality for reg team or for core status
            
            if ($this->request->is('post')) {
                
            }
            
            //TODO Check for 1) attendees to import, 2) attendees to ignore, 3) attendees that were just changed.
            //Check if an attendee's information has been edited:
            //$result = array_diff_assoc($this->old[$this->alias],$this->data[$this->alias]);
            
            $potential_attendees = $this->PotentialAttendee->find('all',array(
                'conditions' => array(
                    'PotentialAttendee.conference_id' => $this->PotentialAttendee->Conference->current_term_conferences(),
                    'PotentialAttendee.locality_id' => $locality,
                    'AND' => array(
                        'PotentialAttendee.imported' => 0,
                        'PotentialAttendee.ignored' => 0,
                    ),
                ),
                'contain' => $this->PotentialAttendee->contain,
                'order' => array('PotentialAttendee.last_name' => 'asc'),
                'recursive' => -1,
            ));
        }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PotentialAttendee->exists($id)) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		$options = array('conditions' => array('PotentialAttendee.' . $this->PotentialAttendee->primaryKey => $id));
		$this->set('potentialAttendee', $this->PotentialAttendee->find('first', $options));
	}

/**
 * add method
 *
 * @param string $conference
 * @param string $locality
 * @return void
 */
	public function add($conference = null, $locality = null) {
		if ($this->request->is('post')) {
			$this->PotentialAttendee->create();
			if ($this->PotentialAttendee->save($this->request->data)) {
				//$this->Session->setFlash(__('Your information has been saved. Please keep in mind that you are not officially registered until you submit your payment to your local registration coordinator'),'success');
                                $this->redirect(array('action' => 'confirm',1,$this->PotentialAttendee->id));
			} else {
				$this->Session->setFlash(__('Your information could not be saved. Please try again or contact your local registration coordinator.'),'failure');
			}
		}
                
                $conferences = $this->PotentialAttendee->Conference->find('list',array('conditions' => array('Conference.id' => $this->PotentialAttendee->Conference->current_term_conferences())));
                $localities = $this->PotentialAttendee->Locality->find('list');
                //TODO Add check for invalid or inactive localities
                
                if (array_key_exists($conference,$conferences) && array_key_exists($locality,$localities)) {
                    $campuses = $this->PotentialAttendee->Campus->find('list');
                    $statuses = $this->PotentialAttendee->Status->find('list');
                    $this->set(compact('conferences','conference','localities','locality', 'campuses', 'statuses'));
                } else {
                    $this->redirect(array('action' => 'confirm',2,null));
                }
	}

/**
 * confirm method
 * 
 * @param string $type
 * @param string $id
 * @return void
 */

        public function confirm($type = null, $id = null) {
            if ($id == null) {
                $type = 2;
            }
            
            switch ($type) {
                case 1:
                    $messages = array(
                        'Thank you for your submission.',
                        'Your registration is not complete until your local registration coordinator (or the one who invited you to the conference) receives your payment and confirms your registration. Payment must be received by the registration deadline to guarantee your registration.',
                        'For more information, please visit <a href="http://www.college-conference.com">www.college-conference.com</a>.'
                    );
                    break;
                case 2:
                    $messages = array(
                        'You have reached this page in error.',
                        'You must be provided a special link in order to submit your information for registration. This makes sure your information ends up in the right place. Please contact your local registration coordinator (or the one who invited you to the conference) to obtain this link.',
                        'For more information, please visit <a href="http://www.college-conference.com">www.college-conference.com</a>.'
                    );
                    break;
            }
            $this->set(compact('messages'));
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PotentialAttendee->exists($id)) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PotentialAttendee->save($this->request->data)) {
				$this->Session->setFlash(__('The potential attendee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The potential attendee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PotentialAttendee.' . $this->PotentialAttendee->primaryKey => $id));
			$this->request->data = $this->PotentialAttendee->find('first', $options);
		}
		$conferences = $this->PotentialAttendee->Conference->find('list');
		$localities = $this->PotentialAttendee->Locality->find('list');
		$campuses = $this->PotentialAttendee->Campus->find('list');
		$statuses = $this->PotentialAttendee->Status->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PotentialAttendee->id = $id;
		if (!$this->PotentialAttendee->exists()) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PotentialAttendee->delete()) {
			$this->Session->setFlash(__('Potential attendee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Potential attendee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PotentialAttendee->recursive = 0;
		$this->set('potentialAttendees', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PotentialAttendee->exists($id)) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		$options = array('conditions' => array('PotentialAttendee.' . $this->PotentialAttendee->primaryKey => $id));
		$this->set('potentialAttendee', $this->PotentialAttendee->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PotentialAttendee->create();
			if ($this->PotentialAttendee->save($this->request->data)) {
				$this->Session->setFlash(__('The potential attendee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The potential attendee could not be saved. Please, try again.'));
			}
		}
		$conferences = $this->PotentialAttendee->Conference->find('list');
		$localities = $this->PotentialAttendee->Locality->find('list');
		$campuses = $this->PotentialAttendee->Campus->find('list');
		$statuses = $this->PotentialAttendee->Status->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PotentialAttendee->exists($id)) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PotentialAttendee->save($this->request->data)) {
				$this->Session->setFlash(__('The potential attendee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The potential attendee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PotentialAttendee.' . $this->PotentialAttendee->primaryKey => $id));
			$this->request->data = $this->PotentialAttendee->find('first', $options);
		}
		$conferences = $this->PotentialAttendee->Conference->find('list');
		$localities = $this->PotentialAttendee->Locality->find('list');
		$campuses = $this->PotentialAttendee->Campus->find('list');
		$statuses = $this->PotentialAttendee->Status->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PotentialAttendee->id = $id;
		if (!$this->PotentialAttendee->exists()) {
			throw new NotFoundException(__('Invalid potential attendee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PotentialAttendee->delete()) {
			$this->Session->setFlash(__('Potential attendee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Potential attendee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
