<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 */
class Order extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'minlength' => array(
                'rule'    => array('minLength', 2),
                'message' => '姓名至少两个字符长度'
            )
		),
		'user_company' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '请输入公司名称'
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'user_email' => array(
			'notEmpty' => array('rule' => 'notEmpty', 'message' => 'email地址不能为空'),
			'valid' => array('rule' => 'email', 'message' => '请输入正确的email地址')			
			)
		,
		'user_tel' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '请输入电话或手机号码',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'phone' => array(
		        'rule' => array('custom', '/(^(?<national>\+?(?:86)?)(?<separator>\s?-?)(?<phone>(?<vender>(13|15|18)[0-9])(?<area>\d{4})(?<id>\d{4}))$)|(\d{3}-\d{8}|(\d{4}-\d{7})|(^\([0]\d{2}|\d{4}\))(\d{6,7}$))/i'),
		        'message' => '电话或手机号码有误，区号用“-”隔开'
		    )
		),
		'user_qq' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '请输入QQ号码',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'qq' => array(
				'rule' => array('custom', '/[0-9]{5,12}$/i'),  
	         	'message' => '请输入正确的QQ号码'
		    )
		)
	);
}
