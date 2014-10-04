<?php
App::uses('Conference', 'Model');

/**
 * Conference Test Case
 *
 */
class ConferenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conference',
		'app.conference_location',
		'app.lodging_facility',
		'app.attendee',
		'app.locality',
		'app.campus',
		'app.user',
		'app.status',
		'app.lodging',
		'app.cancel',
		'app.check_in',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.payment',
		'app.attendees_finance',
		'app.finance',
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.registration_step'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Conference = ClassRegistry::init('Conference');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conference);

		parent::tearDown();
	}

}
