<?php
/**
 * PartTimeRegistrationFixture
 *
 */
class PartTimeRegistrationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'fri_din' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'fri_mtg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'fri_hosp' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_bkfst' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_mtg1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_lun' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_mtg2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_din' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_mtg3' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sat_hosp' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ld_bkfst' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ld_mtg' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ld_lun' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'conference_attendee' => array('column' => array('conference_id', 'attendee_id'), 'unique' => 1),
			'parttimeregistration_fk_1' => array('column' => 'conference_id', 'unique' => 0),
			'parttimeregistration_fk_2' => array('column' => 'attendee_id', 'unique' => 0)
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
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 2,
			'conference_id' => 2,
			'attendee_id' => 2,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 3,
			'conference_id' => 3,
			'attendee_id' => 3,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 4,
			'conference_id' => 4,
			'attendee_id' => 4,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 5,
			'conference_id' => 5,
			'attendee_id' => 5,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 6,
			'conference_id' => 6,
			'attendee_id' => 6,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 7,
			'conference_id' => 7,
			'attendee_id' => 7,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 8,
			'conference_id' => 8,
			'attendee_id' => 8,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 9,
			'conference_id' => 9,
			'attendee_id' => 9,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
		array(
			'id' => 10,
			'conference_id' => 10,
			'attendee_id' => 10,
			'fri_din' => 1,
			'fri_mtg' => 1,
			'fri_hosp' => 1,
			'sat_bkfst' => 1,
			'sat_mtg1' => 1,
			'sat_lun' => 1,
			'sat_mtg2' => 1,
			'sat_din' => 1,
			'sat_mtg3' => 1,
			'sat_hosp' => 1,
			'ld_bkfst' => 1,
			'ld_mtg' => 1,
			'ld_lun' => 1
		),
	);

}
