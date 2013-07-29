<?php
App::uses('AppController', 'Controller');
/**
 * Mails Controller
 *
 * @property Mail $Mail
 */
class MailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mail->recursive = 0;
		$this->set('mails', $this->paginate());
	}

/**
 * read method
 * @return void
 */
public function read() {
	$this->layout = false;
	$this->set('mails', $this->paginate());
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mail->exists($id)) {
			throw new NotFoundException(__('Invalid mail'));
		}
		$options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
		$this->set('mail', $this->Mail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mail->create();
			if ($this->Mail->save($this->request->data)) {
				$this->Session->setFlash(__('The mail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail could not be saved. Please, try again.'));
			}
		}
		$counts = $this->Mail->Count->find('list');
		$this->set(compact('counts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mail->exists($id)) {
			throw new NotFoundException(__('Invalid mail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mail->save($this->request->data)) {
				$this->Session->setFlash(__('The mail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
			$this->request->data = $this->Mail->find('first', $options);
		}
		$counts = $this->Mail->Count->find('list');
		$this->set(compact('counts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mail->id = $id;
		if (!$this->Mail->exists()) {
			throw new NotFoundException(__('Invalid mail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mail->delete()) {
			$this->Session->setFlash(__('Mail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
