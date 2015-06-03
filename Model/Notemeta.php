<?php
App::uses('AppModel', 'Model');
/**
 * Notemeta Model
 *
 * @property Note $Note
 */
class Notemeta extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'meta_key' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'meta_value' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
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
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'note_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
