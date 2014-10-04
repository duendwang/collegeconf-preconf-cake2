<?php
App::uses('EmailVariable', 'Model');

/**
 * EmailVariable Test Case
 *
 */
class EmailVariableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.email_variable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmailVariable = ClassRegistry::init('EmailVariable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailVariable);

		parent::tearDown();
	}

}
