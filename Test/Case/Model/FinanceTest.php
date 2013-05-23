<?php
App::uses('Finance', 'Model');

/**
 * Finance Test Case
 *
 */
class FinanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finance',
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
		'app.conference_deadline_exception',
		'app.conference_deadline',
		'app.weekday',
		'app.registration_step',
		'app.finance_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Finance = ClassRegistry::init('Finance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Finance);

		parent::tearDown();
	}

}
