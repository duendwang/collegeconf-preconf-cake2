<?php
App::uses('AttendeesFinance', 'Model');

/**
 * AttendeesFinance Test Case
 *
 */
class AttendeesFinanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendees_finance',
		'app.finance',
		'app.attendee',
		'app.conference',
		'app.locality',
		'app.campus',
		'app.status',
		'app.lodging',
		'app.user',
		'app.cancel',
		'app.check_in',
		'app.onsite_registration',
		'app.part_time_registration',
		'app.payment',
		'app.attendee_finance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttendeesFinance = ClassRegistry::init('AttendeesFinance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendeesFinance);

		parent::tearDown();
	}

}
