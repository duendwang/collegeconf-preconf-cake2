<?php
App::uses('AppController', 'Controller');
/**
 * Finances Controller
 *
 * @property Finance $Finance
 */
class FinancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Finance->recursive = 0;
		$this->set('finances', $this->paginate());
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
		$conferences = $this->Finance->Conference->find('list');
		$localities = $this->Finance->Locality->find('list');
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
		$conferences = $this->Finance->Conference->find('list');
		$localities = $this->Finance->Locality->find('list');
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
