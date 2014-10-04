<?php
App::uses('Status', 'Model');

/**
 * Status Test Case
 *
 */
class StatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status',
		'app.attendee',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.cancel',
		'app.user',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.finance',
		'app.locality',
		'app.lodging',
		'app.lrc',
		'app.payment',
		'app.registration_step',
		'app.finance_type',
		'app.attendees_finance',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.campus',
		'app.check_in'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Status = ClassRegistry::init('Status');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Status);

		parent::tearDown();
	}

}
