<?php
App::uses('AppController', 'Controller');
/**
 * Mems Controller
 *
 * @property Mem $Mem
 */
class MemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mem->recursive = 0;
		$this->set('mems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mem->exists($id)) {
			throw new NotFoundException(__('Invalid mem'));
		}
		$options = array('conditions' => array('Mem.' . $this->Mem->primaryKey => $id));
		$this->set('mem', $this->Mem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mem->create();
			if ($this->Mem->save($this->request->data)) {
				$this->Session->setFlash(__('The mem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mem could not be saved. Please, try again.'));
			}
		}
		$items = $this->Mem->Item->find('list');
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
		if (!$this->Mem->exists($id)) {
			throw new NotFoundException(__('Invalid mem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mem->save($this->request->data)) {
				$this->Session->setFlash(__('The mem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mem.' . $this->Mem->primaryKey => $id));
			$this->request->data = $this->Mem->find('first', $options);
		}
		$items = $this->Mem->Item->find('list');
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
		$this->Mem->id = $id;
		if (!$this->Mem->exists()) {
			throw new NotFoundException(__('Invalid mem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mem->delete()) {
			$this->Session->setFlash(__('Mem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
