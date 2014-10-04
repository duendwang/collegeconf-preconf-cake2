<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.locality',
		'app.attendee',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.cancel',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.finance',
		'app.finance_type',
		'app.attendees_finance',
		'app.lodging',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.payment',
		'app.registration_step',
		'app.campus',
		'app.status',
		'app.check_in',
		'app.lrc',
		'app.registration_team_assignment',
		'app.registration_team',
		'app.user_type',
		'app.account_type',
		'app.email',
		'app.sdf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
