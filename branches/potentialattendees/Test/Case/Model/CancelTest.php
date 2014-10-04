<?php
App::uses('Cancel', 'Model');

/**
 * Cancel Test Case
 *
 */
class CancelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cancel',
		'app.attendee',
		'app.conference',
		'app.locality',
		'app.campus',
		'app.user',
		'app.status',
		'app.lodging',
		'app.check_in',
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
		$this->Cancel = ClassRegistry::init('Cancel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cancel);

		parent::tearDown();
	}

}
