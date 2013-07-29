<?php
App::uses('AppController', 'Controller');
/**
 * ItemsDisks Controller
 *
 * @property ItemsDisk $ItemsDisk
 */
class ItemsDisksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsDisk->recursive = 0;
		$this->set('itemsDisks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsDisk->exists($id)) {
			throw new NotFoundException(__('Invalid items disk'));
		}
		$options = array('conditions' => array('ItemsDisk.' . $this->ItemsDisk->primaryKey => $id));
		$this->set('itemsDisk', $this->ItemsDisk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsDisk->create();
			if ($this->ItemsDisk->save($this->request->data)) {
				$this->Session->setFlash(__('The items disk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items disk could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsDisk->Item->find('list');
		$disks = $this->ItemsDisk->Disk->find('list');
		$this->set(compact('items', 'disks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsDisk->exists($id)) {
			throw new NotFoundException(__('Invalid items disk'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsDisk->save($this->request->data)) {
				$this->Session->setFlash(__('The items disk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items disk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsDisk.' . $this->ItemsDisk->primaryKey => $id));
			$this->request->data = $this->ItemsDisk->find('first', $options);
		}
		$items = $this->ItemsDisk->Item->find('list');
		$disks = $this->ItemsDisk->Disk->find('list');
		$this->set(compact('items', 'disks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemsDisk->id = $id;
		if (!$this->ItemsDisk->exists()) {
			throw new NotFoundException(__('Invalid items disk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsDisk->delete()) {
			$this->Session->setFlash(__('Items disk deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items disk was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
