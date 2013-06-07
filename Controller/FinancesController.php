<?php
App::uses('AppController', 'Controller');
/**
 * Finances Controller
 *
 * @property Finance $Finance
 */
class FinancesController extends AppController {

/**
 * contain
 *
 * @var array
 */
        public $contain = array(
            'Locality' => array(
                'fields' => array('Locality.name')
            ),
            'Conference' => array(
                'fields' => array('Conference.code')
            ),
            'FinanceType' => array(
                'fields' => array('FinanceType.name')
            ),
            'Creator' => array(
                'fields' => array('Creator.username')
            ),
            'Modifier' => array(
                'fields' => array('Modifier.username')
            )
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->loadModel('UserType');
                $this->loadModel('RegistrationStep');
                //$this->loadModel('Locality');
                $locality_ids = $this->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                $this->set('localities',$this->Finance->Locality->find('all',array('conditions' => array('Locality.id' => $locality_ids),'recursive' => 0,'order' => 'Locality.city')));
		$this->Finance->recursive = 0;
                if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4')))) {
                    $this->paginate = array(
                        'conditions' => array('Finance.conference_id' => '3','Finance.locality_id =' => $this->Auth->user('locality_id')),
                        'order' => array('Finance.receive_date' => 'asc')
                    );
                    $this->set('totals',$this->Finance->find('all',array('conditions' => array('Finance.conference_id' => '3','Finance.locality_id' => $this->Auth->user('locality_id')),'fields' => array('Finance.conference_id','sum(count) as total_count','sum(charge) as total_charge','sum(payment) as total_payment','sum(balance) as total_balance'),'group' => array('Finance.conference_id'),'recursive' => 2)));
                } elseif($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id' => array('2', '3'))))) {
                    if(isset($locality)) {
                        $this->paginate = array(
                            'conditions' => array('Finance.conference_id' => '3','Finance.locality_id =' => $locality),
                            'order' => array('Finance.receive_date' => 'asc')
                        );
                        $this->set('totals',$this->Finance->find('all',array('conditions' => array('Finance.conference_id' => '3','Finance.locality_id' => $locality),'fields' => array('Finance.conference_id','sum(count) as total_count','sum(charge) as total_charge','sum(payment) as total_payment','sum(balance) as total_balance'),'group' => array('Finance.conference_id'),'recursive' => 2)));
                    } else {
                        $this->paginate = array(
                            'conditions' => array('Finance.conference_id' => '3','Finance.locality_id' => $locality_ids),
                            'order' => array('Finance.receive_date' => 'asc')
                        );
                    }
                }
		$this->set('finances', $this->paginate());
	}

/**
 * summary method
 *
 * @return void
 */
	public function summary($locality = null) {
                $this->loadModel('UserType');
                //$this->loadModel('RegistrationStep');
                //$this->loadModel('Locality');
                $this->Finance->recursive = 0;
                if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4')))) {
                    $this->paginate = array(
                        'conditions' => array('Finance.conference_id' => '3','Finance.locality_id =' => $this->Auth->user('locality_id')),
                        'order' => array('Finance.receive_date' => 'asc'),
                    );
                    $this->set('totals',$this->Finance->find('all',array('conditions' => array('Finance.conference_id' => '3','Finance.locality_id' => $this->Auth->user('locality_id')),'fields' => array('Finance.conference_id','sum(count) as total_count','sum(charge) as total_charge','sum(payment) as total_payment','sum(balance) as total_balance'),'group' => array('Finance.conference_id'),'recursive' => 2)));
                    $this->set('finances', $this->paginate());
                } elseif($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id' => array('2', '3'))))) {
                    $locality_ids = $this->Finance->Locality->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                    $this->set('localities',$this->Finance->Locality->find('all',array('conditions' => array('Locality.id' => $locality_ids),'recursive' => 0,'order' => 'Locality.city')));
                    if(isset($locality)) {
                        $this->paginate = array(
                            'conditions' => array('Finance.conference_id' => '3','Finance.locality_id =' => $locality),
                            'order' => array('Finance.receive_date' => 'asc'),
                        );
                        $this->set('totals',$this->Finance->find('all',array('conditions' => array('Finance.conference_id' => '3','Finance.locality_id' => $locality),'fields' => array('Finance.conference_id','sum(count) as total_count','sum(charge) as total_charge','sum(payment) as total_payment','sum(balance) as total_balance'),'group' => array('Finance.conference_id'),'recursive' => 2)));
                        $this->set('finances', $this->paginate());
                    }
                }
		//$this->set('finances', $this->paginate());
	}

/**
 * finance_report method
 *
 * @param string $id
 * @return void
 */

        public function report($conference = 3) {
            /**$this->Finance->recursive = 2;
            $this->paginate = array(
                'conditions' => array('Finance.conference_id' => $conference),
                'fields' => array(
                    'Finance.locality_id',
                    'Finance.conference_id',
                    'SUM(Finance.count) as "count"',
                    'SUM(Finance.charge) as "total charge"',
                    'SUM(Finance.payment) as "total payment"',
                    'SUM(Finance.balance) as "balance"'),
                'order' => array('Finance.locality_id' => 'asc'),
                'group' => array('Finance.locality_id')
                );*/
            $report_entries = $this->Finance->query("SELECT city, conference_id, locality_id,
                SUM(count) AS count,
                SUM(charge) AS 'total charge',
                SUM(payment) AS 'total payment',
                SUM(balance) AS balance
                FROM finances As Finance
                INNER JOIN localities As Locality
                ON Finance.locality_id=Locality.id
                WHERE Finance.conference_id=3
                GROUP BY Finance.locality_id");
           
            //print_r($report_entries);
            
            $this->set(compact('report_entries'));
            //$this->set('report_entries', $this->paginate());
                     
        }

/**
 * report1 method
 * 
 * @return void
 */

	public function report1() {
                $locality_summaries = $this->Finance->find('all',array(
                    'fields' => array('Finance.locality_id', 'SUM(count) as count','SUM(charge) as charge','SUM(payment) as payment','SUM(balance) as balance'),
                    'order' => array('Finance.locality_id'),
                    'group' => array('Finance.locality_id'),
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
		if (!$this->Finance->exists($id)) {
			throw new NotFoundException(__('Invalid finance'));
		}
		$options = array('conditions' => array('Finance.' . $this->Finance->primaryKey => $id));
		$this->set('finance', $this->Finance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Finance->create();
			if ($this->Finance->save($this->request->data)) {
				$this->Session->setFlash(__('The finance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finance could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('RegistrationStep');
                $locality_ids = $this->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                $six_months_future = date('Y-m-d', strtotime('+4 month'));
                $three_months_ago = date('Y-m-d', strtotime('-3 month'));
                $conferences = $this->Finance->Conference->find('list',array('conditions' => array("Conference.start_date > '$three_months_ago'","Conference.start_date <= '$six_months_future'"),'fields' => 'Conference.complete_name'));
		if ($this->Auth->user('id') == '10')
                    $localities = $this->Finance->Locality->find('list', array('fields' => 'Locality.city'));
                else
                    $localities = $this->Finance->Locality->find('list', array('conditions' => array('Locality.id' => $locality_ids),'fields' => 'Locality.city'));
		$financeTypes = $this->Finance->FinanceType->find('list');
		$creators = $this->Finance->Creator->find('list');
		$modifiers = $this->Finance->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'financeTypes', 'creators', 'modifiers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Finance->exists($id)) {
			throw new NotFoundException(__('Invalid finance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Finance->save($this->request->data)) {
				$this->Session->setFlash(__('The finance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Finance.' . $this->Finance->primaryKey => $id));
			$this->request->data = $this->Finance->find('first', $options);
		}
		$this->loadModel('RegistrationStep');
                $locality_ids = $this->RegistrationStep->find('list',array('conditions' => array('RegistrationStep.conference_id' => '3','RegistrationStep.user_id =' => $this->Auth->user('id')),'fields' => 'RegistrationStep.locality_id'));
                $six_months_future = date('Y-m-d', strtotime('+4 month'));
                $three_months_ago = date('Y-m-d', strtotime('-3 month'));
                $conferences = $this->Finance->Conference->find('list',array('conditions' => array("Conference.start_date > '$three_months_ago'","Conference.start_date <= '$six_months_future'"),'fields' => 'Conference.complete_name'));
		if ($this->Auth->user('id') == '10')
                    $localities = $this->Finance->Locality->find('list', array('fields' => 'Locality.city'));
                else
                    $localities = $this->Finance->Locality->find('list', array('conditions' => array('Locality.id' => $locality_ids),'fields' => 'Locality.city'));
		$financeTypes = $this->Finance->FinanceType->find('list');
		$creators = $this->Finance->Creator->find('list');
		$modifiers = $this->Finance->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'financeTypes', 'creators', 'modifiers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Finance->id = $id;
		if (!$this->Finance->exists()) {
			throw new NotFoundException(__('Invalid finance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Finance->delete()) {
			$this->Session->setFlash(__('Finance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Finance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Finance->recursive = 0;
		$this->set('finances', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Finance->exists($id)) {
			throw new NotFoundException(__('Invalid finance'));
		}
		$options = array('conditions' => array('Finance.' . $this->Finance->primaryKey => $id));
		$this->set('finance', $this->Finance->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Finance->create();
			if ($this->Finance->save($this->request->data)) {
				$this->Session->setFlash(__('The finance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finance could not be saved. Please, try again.'));
			}
		}
		$conferences = $this->Finance->Conference->find('list');
		$localities = $this->Finance->Locality->find('list');
		$financeTypes = $this->Finance->FinanceType->find('list');
		$creators = $this->Finance->Creator->find('list');
		$modifiers = $this->Finance->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'financeTypes', 'creators', 'modifiers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Finance->exists($id)) {
			throw new NotFoundException(__('Invalid finance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Finance->save($this->request->data)) {
				$this->Session->setFlash(__('The finance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Finance.' . $this->Finance->primaryKey => $id));
			$this->request->data = $this->Finance->find('first', $options);
		}
		$conferences = $this->Finance->Conference->find('list');
		$localities = $this->Finance->Locality->find('list');
		$financeTypes = $this->Finance->FinanceType->find('list');
		$creators = $this->Finance->Creator->find('list');
		$modifiers = $this->Finance->Modifier->find('list');
		$this->set(compact('conferences', 'localities', 'financeTypes', 'creators', 'modifiers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Finance->id = $id;
		if (!$this->Finance->exists()) {
			throw new NotFoundException(__('Invalid finance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Finance->delete()) {
			$this->Session->setFlash(__('Finance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Finance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
