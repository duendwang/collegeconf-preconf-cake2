<?php
App::uses('ConferenceDeadlineException', 'Model');

/**
 * ConferenceDeadlineException Test Case
 *
 */
class ConferenceDeadlineExceptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conference_deadline_exception',
		'app.conference',
		'app.conference_deadline'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConferenceDeadlineException = ClassRegistry::init('ConferenceDeadlineException');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConferenceDeadlineException);

		parent::tearDown();
	}

}
