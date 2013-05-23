<?php
App::uses('Attendee', 'Model');

/**
 * Attendee Test Case
 *
 */
class AttendeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendee',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.cancel',
		'app.user',
		'app.locality',
		'app.finance',
		'app.finance_type',
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.payment',
		'app.registration_step',
		'app.status',
		'app.campus',
		'app.registration_team_assignment',
		'app.registration_team',
		'app.user_type',
		'app.account_type',
		'app.email',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.check_in'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attendee = ClassRegistry::init('Attendee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attendee);

		parent::tearDown();
	}

}
