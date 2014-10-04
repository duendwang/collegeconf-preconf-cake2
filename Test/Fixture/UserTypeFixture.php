<?php
/**
 * UserTypeFixture
 *
 */
class UserTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'account_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'usertype_fk_1' => array('column' => 'user_id', 'unique' => 1),
			'usertype_fk_2' => array('column' => 'account_type_id', 'unique' => 0)
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
			'user_id' => 1,
			'account_type_id' => 1
		),
		array(
			'id' => 2,
			'user_id' => 2,
			'account_type_id' => 2
		),
		array(
			'id' => 3,
			'user_id' => 3,
			'account_type_id' => 3
		),
		array(
			'id' => 4,
			'user_id' => 4,
			'account_type_id' => 4
		),
		array(
			'id' => 5,
			'user_id' => 5,
			'account_type_id' => 5
		),
		array(
			'id' => 6,
			'user_id' => 6,
			'account_type_id' => 6
		),
		array(
			'id' => 7,
			'user_id' => 7,
			'account_type_id' => 7
		),
		array(
			'id' => 8,
			'user_id' => 8,
			'account_type_id' => 8
		),
		array(
			'id' => 9,
			'user_id' => 9,
			'account_type_id' => 9
		),
		array(
			'id' => 10,
			'user_id' => 10,
			'account_type_id' => 10
		),
	);

}
