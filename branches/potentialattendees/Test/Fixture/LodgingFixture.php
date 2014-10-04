<?php
/**
 * LodgingFixture
 *
 */
class LodgingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'locality_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zip' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'home_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cell_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pet' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'capacity' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
		'room' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'lodging_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'lodging_fk_2' => array('column' => 'locality_id', 'unique' => 0)
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
			'locality_id' => 1,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 1,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 1,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'locality_id' => 2,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 2,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 2,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'locality_id' => 3,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 3,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 3,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'locality_id' => 4,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 4,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 4,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'locality_id' => 5,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 5,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 5,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'locality_id' => 6,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 6,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 6,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'locality_id' => 7,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 7,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 7,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'locality_id' => 8,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 8,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 8,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'locality_id' => 9,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 9,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 9,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'locality_id' => 10,
			'code' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 10,
			'home_phone' => 'Lorem ipsum dolor ',
			'cell_phone' => 'Lorem ipsum dolor ',
			'pet' => 'Lorem ipsum dolor ',
			'gender' => 'Lorem ipsum dolor sit amet',
			'capacity' => 10,
			'room' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
