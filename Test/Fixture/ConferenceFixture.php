<?php
/**
 * ConferenceFixture
 *
 */
class ConferenceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'term' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'part' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conference_location_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'First day of the conference'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'code' => array('column' => 'code', 'unique' => 1),
			'name' => array('column' => array('term', 'year', 'part'), 'unique' => 1),
			'conference_fk_1' => array('column' => 'conference_location_id', 'unique' => 0)
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
			'term' => 'Lore',
			'year' => 1,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 1,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 2,
			'term' => 'Lore',
			'year' => 2,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 2,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 3,
			'term' => 'Lore',
			'year' => 3,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 3,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 4,
			'term' => 'Lore',
			'year' => 4,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 4,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 5,
			'term' => 'Lore',
			'year' => 5,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 5,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 6,
			'term' => 'Lore',
			'year' => 6,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 6,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 7,
			'term' => 'Lore',
			'year' => 7,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 7,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 8,
			'term' => 'Lore',
			'year' => 8,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 8,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 9,
			'term' => 'Lore',
			'year' => 9,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 9,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
		array(
			'id' => 10,
			'term' => 'Lore',
			'year' => 10,
			'part' => 'Lorem ipsum dolor sit ame',
			'conference_location_id' => 10,
			'start_date' => '2013-05-16',
			'code' => 'L'
		),
	);

}
