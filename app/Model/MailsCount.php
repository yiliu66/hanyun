<?php
App::uses('AppModel', 'Model');
/**
 * MailsCount Model
 *
 * @property Mail $Mail
 * @property Count $Count
 */
class MailsCount extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mail_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'count_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Mail' => array(
			'className' => 'Mail',
			'foreignKey' => 'mail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Count' => array(
			'className' => 'Count',
			'foreignKey' => 'count_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
