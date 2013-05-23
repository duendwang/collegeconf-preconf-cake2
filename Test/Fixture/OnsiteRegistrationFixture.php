<?php
/**
 * OnsiteRegistrationFixture
 *
 */
class OnsiteRegistrationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'registration' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'cashier' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'hospitality' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'badge' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'need_cashier' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'need_hospitality' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'need_badge' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'need_old' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'old_first' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'old_last' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'old_locality_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'conference_attendee' => array('column' => array('conference_id', 'attendee_id'), 'unique' => 1),
			'onsiteregistration_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'onsiteregistration_fk_2' => array('column' => 'attendee_id', 'unique' => 0),
			'onsiteregistration_fk_3' => array('column' => 'old_locality_id', 'unique' => 0)
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
			'conference_id' => 1,
			'attendee_id' => 1,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 1
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'attendee_id' => 2,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 2
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'attendee_id' => 3,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 3
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'attendee_id' => 4,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 4
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'attendee_id' => 5,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 5
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'attendee_id' => 6,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 6
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'attendee_id' => 7,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 7
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'attendee_id' => 8,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 8
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'attendee_id' => 9,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 9
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'attendee_id' => 10,
			'registration' => 1368770440,
			'cashier' => 1368770440,
			'hospitality' => 1368770440,
			'badge' => 1368770440,
			'need_cashier' => 1,
			'need_hospitality' => 1,
			'need_badge' => 1,
			'need_old' => 1,
			'old_first' => 'Lorem ipsum dolor sit amet',
			'old_last' => 'Lorem ipsum dolor sit amet',
			'old_locality_id' => 10
		),
	);

}
