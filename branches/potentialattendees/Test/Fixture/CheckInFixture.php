<?php
/**
 * CheckInFixture
 *
 */
class CheckInFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'checkin_fk_1' => array('column' => 'attendee_id', 'unique' => 0)
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
			'attendee_id' => 1,
			'timestamp' => 1368770436
		),
		array(
			'id' => 2,
			'attendee_id' => 2,
			'timestamp' => 1368770436
		),
		array(
			'id' => 3,
			'attendee_id' => 3,
			'timestamp' => 1368770436
		),
		array(
			'id' => 4,
			'attendee_id' => 4,
			'timestamp' => 1368770436
		),
		array(
			'id' => 5,
			'attendee_id' => 5,
			'timestamp' => 1368770436
		),
		array(
			'id' => 6,
			'attendee_id' => 6,
			'timestamp' => 1368770436
		),
		array(
			'id' => 7,
			'attendee_id' => 7,
			'timestamp' => 1368770436
		),
		array(
			'id' => 8,
			'attendee_id' => 8,
			'timestamp' => 1368770436
		),
		array(
			'id' => 9,
			'attendee_id' => 9,
			'timestamp' => 1368770436
		),
		array(
			'id' => 10,
			'attendee_id' => 10,
			'timestamp' => 1368770436
		),
	);

}
