<?php
/**
 * RateFixture
 *
 */
class RateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'conference_location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rate_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cost' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '5,2'),
		'latefee_applies' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'If late fee applies after second registration deadline'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'If this category will be available for the current conference'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'rate_fk_1' => array('column' => 'conference_location_id', 'unique' => 0),
			'rate_fk_2' => array('column' => 'rate_type_id', 'unique' => 0)
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
			'rate_type_id' => 1,
			'cost' => 1,
			'latefee_applies' => 1,
			'active' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
