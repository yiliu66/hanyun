<?php
App::uses('AppController', 'Controller');
/**
 * Disks Controller
 *
 * @property Disk $Disk
 */
class DisksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Disk->recursive = 0;
		$this->set('disks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Disk->exists($id)) {
			throw new NotFoundException(__('Invalid disk'));
		}
		$options = array('conditions' => array('Disk.' . $this->Disk->primaryKey => $id));
		$this->set('disk', $this->Disk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disk->create();
			if ($this->Disk->save($this->request->data)) {
				$this->Session->setFlash(__('The disk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disk could not be saved. Please, try again.'));
			}
		}
		$items = $this->Disk->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Disk->exists($id)) {
			throw new NotFoundException(__('Invalid disk'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disk->save($this->request->data)) {
				$this->Session->setFlash(__('The disk has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disk.' . $this->Disk->primaryKey => $id));
			$this->request->data = $this->Disk->find('first', $options);
		}
		$items = $this->Disk->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Disk->id = $id;
		if (!$this->Disk->exists()) {
			throw new NotFoundException(__('Invalid disk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Disk->delete()) {
			$this->Session->setFlash(__('Disk deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disk was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
