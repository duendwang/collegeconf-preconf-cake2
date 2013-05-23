<?php
App::uses('LodgingFacility', 'Model');

/**
 * LodgingFacility Test Case
 *
 */
class LodgingFacilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lodging_facility',
		'app.conference_location',
		'app.conference',
		'app.attendee',
		'app.locality',
		'app.finance',
		'app.finance_type',
		'app.user',
		'app.attendees_finance',
		'app.lodging',
		'app.lrc',
		'app.payment',
		'app.registration_step',
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
		$this->LodgingFacility = ClassRegistry::init('LodgingFacility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LodgingFacility);

		parent::tearDown();
	}

}
