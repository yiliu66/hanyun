<?php
App::uses('AppController', 'Controller');
/**
 * ItemsMems Controller
 *
 * @property ItemsMem $ItemsMem
 */
class ItemsMemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsMem->recursive = 0;
		$this->set('itemsMems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsMem->exists($id)) {
			throw new NotFoundException(__('Invalid items mem'));
		}
		$options = array('conditions' => array('ItemsMem.' . $this->ItemsMem->primaryKey => $id));
		$this->set('itemsMem', $this->ItemsMem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsMem->create();
			if ($this->ItemsMem->save($this->request->data)) {
				$this->Session->setFlash(__('The items mem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items mem could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsMem->Item->find('list');
		$mems = $this->ItemsMem->Mem->find('list');
		$this->set(compact('items', 'mems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsMem->exists($id)) {
			throw new NotFoundException(__('Invalid items mem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsMem->save($this->request->data)) {
				$this->Session->setFlash(__('The items mem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items mem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsMem.' . $this->ItemsMem->primaryKey => $id));
			$this->request->data = $this->ItemsMem->find('first', $options);
		}
		$items = $this->ItemsMem->Item->find('list');
		$mems = $this->ItemsMem->Mem->find('list');
		$this->set(compact('items', 'mems'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemsMem->id = $id;
		if (!$this->ItemsMem->exists()) {
			throw new NotFoundException(__('Invalid items mem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsMem->delete()) {
			$this->Session->setFlash(__('Items mem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items mem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
