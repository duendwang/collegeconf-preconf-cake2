<?php
App::uses('ConferenceLocation', 'Model');

/**
 * ConferenceLocation Test Case
 *
 */
class ConferenceLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conference_location',
		'app.conference',
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
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.check_in',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.lodging_facility',
		'app.rate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConferenceLocation = ClassRegistry::init('ConferenceLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConferenceLocation);

		parent::tearDown();
	}

}
