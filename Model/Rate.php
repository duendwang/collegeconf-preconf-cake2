<?php
App::uses('AppModel', 'Model');
/**
 * Rate Model
 *
 * @property ConferenceLocation $ConferenceLocation
 * @property RateType $RateType
 */
class Rate extends AppModel {

//TODO need to set up displayfield and virtualfield to pull from other tables

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rate_type_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'conference_location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rate_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cost' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'latefee_applies' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ConferenceLocation' => array(
			'className' => 'ConferenceLocation',
			'foreignKey' => 'conference_location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RateType' => array(
			'className' => 'RateType',
			'foreignKey' => 'rate_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
