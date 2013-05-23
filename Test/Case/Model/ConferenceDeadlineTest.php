<?php
App::uses('ConferenceDeadline', 'Model');

/**
 * ConferenceDeadline Test Case
 *
 */
class ConferenceDeadlineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conference_deadline',
		'app.weekday',
		'app.conference_deadline_exception',
		'app.conference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConferenceDeadline = ClassRegistry::init('ConferenceDeadline');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConferenceDeadline);

		parent::tearDown();
	}

}
