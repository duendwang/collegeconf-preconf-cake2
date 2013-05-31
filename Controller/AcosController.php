<?php
App::uses('AppController', 'Controller');
/**
 * Acos Controller
 *
 * @property Aco $Aco
 */
class AcosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aco->recursive = 0;
		$this->set('acos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aco->exists($id)) {
			throw new NotFoundException(__('Invalid aco'));
		}
		$options = array('conditions' => array('Aco.' . $this->Aco->primaryKey => $id));
		$this->set('aco', $this->Aco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aco->create();
			if ($this->Aco->save($this->request->data)) {
				$this->Session->setFlash(__('The aco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.'));
			}
		}
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('aros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aco->exists($id)) {
			throw new NotFoundException(__('Invalid aco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aco->save($this->request->data)) {
				$this->Session->setFlash(__('The aco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aco.' . $this->Aco->primaryKey => $id));
			$this->request->data = $this->Aco->find('first', $options);
		}
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('aros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aco->id = $id;
		if (!$this->Aco->exists()) {
			throw new NotFoundException(__('Invalid aco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aco->delete()) {
			$this->Session->setFlash(__('Aco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Aco->recursive = 0;
		$this->set('acos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Aco->exists($id)) {
			throw new NotFoundException(__('Invalid aco'));
		}
		$options = array('conditions' => array('Aco.' . $this->Aco->primaryKey => $id));
		$this->set('aco', $this->Aco->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Aco->create();
			if ($this->Aco->save($this->request->data)) {
				$this->Session->setFlash(__('The aco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.'));
			}
		}
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('aros'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Aco->exists($id)) {
			throw new NotFoundException(__('Invalid aco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aco->save($this->request->data)) {
				$this->Session->setFlash(__('The aco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aco.' . $this->Aco->primaryKey => $id));
			$this->request->data = $this->Aco->find('first', $options);
		}
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('aros'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Aco->id = $id;
		if (!$this->Aco->exists()) {
			throw new NotFoundException(__('Invalid aco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aco->delete()) {
			$this->Session->setFlash(__('Aco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
