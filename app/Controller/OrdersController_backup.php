<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {
	public $uses = array('Order', 'Item');

	/**
	 * buy a item, visitor should provide their basic info.
	 */
	public function buy($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Order->create();
			$this->request->data['Order']['item_id'] = $id;
			list($usec, $sec) = explode(" ", microtime());
    		$timestamp = $sec.substr($usec,2);
			$this->request->data['Order']['order_number'] = $timestamp;
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('购买成功，我们的工作人员会马上和您联系。'));
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('订单生成失败，是不是哪个数据填错了。'));
				$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
				$this->request->data = $this->Item->find('first', $options);
				$this->set('item', $this->request->data);
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
			$this->set('item', $this->request->data);
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
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order was not chekced'));
		$this->redirect(array('action' => 'index'));
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
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Order was not unchekced'));
		$this->redirect(array('action' => 'index'));
	}

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

