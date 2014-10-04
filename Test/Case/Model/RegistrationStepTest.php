<?php
App::uses('RegistrationStep', 'Model');

/**
 * RegistrationStep Test Case
 *
 */
class RegistrationStepTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration_step',
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.attendee',
		'app.locality',
		'app.finance',
		'app.finance_type',
		'app.user',
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.payment',
		'app.campus',
		'app.status',
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
		$this->RegistrationStep = ClassRegistry::init('RegistrationStep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistrationStep);

		parent::tearDown();
	}

}
