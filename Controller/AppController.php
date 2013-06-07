<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    function _flash($message,$type='message') {
        $messages = (array)$this->Session->read('Message.multiFlash');
        $messages[] = array(
            'message'=>$message,
            'layout'=>'default',
	    'element'=> 'default',
	    'params'=>array('class'=>$type),
        );
        $this->Session->write('Message.multiFlash', $messages);
    }
    
    public function beforeFilter() {
        //$this->Auth->allowedActions = array('UserType'); //Allows access to UserType controller without logging in
        //$this->allow('logout');
    }
    
    public function beforeRender() {
        if($this->Auth->loggedIn()) {
            $this->loadModel('Attendee');
            $this->viewClass = 'Theme'; //Activates use of themes
            $this->loadModel('UserType'); //To pull UserTypes data
            if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '1')))) {
                $this->theme = 'Overseer'; //Set Overseer theme if logged in account is overseer account
            } if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id' => array('2','3'))))) {
                $this->theme = 'Registration'; //Set Registration theme if logged in account is that of registration team
            } if($this->UserType->find('list',array('conditions' => array('UserType.user_id =' => $this->Auth->user('id'),'UserType.account_type_id =' => '4')))) {
                $this->theme = 'LRC'; //Set LRC theme if logged in account is locality account
                App::import('Controller','Attendees');
                $Attendees = new AttendeesController;
                $Attendees->constructClasses();
                if($Attendees->_requirementCheck() && $this->request['controller'] == 'pages' && $this->request['pass'][0] == 'home') $this->_flash(__('Multiple errors found for saved attendees. Please correct ASAP. Incomplete registrations may be denied or late fees assessed.',true),'error');
            }
            $this->loadModel('User');
            $this->set('User',$this->Auth->user());
        }
        
    }
    
    public $components = array(
        'DebugKit.Toolbar',
        'Acl',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            //'authorize' => array('Actions' => array('actionPath' => 'controllers'))
        ),
    );
	
    /**public function isAuthorized($user) {
	if (isset($user['id'])) {
            return true;
        }
        return false;
    }**/
//TODO consider using routing prefixes instead of themes for different roles

}
