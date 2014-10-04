<?php
/**
 * RegistrationTeamsLocalityFixture
 *
 */
class RegistrationTeamsLocalityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'locality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'registration_team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'registration_team_localities_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'registration_team_localities_fk_2' => array('column' => 'locality_id', 'unique' => 0),
			'registration_team_localities_fk_3' => array('column' => 'registration_team_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'conference_id' => 1,
			'locality_id' => 1,
			'registration_team_id' => 1
		),
	);

}
