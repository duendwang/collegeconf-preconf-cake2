<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'B/S/C', 'charset' => 'latin1'),
		'cell_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city_state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'City, state of residence', 'charset' => 'latin1'),
		'locality_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'status_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'Current status'),
		'campus_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'Campus (if serving)'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'last_login' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'username_UNIQUE' => array('column' => 'username', 'unique' => 1),
			'name' => array('column' => array('last_name', 'first_name'), 'unique' => 0),
			'user_fk_1' => array('column' => 'locality_id', 'unique' => 0),
			'user_fk_2' => array('column' => 'status_id', 'unique' => 0),
			'user_fk_3' => array('column' => 'campus_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 1,
			'status_id' => 1,
			'campus_id' => 1,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 2,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 2,
			'status_id' => 2,
			'campus_id' => 2,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 3,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 3,
			'status_id' => 3,
			'campus_id' => 3,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 4,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 4,
			'status_id' => 4,
			'campus_id' => 4,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 5,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 5,
			'status_id' => 5,
			'campus_id' => 5,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 6,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 6,
			'status_id' => 6,
			'campus_id' => 6,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 7,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 7,
			'status_id' => 7,
			'campus_id' => 7,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 8,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 8,
			'status_id' => 8,
			'campus_id' => 8,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 9,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 9,
			'status_id' => 9,
			'campus_id' => 9,
			'active' => 1,
			'last_login' => 1368770442
		),
		array(
			'id' => 10,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'cell_phone' => 'Lorem ipsum ',
			'email' => 'Lorem ipsum dolor sit amet',
			'city_state' => 'Lorem ipsum dolor sit amet',
			'locality_id' => 10,
			'status_id' => 10,
			'campus_id' => 10,
			'active' => 1,
			'last_login' => 1368770442
		),
	);

}
