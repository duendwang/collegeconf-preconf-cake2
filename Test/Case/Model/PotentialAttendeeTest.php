<?php
App::uses('PotentialAttendee', 'Model');

/**
 * PotentialAttendee Test Case
 *
 */
class PotentialAttendeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.potential_attendee',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.rate',
		'app.rate_type',
		'app.attendee',
		'app.locality',
		'app.finance',
		'app.finance_type',
		'app.user',
		'app.status',
		'app.campus',
		'app.registration_teams_member',
		'app.registration_team',
		'app.registration_teams_localities',
		'app.user_type',
		'app.account_type',
		'app.registration_step',
		'app.cancel',
		'app.email',
		'app.payment',
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.registration_teams_locality',
		'app.check_in',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PotentialAttendee = ClassRegistry::init('PotentialAttendee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PotentialAttendee);

		parent::tearDown();
	}

}
