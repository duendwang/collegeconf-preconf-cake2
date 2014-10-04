<?php
App::uses('Locality', 'Model');

/**
 * Locality Test Case
 *
 */
class LocalityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.locality',
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
		'app.lrc'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Locality = ClassRegistry::init('Locality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locality);

		parent::tearDown();
	}

}
