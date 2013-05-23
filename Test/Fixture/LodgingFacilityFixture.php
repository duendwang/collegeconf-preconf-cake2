<?php
/**
 * LodgingFacilityFixture
 *
 */
class LodgingFacilityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'room' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'accomodations' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'capacity' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zip' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comments' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'lodgingfacility_fk_1' => array('column' => 'conference_location_id', 'unique' => 0)
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
			'conference_location_id' => 1,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 1,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'conference_location_id' => 2,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 2,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 2,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'conference_location_id' => 3,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 3,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 3,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'conference_location_id' => 4,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 4,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 4,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'conference_location_id' => 5,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 5,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 5,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'conference_location_id' => 6,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 6,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 6,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'conference_location_id' => 7,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 7,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 7,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'conference_location_id' => 8,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 8,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 8,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'conference_location_id' => 9,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 9,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 9,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'conference_location_id' => 10,
			'code' => 'Lorem ip',
			'location' => 'Lorem ipsum dolor sit amet',
			'room' => 'Lorem ipsum dolor sit amet',
			'accomodations' => 'Lorem ipsum dolor sit amet',
			'capacity' => 10,
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 10,
			'phone' => 'Lorem ip',
			'comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
