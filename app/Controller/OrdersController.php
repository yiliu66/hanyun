<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($checked = 0) {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate('Order', array('Order.checked = ' => $checked)));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * buy method
 *
 * @return void
 */
	public function buy() {
		$this->layout = false;
		if ($this->request->is('post')) {
			$this->Order->create();
			list($usec, $sec) = explode(" ", microtime());
    		$timestamp = $sec.substr($usec,2);
			$this->request->data['Order']['order_number'] = $timestamp;
			if ($this->Order->save($this->request->data)) {
				$options = array('conditions' => array('Order.order_number' => $timestamp));
				$this->set('order', $this->Order->find('first', $options));
				$this->flash("订单生成成功，我们的工作人员会马上和您联系。<br>三秒后自动返回主页。如果没有自动跳转，请点击这里。", '/', 3);
			} else {
				$this->autoRender = false;
				$this->layout = 'ajax';
				$Order = $this->Order->validationErrors;
				$data = compact('Order');
	        	$this->set('errors', $data);
				$this->set('_serialize', array('errors'));
				$this->render('buy','ajax');//使用render将数据返回给视图

				// $this->Session->setFlash(__('订单生成失败，请重新购买。'));
			}
		}
	}


	/**
	 * check an order
	 */
	public function check($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->onlyAllow('post', 'check');
		$this->Order->set(array(
	    	'checked' => true,
	    	'checked_by' => $this->Auth->user('username')
		));

		if ($this->Order->save()) {
			$this->Session->setFlash(__('Order checked'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Order was not chekced'));
		$this->redirect($this->referer());
	}

	/**
	 * check an order
	 */
	public function uncheck($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->onlyAllow('post', 'uncheck');
		$this->Order->set(array('checked' => false));
		if ($this->Order->save()) {
			$this->Session->setFlash(__('Order unchecked'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Order was not unchekced'));
		$this->redirect($this->referer());
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('Order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
