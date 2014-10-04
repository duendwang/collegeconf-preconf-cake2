<?php
App::uses('RegistrationTeam', 'Model');

/**
 * RegistrationTeam Test Case
 *
 */
class RegistrationTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration_team',
		'app.registration_team_assignment',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistrationTeam = ClassRegistry::init('RegistrationTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistrationTeam);

		parent::tearDown();
	}

}
