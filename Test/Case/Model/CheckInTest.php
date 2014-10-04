<?php
App::uses('CheckIn', 'Model');

/**
 * CheckIn Test Case
 *
 */
class CheckInTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.check_in',
		'app.attendee',
		'app.conference',
		'app.locality',
		'app.campus',
		'app.user',
		'app.status',
		'app.lodging',
		'app.cancel',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.payment',
		'app.attendees_finance',
		'app.finance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CheckIn = ClassRegistry::init('CheckIn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CheckIn);

		parent::tearDown();
	}

}
