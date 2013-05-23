<?php
App::uses('Campus', 'Model');

/**
 * Campus Test Case
 *
 */
class CampusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.campus',
		'app.attendee',
		'app.conference',
		'app.locality',
		'app.status',
		'app.lodging',
		'app.user',
		'app.cancel',
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
		$this->Campus = ClassRegistry::init('Campus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Campus);

		parent::tearDown();
	}

}
