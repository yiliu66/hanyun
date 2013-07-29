<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $page_title; ?></title>

<?php if (Configure::read('debug') == 0) { ?>
<meta http-equiv="Refresh" content="<?php echo $pause; ?>;url=<?php echo $url; ?>"/>
<?php } ?>
<style><!--
P { text-align:center; font:bold 1.1em sans-serif }
A { color:#444; text-decoration:none }
A:HOVER { text-decoration: underline; color:#44E }
--></style>
</head>
<body>
<body>
<p><a href="<?php echo $url; ?>"><?php echo $message; ?></a></p>
<?php
	$content = '订单信息如下：
	'.'订单编号：'.$order['Order']['order_number'].'
	'.'客户姓名：'.$order['Order']['user_name'].'
	'.'公司名称：'.$order['Order']['user_company'].'
	'.'邮箱地址：'.$order['Order']['user_email'].'
	'.'联络电话：'.$order['Order']['user_tel'].'
	'.'QQ号码：'.$order['Order']['user_qq'].'
	'.'订单备注：'.$order['Order']['remark'].'
	'.'产品类型：'.$order['Order']['item_name'].'
	'.'CPU：'.$order['Order']['processer_name'].'
	'.'内存：'.$order['Order']['mem_name'].'
	'.'硬盘：'.$order['Order']['disk_name'].'
	'.'订单生成时间：'.$order['Order']['created'].'
	'.'订单价格：'.$order['Order']['price'].'
	';
	App::uses('CakeEmail', 'Network/Email');
    $email = new CakeEmail('smtp');
    $email->from(array('admin@yun365.com' => '汉云科技'));
    // $email->to('769730340@qq.com');
    $email->to('wzkf@han-yun.net');
    $email->subject('新的订单提醒');
    $email->send($content);
?>
</body>
</html>