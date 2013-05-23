<?php
/**
 * CancelFixture
 *
 */
class CancelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'reason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'replaced' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'If replaced, name of replacing attendee', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'creator_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of user that created this record'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of last user to modify this record'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Timestamp of last modification'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cancel_fk_1' => array('column' => 'attendee_id', 'unique' => 0),
			'cancel_fk_2' => array('column' => 'conference_id', 'unique' => 0),
			'cancel_fk_3' => array('column' => 'creator_id', 'unique' => 0),
			'cancel_fk_4' => array('column' => 'modifier_id', 'unique' => 0)
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
			'attendee_id' => 1,
			'conference_id' => 1,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 1,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 1,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 2,
			'attendee_id' => 2,
			'conference_id' => 2,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 2,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 2,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 3,
			'attendee_id' => 3,
			'conference_id' => 3,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 3,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 3,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 4,
			'attendee_id' => 4,
			'conference_id' => 4,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 4,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 4,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 5,
			'attendee_id' => 5,
			'conference_id' => 5,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 5,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 5,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 6,
			'attendee_id' => 6,
			'conference_id' => 6,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 6,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 6,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 7,
			'attendee_id' => 7,
			'conference_id' => 7,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 7,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 7,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 8,
			'attendee_id' => 8,
			'conference_id' => 8,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 8,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 8,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 9,
			'attendee_id' => 9,
			'conference_id' => 9,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 9,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 9,
			'modified' => '2013-05-16 23:00:36'
		),
		array(
			'id' => 10,
			'attendee_id' => 10,
			'conference_id' => 10,
			'reason' => 'Lorem ipsum dolor sit amet',
			'replaced' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 10,
			'created' => '2013-05-16 23:00:36',
			'modifier_id' => 10,
			'modified' => '2013-05-16 23:00:36'
		),
	);

}
