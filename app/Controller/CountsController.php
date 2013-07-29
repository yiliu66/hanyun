<?php
App::uses('AppController', 'Controller');
/**
 * Counts Controller
 *
 * @property Count $Count
 */
class CountsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Count->recursive = 0;
		$this->set('counts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Count->exists($id)) {
			throw new NotFoundException(__('Invalid count'));
		}
		$options = array('conditions' => array('Count.' . $this->Count->primaryKey => $id));
		$this->set('count', $this->Count->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Count->create();
			if ($this->Count->save($this->request->data)) {
				$this->Session->setFlash(__('The count has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.'));
			}
		}
		$mails = $this->Count->Mail->find('list');
		$this->set(compact('mails'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Count->exists($id)) {
			throw new NotFoundException(__('Invalid count'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Count->save($this->request->data)) {
				$this->Session->setFlash(__('The count has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Count.' . $this->Count->primaryKey => $id));
			$this->request->data = $this->Count->find('first', $options);
		}
		$mails = $this->Count->Mail->find('list');
		$this->set(compact('mails'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Count->id = $id;
		if (!$this->Count->exists()) {
			throw new NotFoundException(__('Invalid count'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Count->delete()) {
			$this->Session->setFlash(__('Count deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Count was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
