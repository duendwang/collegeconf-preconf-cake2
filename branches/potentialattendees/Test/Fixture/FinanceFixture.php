<?php
/**
 * FinanceFixture
 *
 */
class FinanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'receive_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'locality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'finance_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'count' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
		'rate' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2'),
		'charge' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2'),
		'payment' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '6,2'),
		'balance' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '6,2'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'creator_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of user that created this record'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => 'ID of last user to modify this entry'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Timestamp of last modification'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'finance_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'finance_fk_2' => array('column' => 'locality_id', 'unique' => 0),
			'finance_fk_3' => array('column' => 'finance_type_id', 'unique' => 0),
			'finance_fk_4' => array('column' => 'creator_id', 'unique' => 0),
			'finance_fk_5' => array('column' => 'modifier_id', 'unique' => 0)
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
			'receive_date' => '2013-05-16',
			'locality_id' => 1,
			'finance_type_id' => 1,
			'count' => 1,
			'rate' => 1,
			'charge' => 1,
			'payment' => 1,
			'balance' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 1,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 1,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'receive_date' => '2013-05-16',
			'locality_id' => 2,
			'finance_type_id' => 2,
			'count' => 2,
			'rate' => 2,
			'charge' => 2,
			'payment' => 2,
			'balance' => 2,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 2,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 2,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'receive_date' => '2013-05-16',
			'locality_id' => 3,
			'finance_type_id' => 3,
			'count' => 3,
			'rate' => 3,
			'charge' => 3,
			'payment' => 3,
			'balance' => 3,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 3,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 3,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'receive_date' => '2013-05-16',
			'locality_id' => 4,
			'finance_type_id' => 4,
			'count' => 4,
			'rate' => 4,
			'charge' => 4,
			'payment' => 4,
			'balance' => 4,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 4,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 4,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'receive_date' => '2013-05-16',
			'locality_id' => 5,
			'finance_type_id' => 5,
			'count' => 5,
			'rate' => 5,
			'charge' => 5,
			'payment' => 5,
			'balance' => 5,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 5,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 5,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'receive_date' => '2013-05-16',
			'locality_id' => 6,
			'finance_type_id' => 6,
			'count' => 6,
			'rate' => 6,
			'charge' => 6,
			'payment' => 6,
			'balance' => 6,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 6,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 6,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'receive_date' => '2013-05-16',
			'locality_id' => 7,
			'finance_type_id' => 7,
			'count' => 7,
			'rate' => 7,
			'charge' => 7,
			'payment' => 7,
			'balance' => 7,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 7,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 7,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'receive_date' => '2013-05-16',
			'locality_id' => 8,
			'finance_type_id' => 8,
			'count' => 8,
			'rate' => 8,
			'charge' => 8,
			'payment' => 8,
			'balance' => 8,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 8,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 8,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'receive_date' => '2013-05-16',
			'locality_id' => 9,
			'finance_type_id' => 9,
			'count' => 9,
			'rate' => 9,
			'charge' => 9,
			'payment' => 9,
			'balance' => 9,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 9,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 9,
			'modified' => '2013-05-16 23:00:39'
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'receive_date' => '2013-05-16',
			'locality_id' => 10,
			'finance_type_id' => 10,
			'count' => 10,
			'rate' => 10,
			'charge' => 10,
			'payment' => 10,
			'balance' => 10,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creator_id' => 10,
			'created' => '2013-05-16 23:00:39',
			'modifier_id' => 10,
			'modified' => '2013-05-16 23:00:39'
		),
	);

}
