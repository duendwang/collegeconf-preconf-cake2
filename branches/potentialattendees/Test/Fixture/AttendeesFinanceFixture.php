<?php
/**
 * AttendeesFinanceFixture
 *
 */
class AttendeesFinanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'finance_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'ID of finance record'),
		'add_attendee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of attendee registered if any'),
		'cancel_attendee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of attendee canceled if any'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'attendeefinance_fk_1' => array('column' => 'finance_id', 'unique' => 0),
			'attendeefinance_fk_2' => array('column' => 'add_attendee_id', 'unique' => 0),
			'attendeefinance_fk_3' => array('column' => 'cancel_attendee_id', 'unique' => 0)
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
			'finance_id' => 1,
			'add_attendee_id' => 1,
			'cancel_attendee_id' => 1
		),
		array(
			'id' => 2,
			'finance_id' => 2,
			'add_attendee_id' => 2,
			'cancel_attendee_id' => 2
		),
		array(
			'id' => 3,
			'finance_id' => 3,
			'add_attendee_id' => 3,
			'cancel_attendee_id' => 3
		),
		array(
			'id' => 4,
			'finance_id' => 4,
			'add_attendee_id' => 4,
			'cancel_attendee_id' => 4
		),
		array(
			'id' => 5,
			'finance_id' => 5,
			'add_attendee_id' => 5,
			'cancel_attendee_id' => 5
		),
		array(
			'id' => 6,
			'finance_id' => 6,
			'add_attendee_id' => 6,
			'cancel_attendee_id' => 6
		),
		array(
			'id' => 7,
			'finance_id' => 7,
			'add_attendee_id' => 7,
			'cancel_attendee_id' => 7
		),
		array(
			'id' => 8,
			'finance_id' => 8,
			'add_attendee_id' => 8,
			'cancel_attendee_id' => 8
		),
		array(
			'id' => 9,
			'finance_id' => 9,
			'add_attendee_id' => 9,
			'cancel_attendee_id' => 9
		),
		array(
			'id' => 10,
			'finance_id' => 10,
			'add_attendee_id' => 10,
			'cancel_attendee_id' => 10
		),
	);

}
