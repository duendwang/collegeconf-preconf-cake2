<?php
App::uses('AppController', 'Controller');
/**
 * Attendees Controller
 *
 * @property Attendee $Attendee
 */
class AttendeesController extends AppController {

/**
 * contain
 *
 * @var array
 */
        private $contain = array(
            'Campus' => array(
                'fields' => 'Campus.name'
            ),
            'Cancel',
            'CheckIn',
            'Conference' => array(
                'fields' => 'Conference.code'
            ),
            'Locality' => array(
                'fields' => 'Locality.name'
            ),
            'Lodging' => array(
                'fields' => 'Lodging.code'
            ),
            'Status' => array(
                'fields' => 'Status.code'
            )
        );

/**
 * requirementCheck method
 *
 * @return $messages
 */
	function _requirementCheck($locality = null) {
		if (is_null($locality)) {
                    $locality = $this->Auth->user('locality_id');
		}
                $attendees = $this->Attendee->find('all',array('conditions' => array('Attendee.conference_id' => '3','Attendee.locality_id' => $locality),'recursive' => -1));
		foreach ($attendees as $attendee):
                    if(strlen($attendee['Attendee']['gender']) === 0) {$requirement_messages[] = array('Gender information is missing for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. Please fill in this information.','warning');}
                    if(strlen($attendee['Attendee']['conference_id']) === 0) {$requirement_messages[] = array('A conference has not been selected for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. Please select a conference.','warning');}
                    if(strlen($attendee['Attendee']['cell_phone']) === 0) {$requirement_messages[] = array('A cell phone was not listed for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. We must have a cell phone number to contact '.$attendee['Attendee']['first_name'].' in the event of an emergency.','warning');}
                    if(strlen($attendee['Attendee']['email']) === 0) {$requirement_messages[] = array('An email was not listed for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. We must have an email address for conference notifications and announcements.','warning');}
                    //if(strlen($attendee['Attendee']['city_state']) === 0) {$requirement_messages[] = array('The city and state of residence was not indicated for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. Please fill in this information.','warning');}
                    if(strlen($attendee['Attendee']['status_id']) === 0) {$requirement_messages[] = array('A status was not indicated for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'.','warning');}
                    if(strlen($attendee['Attendee']['campus_id']) === 0 && in_array($attendee['Attendee']['status_id'],array(2,3,4,5))) {$requirement_messages[] = array('No college campus was indicated for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'.','warning');}
                    if(strlen($attendee['Attendee']['group']) === 0) {$requirement_messages[] = array('A hospitality group was not indicated for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'.','warning');}
                    //debug ($attendee['Attendee']['group']);
                    //debug (in_array($attendee['Attendee']['group'],array('LOCAL','HOST')));
                    if(in_array($attendee['Attendee']['group'],array('LOCAL','HOST'))) {
                        if(strlen($attendee['Attendee']['host_name']) === 0) {$requirement_messages[] = array('Prearranged hospitality information was not indicated for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. We need this information to ensure hospitality houses do not become overbooked.','warning');}
                        else {
                            if (strlen($attendee['Attendee']['host_address']) === 0) {$requirement_messages[] = array('Prearranged hospitality address information is missing for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. We need this information to ensure hospitality houses do not become overbooked.','warning');}
                            if (strlen($attendee['Attendee']['host_phone']) === 0) {$requirement_messages[] = array('Prearranged hospitality phone information is missing for '.$attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name'].'. We need this information to ensure hospitality houses do not become overbooked.','warning');}
                        }
                    }
		endforeach;
                
                $sis_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.gender' => 'S')));
		$sis_cc_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.gender =' => 'S','Attendee.conf_contact' => 1)));
                $bro_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.gender' => 'B')));
                $bro_cc_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.gender =' => 'B','Attendee.conf_contact' => 1)));
                if($sis_count > 0) {
                    if($sis_cc_count > 1) {$requirement_messages[] = array('More than one sister conference contact is selected. Please select one only.','warning');}
                    elseif ($sis_cc_count == 0) {$requirement_messages[] = array('No sister conference contact is selected. Please make sure to select a conference contact that can attend the conference full time and has ready access to email.','warning');}
                }
                if($bro_count > 0) {
                    if($bro_cc_count > 1) {$requirement_messages[] = array('More than one brother conference contact is selected. Please select one only.','warning');}
                    elseif ($bro_cc_count == 0) {$requirement_messages[] = array('No brother conference contact is selected. Please make sure to select a conference contact that can attend the conference full time and has ready access to email.','warning');}
                }
                $newone_cc = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.new_one' => 1,'Attendee.conf_contact' => 1)));
                if($newone_cc > 0) {$requirement_messages[] = array('A new one was selected as the conference contact. Because of the nature of the conference contact service, please select another conference contact.','warning');}
                //$others_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.status_id NOT' => array(1,2,3,4,5))));
                //$students_count = $this->Attendee->find('count',array('conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality,'Attendee.status_id' => array(1,2,3,4,5))));
                //if($others_count > $students_count/2) {$requirement_messages[] = array('Your student to non-student ratio is less than 2:1. Please fellowship with the registration team if there is a particular need.','warning');}
                
                if (!empty($requirement_messages)) {
                    if ($this->request['controller'] == 'attendees' && $this->request['action'] == 'index') {
                    foreach ($requirement_messages as $requirement_message):
                        $this->_flash(__($requirement_message[0],true),$requirement_message[1]);
                    endforeach;
                    } else return true;
                }
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->loadModel('UserType');
		$this->Attendee->recursive = 0;
		if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4')))) {
                    //$this->set('locality',$this->Auth->user('locality_id'));
                    $this->paginate = array(
                        'conditions' => array('Attendee.conference_id' => '3','Attendee.locality_id =' => $this->Auth->user('locality_id'),'Attendee.cancel_count' => null),
                        'contain' => $this->contain,
                        'limit' => 200,
                    );
                    $this->_requirementCheck();
		} else $this->paginate = array(
                    'conditions' => array('Attendee.conference_id' => '3'),
                    'contain' => $this->contain,
                    'limit' => 1500
                );
		$this->set('attendees', $this->paginate());
	}

/**
 * summary method
 *
 * @return void
 */
	public function summary($locality = null) {
                $this->loadModel('UserType');
		$this->Attendee->recursive = 1;
		if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4')))) {
                    //$this->set('locality',$this->Auth->user('locality_id'));
                    $this->paginate = array( 
                        'conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id =' => $this->Auth->user('locality_id')),//'(Attendee.cancel > "2012-11-01") OR (Attendee.cancel IS NULL)'),
                        'limit' => 200,
                        );
                    $this->set('attendees', $this->paginate());
		} else {
                    $locality_ids = $this->Attendee->Locality->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                    $this->set('localities',$this->Attendee->Locality->find('all',array('conditions' => array('Locality.id' => $locality_ids),'recursive' => 0,'order' => 'Locality.name')));
                    if(isset($locality)) {
                        $this->paginate = array(
                        'conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id =' => $locality),//'(Attendee.cancel > "2012-11-01") OR (Attendee.cancel IS NULL)'),
                        'limit' => 100,
                        );
                        $this->set('attendees', $this->paginate());
                        
                    }
                }
		
	}

/**
 * process method
 *
 * @return void
 */
	public function process($locality = null) {
                $this->loadModel('RegistrationStep');
                $this->loadModel('Locality');
                $locality_ids = $this->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                $this->set('localities',$this->Locality->find('all',array('conditions' => array('Locality.id' => $locality_ids),'recursive' => 0,'order' => 'Locality.name')));
                $this->Attendee->recursive = 0;
                if(isset($locality)) {
                    $this->paginate = array(
                        'conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id =' => $locality),
                        'limit' => 100
                    );
                    $this->set('rate_summaries',$this->Attendee->find('all',array('conditions' => array('Attendee.conference_id' => '3','Attendee.locality_id' => $locality,'Attendee.cancel' => null),'fields' => array('Attendee.rate','COUNT(Attendee.id) as count','SUM(Attendee.rate) as charge'),'group' => array('Attendee.rate'))));
                    $this->set('hosp_summaries',$this->Attendee->find('all',array('conditions' => array('Attendee.conference_id' => '3','Attendee.locality_id' => $locality,'Attendee.cancel' => null),'fields' => array('Attendee.group','COUNT(Attendee.id) as count'),'group' => array('Attendee.group'))));
                    //$rate_summaries = $this->Attendee->find('all',array('conditions' => array('Attendee.locality_id' => $locality),'fields' => array('Attendee.rate','COUNT(Attendee.id) as count','SUM(Attendee.rate) as charge'),'group' => array('Attendee.rate')));
                    //debug($rate_summaries);
                    //debug($locality);
                    //exit;
                } else {
                    $this->paginate = array(
                        'conditions' => array('Attendee.conference_id'=>'3','Attendee.locality_id' => $locality_ids),
                        'limit' => 100
                    );
                }
		$this->set('attendees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
		$this->set('attendee', $this->Attendee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendee->create();
                        //adds other allergy information to comments
                        if ($this->request->data['Attendee']['other_allergies']) {
                            $this->request->data['Attendee']['comment'] = 'Other Allergies: '.$this->request->data['Attendee']['other_allergies'].'; '.$this->request->data['Attendee']['comment'];
                        }
                        //changes first and last names to correct case
                        $this->request->data['Attendee']['first_name'] = ucwords($this->request->data['Attendee']['first_name']);
                        $this->request->data['Attendee']['last_name'] = ucwords($this->request->data['Attendee']['last_name']);
                        //sets rate based on save time related to the two registration deadlines
                        $this->loadModel('Conference');
                        $this->loadModel('ConferenceDeadline');
                        $this->loadModel('ConferenceDeadlineException');
                        $this->loadModel('UserType');
                        $this->loadModel('Rate');
                        $conference_start = $this->Conference->find('list',array('conditions' => array('Conference.id' => $this->request->data['Attendee']['conference_id']),'fields' => 'Conference.start_date'));
                        //debug($conference_start);
                        $conference_deadlines = $this->ConferenceDeadline->find('all',array('conditions' => array('ConferenceDeadline.id' => array('6','8'))));
                        //debug($conference_deadlines);
                        $conference_deadline_exceptions = $this->ConferenceDeadlineException->find('all',array('conditions' => array('ConferenceDeadlineException.conference_id' => $this->request->data['Attendee']['conference_id'],'ConferenceDeadlineException.conference_deadline_id' => array('6','8'))));
                        //debug($conference_deadline_exceptions);
                        foreach ($conference_deadlines as $deadline):
                            if ($deadline['ConferenceDeadline']['id'] === '6') $first_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$this->request->data['Attendee']['conference_id']]));
                                //debug('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days');
                                //echo '6';}
                            if ($deadline['ConferenceDeadline']['id'] === '8') $second_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$this->request->data['Attendee']['conference_id']]));
                                //debug('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])).' days');
                                //echo '8';}
                        endforeach;
                        //debug($first_deadline);
                        //debug(strtotime($first_deadline));
                        //debug(strtotime($second_deadline));
                        //exit;
                        if (!empty($conference_deadline_exceptions)) {
                            foreach ($conference_deadline_exceptions as $exception):
                                if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '6') $first_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                                if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '8') $second_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                            endforeach;
                        }
                        /**debug(strtotime($exception['ConferenceDeadlineException']['date']));
                        debug(strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date'])));
                        debug($first_deadline);
                        debug(strtotime('10/2/2012'));
                        debug(strtotime('now'));
                        debug($deadline['ConferenceDeadline']['weeks_before']*7+(6-$deadline['ConferenceDeadline']['weekday_id']));
                        debug($first_deadline);
                        debug(strtotime('10/23/2012 23:00'));
                        debug($second_deadline);
                        exit;**/
                        $prereg_fee = $this->Rate->find('list',array('conditions' => array('Rate.id' => '1'),'fields' => 'Rate.cost'));
                        $late_fee = $this->Rate->find('list',array('conditions' => array('Rate.id' => '8'),'fields' => 'Rate.cost'));
                        $serving_fee = $this->Rate->find('list',array('conditions' => array('Rate.id' => '6'),'fields' => 'Rate.cost'));
                        /**debug($prereg_fee);
                        debug($late_fee);
                        debug($serving_fee);
                        exit;**/
                        if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4'))) && strtotime('now') > $second_deadline) {
                            //$this->set('second_deadline',$second_deadline);
                            $this->Session->setFlash(__('Registration has been closed. All registrants at this point must register at the conference.'),'failure');
                            $this->redirect(array('action' => 'index'));
                        } elseif ($this->request->data['Attendee']['locality_id'] <= 3) $this->request->data['Attendee']['rate'] = $serving_fee[6];
                        else {
                            $this->request->data['Attendee']['rate'] = $prereg_fee[1];
                            if (strtotime('now') > $first_deadline) {
                                //add late fee
                                $this->request->data['Attendee']['rate'] = ($this->request->data['Attendee']['rate'] + $late_fee[8]);
                                //add entry into finances
                                $this->loadModel('Finance');
                                $this->Finance->create($finance = array(
                                    'conference_id' => $this->request->data['Attendee']['conference_id'],
                                    'receive_date' => date('Y-m-d',strtotime('now')),
                                    'locality_id' => $this->request->data['Attendee']['locality_id'],
                                    'description' => 'Late pre-registration',
                                    'count' => '1',
                                    'rate' => $this->request->data['Attendee']['rate'],
                                    'charge' => null,
                                    'payment' => null,
                                    'balance' => null,
                                    'comment' => $this->request->data['Attendee']['first_name'].' '.$this->request->data['Attendee']['last_name']
                                ));
                                $this->Finance->save($finance);
                            }
                        }
                        /**debug($first_deadline);
                        debug(strtotime('now'));
                        debug(strtotime('now') > $first_deadline);
                        debug(($this->request->data['Attendee']['rate'] + $late_fee[8]));
                        debug($this->request->data['Attendee']['rate'] + $late_fee[8]);
                        debug($this->request->data['Attendee']['rate']);
                        debug($fee);
                        exit;**/
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'),'success');
                                if (isset($this->request->data['submit'])) {
                                    //$this->Session->delete('Attendee');
                                    $this->redirect(array('action' => 'index'));
                                }
                                if (isset($this->request->data['save_add'])) {
                                    $this->Session->write('Attendee.conference_id',$this->request->data['Attendee']['conference_id']);
                                    $this->Session->write('Attendee.gender',$this->request->data['Attendee']['gender']);
                                    $this->Session->write('Attendee.campus_id',$this->request->data['Attendee']['campus_id']);
                                    //debug($this->request->data['Attendee']['conference_id']);
                                    //exit;
                                    $this->redirect(array('action' => 'add'));
                                    //debug($this->params);
                                    //exit;
                                }
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'),'failure');
			}
		}
		//$this->set('user',$this->Auth->user());
		                $six_months_future = date('Y-m-d', strtotime('+4 month'));
                $this->set('conferences', $this->Attendee->Conference->find('list',array('conditions' => array('Conference.start_date > NOW()',"Conference.start_date <= '$six_months_future'"),'fields' => 'Conference.complete_name')));
		$this->set('locality', $this->Auth->user('Locality.id'));
                $localities = $this->Attendee->Locality->find('list');
		$campuses = $this->Attendee->Campus->find('list');
		$statuses = $this->Attendee->Status->find('list', array(/**'conditions' => array('Status.id >' => 1), **/'order' => 'Status.id'));
		$lodgings = $this->Attendee->Lodging->find('list');
		$creators = $this->Attendee->Creator->find('list');
		$modifiers = $this->Attendee->Modifier->find('list');
                $this->set('conference_id',$this->Session->read('Attendee.conference_id'));
                $this->set('gender',$this->Session->read('Attendee.gender'));
                $this->set('campus_id',$this->Session->read('Attendee.campus_id'));

		$this->set(compact('conferences', 'localities', 'campuses', 'statuses', 'lodgings', 'creators', 'modifiers'));
	}

/**
 * register method
 *
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
			$this->Attendee->create();
                        if ($this->request->data['Attendee']['other_allergies']) {
                            $this->request->data['Attendee']['comment'] = 'Other Allergies: '.$this->request->data['Attendee']['other_allergies'].';'.$this->request->data['Attendee']['comment'];
                        }
                        //still need to add rate calculation
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'),'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'),'failure');
			}
		}
		$this->set('user',$this->Auth->user());
                $six_months_future = date('Y-m-d', strtotime('+4 month'));
                $this->set('conferences', $this->Attendee->Conference->find('list',array('conditions' => array('Conference.start_date > NOW()',"Conference.start_date <= '$six_months_future'"),'fields' => 'Conference.complete_name')));
                $localities = $this->Attendee->Locality->find('list', array('conditions' => array('Locality.id' => array(2,$this->Auth->user('Locality.id'))), 'fields' => 'Locality.name'));
                $campuses = $this->Attendee->Campus->find('list');
		$statuses = $this->Attendee->Status->find('list', array('conditions' => array('Status.id >' => 1), 'order' => 'Status.id'));
		$lodgings = $this->Attendee->Lodging->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses', 'lodgings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $this->loadModel('Conference');
                        $this->loadModel('ConferenceDeadline');
                        $this->loadModel('ConferenceDeadlineException');
                        $this->loadModel('UserType');
                        $conference_start = $this->Conference->find('list',array('conditions' => array('Conference.id' => $this->request->data['Attendee']['conference_id']),'fields' => 'Conference.start_date'));
                        $conference_deadlines = $this->ConferenceDeadline->find('all',array('conditions' => array('ConferenceDeadline.id' => array('6','8'))));
                        $conference_deadline_exceptions = $this->ConferenceDeadlineException->find('all',array('conditions' => array('ConferenceDeadlineException.conference_id' => $this->request->data['Attendee']['conference_id'],'ConferenceDeadlineException.conference_deadline_id' => array('6','8'))));
                        //debug($conference_start);
                        //debug($conference_deadline_exceptions);
                        foreach ($conference_deadlines as $deadline):
                            if ($deadline['ConferenceDeadline']['id'] === '6') $first_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$this->request->data['Attendee']['conference_id']]));
                                //debug('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days');
                                //echo '6';}
                            if ($deadline['ConferenceDeadline']['id'] === '8') $second_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$this->request->data['Attendee']['conference_id']]));
                                //debug('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])).' days');
                                //echo '8';}
                        endforeach;
                        //debug($first_deadline);
                        if (!empty($conference_deadline_exceptions)) {
                            foreach ($conference_deadline_exceptions as $exception):
                                if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '6') $first_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                                if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '8') $second_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                            endforeach;
                        }
                        if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4'))) && strtotime('now') > $second_deadline) {
                            //$this->set('second_deadline',$second_deadline);
                            $this->Session->setFlash(__('Registration has been closed. All registrants at this point must register at the conference.'),'failure');
                            $this->redirect(array('action' => 'index'));
                        }
			if ($this->Attendee->save($this->request->data)) {
				//$this->_flash(__('The attendee has been saved',true),'success');
                                $this->Session->setFlash(__('The attendee has been saved'),'success');
				if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id' => array('2','3'))))) {
                                    $this->redirect(array('action' => 'process'));
                                } else $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'),'failure');
			}
		} else {
			$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
			$this->request->data = $this->Attendee->find('first', $options);
		}
                $six_months_future = date('Y-m-d', strtotime('+4 month'));
                $this->set('conferences', $this->Attendee->Conference->find('list',array('conditions' => array('Conference.start_date > NOW()',"Conference.start_date <= '$six_months_future'"),'fields' => 'Conference.complete_name')));
		$this->set('locality', $this->Auth->user('Locality.id'));
		$localities = $this->Attendee->Locality->find('list');
		$campuses = $this->Attendee->Campus->find('list');
		$statuses = $this->Attendee->Status->find('list', array(/**'conditions' => array('Status.id >' => 1), **/'order' => 'Status.id'));
		$lodgings = $this->Attendee->Lodging->find('list');
		$creators = $this->Attendee->Creator->find('list');
		$modifiers = $this->Attendee->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses', 'lodgings', 'creators', 'modifiers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Attendee->id = $id;
		if (!$this->Attendee->exists()) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		                $attendee = $this->Attendee->read(null, $id);
                //debug($attendee);
                //exit;
                $this->loadModel('Conference');
                $this->loadModel('ConferenceDeadline');
                $this->loadModel('ConferenceDeadlineException');
                $this->loadModel('UserType');
                $this->loadModel('Rate');
                $conference_start = $this->Conference->find('list',array('conditions' => array('Conference.id' => $attendee['Attendee']['conference_id']),'fields' => 'Conference.start_date'));
                $conference_deadlines = $this->ConferenceDeadline->find('all',array('conditions' => array('ConferenceDeadline.id' => array('6','8'))));
                //debug($conference_deadlines);
                //debug($conference_start);
                //exit;
                $conference_deadline_exceptions = $this->ConferenceDeadlineException->find('all',array('conditions' => array('ConferenceDeadlineException.conference_id' => $attendee['Attendee']['conference_id'],'ConferenceDeadlineException.conference_deadline_id' => array('6','8'))));
                foreach ($conference_deadlines as $deadline):
                    if ($deadline['ConferenceDeadline']['id'] === '6') $first_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$attendee['Attendee']['conference_id']]));
                    if ($deadline['ConferenceDeadline']['id'] === '8') $second_deadline = strtotime('-'.(($deadline['ConferenceDeadline']['weeks_before']*7)+(6-$deadline['ConferenceDeadline']['weekday_id'])-1).' days',strtotime($conference_start[$attendee['Attendee']['conference_id']]));
                endforeach;
                if (!empty($conference_deadline_exceptions)) {
                    foreach ($conference_deadline_exceptions as $exception):
                        if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '6') $first_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                        if ($exception['ConferenceDeadlineException']['conference_deadline_id'] === '8') $second_deadline = strtotime('+1 day',strtotime($exception['ConferenceDeadlineException']['date']));
                    endforeach;
                }
                if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4'))) && strtotime('now') > $second_deadline) {
                    $this->Session->setFlash(__('Registration has been closed. All registrants at this point must register at the conference.'),'failure');
                    $this->redirect(array('action' => 'index'));
                }elseif (strtotime('now') > $first_deadline) {
                    $attendee['Attendee']['cancel'] = date('Y-m-d h:i:s');
                    $this->Attendee->save($attendee,array('fieldList' => array('cancel')));
                    $this->loadModel('Finance');
                    $this->Finance->create($finance = array(
                        'conference_id' => $attendee['Attendee']['conference_id'],
                        'receive_date' => date('Y-m-d',strtotime('now')),
                        'locality_id' => $attendee['Attendee']['locality_id'],
                        'description' => 'Cancellation',
                        'count' => '-1',
                        'rate' => $attendee['Attendee']['rate'],
                        'charge' => null,
                        'payment' => null,
                        'balance' => null,
                        'comment' => $attendee['Attendee']['first_name'].' '.$attendee['Attendee']['last_name']
                    ));
                    //debug($finance);
                    //exit;
                    $this->Finance->save($finance);
                    $this->Session->setFlash(__('Attendee as been cancelled'),'success');
                    $this->redirect(array('action' => 'index'));
                }
                $this->request->onlyAllow('post', 'delete');
		if ($this->Attendee->delete()) {
			$this->Session->setFlash(__('Attendee deleted'),'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee was not deleted'),'failure');
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Attendee->recursive = 0;
		$this->set('attendees', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
		$this->set('attendee', $this->Attendee->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Attendee->create();
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'));
			}
		}
		$conferences = $this->Attendee->Conference->find('list');
		$localities = $this->Attendee->Locality->find('list');
		$campuses = $this->Attendee->Campus->find('list');
		$statuses = $this->Attendee->Status->find('list');
		$lodgings = $this->Attendee->Lodging->find('list');
		$creators = $this->Attendee->Creator->find('list');
		$modifiers = $this->Attendee->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses', 'lodgings', 'creators', 'modifiers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
			$this->request->data = $this->Attendee->find('first', $options);
		}
		$conferences = $this->Attendee->Conference->find('list');
		$localities = $this->Attendee->Locality->find('list');
		$campuses = $this->Attendee->Campus->find('list');
		$statuses = $this->Attendee->Status->find('list');
		$lodgings = $this->Attendee->Lodging->find('list');
		$creators = $this->Attendee->Creator->find('list');
		$modifiers = $this->Attendee->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'campuses', 'statuses', 'lodgings', 'creators', 'modifiers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Attendee->id = $id;
		if (!$this->Attendee->exists()) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendee->delete()) {
			$this->Session->setFlash(__('Attendee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
