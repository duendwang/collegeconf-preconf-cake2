<?php
/**
 * PotentialAttendeeFixture
 *
 */
class PotentialAttendeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'locality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'campus_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'allergies' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cell_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'potential_attendees_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'potential_attendees_fk_2' => array('column' => 'locality_id', 'unique' => 0),
			'potential_attendees_fk_3' => array('column' => 'campus_id', 'unique' => 0),
			'potential_attendees_fk_4' => array('column' => 'status_id', 'unique' => 0)
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
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'locality_id' => 1,
			'campus_id' => 1,
			'allergies' => 'L',
			'status_id' => 1,
			'cell_phone' => 'Lorem ipsum dolor sit a',
			'email' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-10-24 18:37:39'
		),
	);

}
