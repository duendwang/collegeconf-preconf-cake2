<?php
/**
 * PaymentFixture
 *
 */
class PaymentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'attendee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'key' => 'index'),
		'locality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cash' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2'),
		'check_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'check' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2'),
		'locality_paid' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2', 'comment' => 'How much locality paid on site'),
		'bill_locality' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2', 'comment' => 'How much to bill to locality'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'creator_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of user that created this record'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of user that last modified this record'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Timestamp of last modification'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'payment_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'payment_fk_2' => array('column' => 'attendee_id', 'unique' => 0),
			'payment_fk_3' => array('column' => 'locality_id', 'unique' => 0),
			'payment_fk_4' => array('column' => 'creator_id', 'unique' => 0),
			'payment_fk_5' => array('column' => 'modifier_id', 'unique' => 0)
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
			'locality_id' => 1,
			'cash' => 1,
			'check_number' => 1,
			'check' => 1,
			'locality_paid' => 1,
			'bill_locality' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 1,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 1,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'attendee_id' => 2,
			'locality_id' => 2,
			'cash' => 2,
			'check_number' => 2,
			'check' => 2,
			'locality_paid' => 2,
			'bill_locality' => 2,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 2,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 2,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'attendee_id' => 3,
			'locality_id' => 3,
			'cash' => 3,
			'check_number' => 3,
			'check' => 3,
			'locality_paid' => 3,
			'bill_locality' => 3,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 3,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 3,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'attendee_id' => 4,
			'locality_id' => 4,
			'cash' => 4,
			'check_number' => 4,
			'check' => 4,
			'locality_paid' => 4,
			'bill_locality' => 4,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 4,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 4,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'attendee_id' => 5,
			'locality_id' => 5,
			'cash' => 5,
			'check_number' => 5,
			'check' => 5,
			'locality_paid' => 5,
			'bill_locality' => 5,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 5,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 5,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'attendee_id' => 6,
			'locality_id' => 6,
			'cash' => 6,
			'check_number' => 6,
			'check' => 6,
			'locality_paid' => 6,
			'bill_locality' => 6,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 6,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 6,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'attendee_id' => 7,
			'locality_id' => 7,
			'cash' => 7,
			'check_number' => 7,
			'check' => 7,
			'locality_paid' => 7,
			'bill_locality' => 7,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 7,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 7,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'attendee_id' => 8,
			'locality_id' => 8,
			'cash' => 8,
			'check_number' => 8,
			'check' => 8,
			'locality_paid' => 8,
			'bill_locality' => 8,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 8,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 8,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'attendee_id' => 9,
			'locality_id' => 9,
			'cash' => 9,
			'check_number' => 9,
			'check' => 9,
			'locality_paid' => 9,
			'bill_locality' => 9,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 9,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 9,
			'modified' => '2013-05-16 23:00:40'
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'attendee_id' => 10,
			'locality_id' => 10,
			'cash' => 10,
			'check_number' => 10,
			'check' => 10,
			'locality_paid' => 10,
			'bill_locality' => 10,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 10,
			'created' => '2013-05-16 23:00:40',
			'modifier_id' => 10,
			'modified' => '2013-05-16 23:00:40'
		),
	);

}
