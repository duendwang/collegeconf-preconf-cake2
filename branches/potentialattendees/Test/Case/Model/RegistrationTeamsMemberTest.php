<?php
App::uses('RegistrationTeamAssignment', 'Model');

/**
 * RegistrationTeamAssignment Test Case
 *
 */
class RegistrationTeamAssignmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration_team_assignment',
		'app.user',
		'app.registration_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistrationTeamAssignment = ClassRegistry::init('RegistrationTeamAssignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistrationTeamAssignment);

		parent::tearDown();
	}

}
