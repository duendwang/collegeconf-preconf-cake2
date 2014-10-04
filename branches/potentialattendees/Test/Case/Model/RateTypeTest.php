<?php
App::uses('RateType', 'Model');

/**
 * RateType Test Case
 *
 */
class RateTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rate_type',
		'app.rate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RateType = ClassRegistry::init('RateType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RateType);

		parent::tearDown();
	}

}
