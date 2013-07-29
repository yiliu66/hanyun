<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {

	public $paginate = array(
        'limit' => 4,
        'order' => array(
            'Article.created' => 'desc'
    	)
    );

	public function read() {
		$this->layout = false;
		$this->paginate = array(
			'Item' => array(
				'conditions' => array('Item.name LIKE' => '%服务器'),
		        'limit' => 4,
		        'order' => array(
		            'Item.price' => 'asc'
	        	)
		    )
    	);
    	$this->set('items', $this->paginate('Item'));
	}

	public function cloud() {
		$this->layout = false;
		$this->paginate = array(
			'Item' => array(
				'conditions' => array('Item.name LIKE' => '%云主机'),
		        'limit' => 5,
		        'order' => array(
		            'Item.price' => 'asc'
	        	)
		    )
    	);
    	$this->set('items', $this->paginate('Item'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			$this->request->data['Item']['created_by'] = $this->Auth->user('username');
			// $this->request->data['Item']['images']['name'] = md5($this->request->data['Item']['images']['name']);
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Item']['modified_by'] = $this->Auth->user('username');
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
		}
	}

	public function editImage($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Item']['id'] = $id;
			$this->request->data['Item']['modified_by'] = $this->Auth->user('username');
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The image has been saved'));
				$this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('Item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
