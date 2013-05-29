<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * beforeFilter method
 *
 * @return void
 */

        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('login','logout');
        }
 
 /**
 * login method
 *
 * @return void
 */
 
	public function login() {
            //$this->layout = 'login';
            if ($this->request->is('post')) {
		if ($this->Auth->login()) {
                    //debug($this->Auth->redirect());
                    //exit;
                    $this->redirect($this->Auth->redirect());
                } else {
                    $this->Session->setFlash(__('Invalid username or password, try again'),'failure');
                    //$this->Session->setFlash(__('wrong'));
                }
            }
	}
 
 /**
 * logout method
 *
 * @return void
 */
 
	public function logout() {
                $this->Session->delete('User');
                $this->Session->delete('Attendee');
                //$this->Session->destroy();
                $this->Session->setFlash(__('You have been successfully logged out. For security reasons, please close your browser.'),'success');
		$this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $this->loadModel('UserType');
		$this->User->recursive = 0;
                if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id' => array('1','2','3'))))) {
                    $this->paginate = array(
                        'conditions' => array('UserType.account_type_id' => '1',"UserType.user_id NOT IN ('1','19')",'User.active' => 1),
                        'order' => 'User.last_name',
                        'limit' => 50,
                        'recursive' => 2,
                        'joins' => array(
                            array(
                                'table' => 'user_types',
                                'alias' => 'UserType',
                                'type' => 'inner',
                                'conditions' => array('UserType.user_id=User.id')
                        ))
                    );
                    //$this->set('overseer_users',$this->UserType->find('all',array('conditions' => array('UserType.account_type_id' => '1',"UserType.user_id NOT IN ('1','19')"),'recursive' => 2,'order' => 'User.last_name')));
                    $this->set('overseer_users',$this->paginate());
                    $this->paginate = array(
                        'conditions' => array('UserType.account_type_id' => array('2','3'), 'UserType.user_id !=' => 1,'User.active' => 1),
                        'order' => 'User.last_name',
                        'limit' => 50,
                        'recursive' => 2,
                        'joins' => array(
                            array(
                                'table' => 'user_types',
                                'alias' => 'UserType',
                                'type' => 'inner',
                                'conditions' => array('UserType.user_id=User.id')
                        ))
                    );
                    $this->set('registration_users',$this->paginate());
                    //$this->set('registration_users',$this->UserType->find('all',array('conditions' => array('UserType.account_type_id' => array('2','3'), 'UserType.user_id !=' => 1),'recursive' => 2,'order' => 'User.last_name')));
                }
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$localities = $this->User->Locality->find('list');
		$statuses = $this->User->Status->find('list');
		$campuses = $this->User->Campus->find('list');
		$this->set(compact('localities', 'statuses', 'campuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} elseif (($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4'))) && $id == $this->Auth->user('id')) | $this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id <' => '4')))) { //LRC account types can only edit their own account, all other account types without restriction
                    $this->request->data = $this->User->read(null, $id);
		} else {
                    $this->Session->setFlash(__('You are not authorized to view this page'),'failure');
                    $this->redirect(array('controller' => 'pages', 'action' => 'home'));
                    //$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                    //$this->request->data = $this->User->find('first', $options);
		}
                $this->set('Lrcs', $this->Lrc->find('all', array('conditions' => array('Lrc.locality_id =' => $this->Auth->user('locality_id')))));
		$localities = $this->User->Locality->find('list');
		$statuses = $this->User->Status->find('list',array('order' => 'Status.id'));
		$campuses = $this->User->Campus->find('list');
		$this->set(compact('localities', 'statuses', 'campuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$localities = $this->User->Locality->find('list');
		$statuses = $this->User->Status->find('list');
		$campuses = $this->User->Campus->find('list');
		$this->set(compact('localities', 'statuses', 'campuses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$localities = $this->User->Locality->find('list');
		$statuses = $this->User->Status->find('list');
		$campuses = $this->User->Campus->find('list');
		$this->set(compact('localities', 'statuses', 'campuses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
