<?php
/**
 * ConferenceDeadlineExceptionFixture
 *
 */
class ConferenceDeadlineExceptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'conference_deadline_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'time' => array('type' => 'time', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'conferencedeadlineexception_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'conferencedeadlineexception_fk_2' => array('column' => 'conference_deadline_id', 'unique' => 0)
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
			'conference_deadline_id' => 1,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'conference_deadline_id' => 2,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'conference_deadline_id' => 3,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'conference_deadline_id' => 4,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'conference_deadline_id' => 5,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'conference_deadline_id' => 6,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'conference_deadline_id' => 7,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'conference_deadline_id' => 8,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'conference_deadline_id' => 9,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'conference_deadline_id' => 10,
			'date' => '2013-05-16',
			'time' => '23:00:37'
		),
	);

}
