<?php
App::uses('AppController', 'Controller');
/**
 * Attendees Controller
 *
 * @property Attendee $Attendee
 */
class AttendeesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attendee->recursive = 0;
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
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendee->delete()) {
			$this->Session->setFlash(__('Attendee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee was not deleted'));
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
