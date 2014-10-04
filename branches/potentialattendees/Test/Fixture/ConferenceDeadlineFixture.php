<?php
/**
 * ConferenceDeadlineFixture
 *
 */
class ConferenceDeadlineFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'weeks_before' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'weekday_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'time' => array('type' => 'time', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'conferencedeadline_fk_1' => array('column' => 'weekday_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 1,
			'weekday_id' => 1,
			'time' => '23:00:37'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 2,
			'weekday_id' => 2,
			'time' => '23:00:37'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 3,
			'weekday_id' => 3,
			'time' => '23:00:37'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 4,
			'weekday_id' => 4,
			'time' => '23:00:37'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 5,
			'weekday_id' => 5,
			'time' => '23:00:37'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 6,
			'weekday_id' => 6,
			'time' => '23:00:37'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 7,
			'weekday_id' => 7,
			'time' => '23:00:37'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 8,
			'weekday_id' => 8,
			'time' => '23:00:37'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 9,
			'weekday_id' => 9,
			'time' => '23:00:37'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'weeks_before' => 10,
			'weekday_id' => 10,
			'time' => '23:00:37'
		),
	);

}
