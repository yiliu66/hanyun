<?php
App::uses('AppController', 'Controller');
/**
 * ItemsProcessers Controller
 *
 * @property ItemsProcesser $ItemsProcesser
 */
class ItemsProcessersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemsProcesser->recursive = 0;
		$this->set('itemsProcessers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemsProcesser->exists($id)) {
			throw new NotFoundException(__('Invalid items processer'));
		}
		$options = array('conditions' => array('ItemsProcesser.' . $this->ItemsProcesser->primaryKey => $id));
		$this->set('itemsProcesser', $this->ItemsProcesser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemsProcesser->create();
			if ($this->ItemsProcesser->save($this->request->data)) {
				$this->Session->setFlash(__('The items processer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items processer could not be saved. Please, try again.'));
			}
		}
		$items = $this->ItemsProcesser->Item->find('list');
		$processers = $this->ItemsProcesser->Processer->find('list');
		$this->set(compact('items', 'processers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemsProcesser->exists($id)) {
			throw new NotFoundException(__('Invalid items processer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemsProcesser->save($this->request->data)) {
				$this->Session->setFlash(__('The items processer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items processer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemsProcesser.' . $this->ItemsProcesser->primaryKey => $id));
			$this->request->data = $this->ItemsProcesser->find('first', $options);
		}
		$items = $this->ItemsProcesser->Item->find('list');
		$processers = $this->ItemsProcesser->Processer->find('list');
		$this->set(compact('items', 'processers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemsProcesser->id = $id;
		if (!$this->ItemsProcesser->exists()) {
			throw new NotFoundException(__('Invalid items processer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemsProcesser->delete()) {
			$this->Session->setFlash(__('Items processer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Items processer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
