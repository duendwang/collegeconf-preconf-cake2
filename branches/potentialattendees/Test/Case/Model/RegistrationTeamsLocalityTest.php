<?php
App::uses('RegistrationTeamsLocality', 'Model');

/**
 * RegistrationTeamsLocality Test Case
 *
 */
class RegistrationTeamsLocalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration_teams_locality',
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
		'app.registration_team_member',
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
		'app.weekday'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistrationTeamsLocality = ClassRegistry::init('RegistrationTeamsLocality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistrationTeamsLocality);

		parent::tearDown();
	}

}
