<?php
App::uses('FinanceType', 'Model');

/**
 * FinanceType Test Case
 *
 */
class FinanceTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finance_type',
		'app.finance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceType = ClassRegistry::init('FinanceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceType);

		parent::tearDown();
	}

}
