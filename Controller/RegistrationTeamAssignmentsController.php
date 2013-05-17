<?php
App::uses('AppController', 'Controller');
/**
 * RegistrationTeamAssignments Controller
 *
 * @property RegistrationTeamAssignment $RegistrationTeamAssignment
 */
class RegistrationTeamAssignmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RegistrationTeamAssignment->recursive = 0;
		$this->set('registrationTeamAssignments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegistrationTeamAssignment->exists($id)) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		$options = array('conditions' => array('RegistrationTeamAssignment.' . $this->RegistrationTeamAssignment->primaryKey => $id));
		$this->set('registrationTeamAssignment', $this->RegistrationTeamAssignment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegistrationTeamAssignment->create();
			if ($this->RegistrationTeamAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The registration team assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration team assignment could not be saved. Please, try again.'));
			}
		}
		$users = $this->RegistrationTeamAssignment->User->find('list');
		$registrationTeams = $this->RegistrationTeamAssignment->RegistrationTeam->find('list');
		$this->set(compact('users', 'registrationTeams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RegistrationTeamAssignment->exists($id)) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RegistrationTeamAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The registration team assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration team assignment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegistrationTeamAssignment.' . $this->RegistrationTeamAssignment->primaryKey => $id));
			$this->request->data = $this->RegistrationTeamAssignment->find('first', $options);
		}
		$users = $this->RegistrationTeamAssignment->User->find('list');
		$registrationTeams = $this->RegistrationTeamAssignment->RegistrationTeam->find('list');
		$this->set(compact('users', 'registrationTeams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RegistrationTeamAssignment->id = $id;
		if (!$this->RegistrationTeamAssignment->exists()) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RegistrationTeamAssignment->delete()) {
			$this->Session->setFlash(__('Registration team assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registration team assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RegistrationTeamAssignment->recursive = 0;
		$this->set('registrationTeamAssignments', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RegistrationTeamAssignment->exists($id)) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		$options = array('conditions' => array('RegistrationTeamAssignment.' . $this->RegistrationTeamAssignment->primaryKey => $id));
		$this->set('registrationTeamAssignment', $this->RegistrationTeamAssignment->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RegistrationTeamAssignment->create();
			if ($this->RegistrationTeamAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The registration team assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration team assignment could not be saved. Please, try again.'));
			}
		}
		$users = $this->RegistrationTeamAssignment->User->find('list');
		$registrationTeams = $this->RegistrationTeamAssignment->RegistrationTeam->find('list');
		$this->set(compact('users', 'registrationTeams'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RegistrationTeamAssignment->exists($id)) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RegistrationTeamAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The registration team assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration team assignment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegistrationTeamAssignment.' . $this->RegistrationTeamAssignment->primaryKey => $id));
			$this->request->data = $this->RegistrationTeamAssignment->find('first', $options);
		}
		$users = $this->RegistrationTeamAssignment->User->find('list');
		$registrationTeams = $this->RegistrationTeamAssignment->RegistrationTeam->find('list');
		$this->set(compact('users', 'registrationTeams'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RegistrationTeamAssignment->id = $id;
		if (!$this->RegistrationTeamAssignment->exists()) {
			throw new NotFoundException(__('Invalid registration team assignment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RegistrationTeamAssignment->delete()) {
			$this->Session->setFlash(__('Registration team assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Registration team assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
