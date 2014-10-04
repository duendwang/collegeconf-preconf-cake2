<?php
App::uses('Weekday', 'Model');

/**
 * Weekday Test Case
 *
 */
class WeekdayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.weekday',
		'app.conference_deadline',
		'app.conference_deadline_exception',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.attendee',
		'app.locality',
		'app.finance',
		'app.finance_type',
		'app.user',
		'app.status',
		'app.campus',
		'app.registration_team_assignment',
		'app.registration_team',
		'app.user_type',
		'app.account_type',
		'app.registration_step',
		'app.cancel',
		'app.email',
		'app.payment',
		'app.sdf',
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.check_in',
		'app.onsite_registration',
		'app.part_time_registration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Weekday = ClassRegistry::init('Weekday');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Weekday);

		parent::tearDown();
	}

}
