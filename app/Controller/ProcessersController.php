<?php
App::uses('AppController', 'Controller');
/**
 * Processers Controller
 *
 * @property Processer $Processer
 */
class ProcessersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Processer->recursive = 0;
		$this->set('processers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Processer->exists($id)) {
			throw new NotFoundException(__('Invalid processer'));
		}
		$options = array('conditions' => array('Processer.' . $this->Processer->primaryKey => $id));
		$this->set('processer', $this->Processer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Processer->create();
			if ($this->Processer->save($this->request->data)) {
				$this->Session->setFlash(__('The processer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processer could not be saved. Please, try again.'));
			}
		}
		$items = $this->Processer->Item->find('list');
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
		if (!$this->Processer->exists($id)) {
			throw new NotFoundException(__('Invalid processer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Processer->save($this->request->data)) {
				$this->Session->setFlash(__('The processer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Processer.' . $this->Processer->primaryKey => $id));
			$this->request->data = $this->Processer->find('first', $options);
		}
		$items = $this->Processer->Item->find('list');
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
		$this->Processer->id = $id;
		if (!$this->Processer->exists()) {
			throw new NotFoundException(__('Invalid processer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Processer->delete()) {
			$this->Session->setFlash(__('Processer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Processer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
