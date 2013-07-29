<?php
App::uses('AppController', 'Controller');
/**
 * MailsCounts Controller
 *
 * @property MailsCount $MailsCount
 */
class MailsCountsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MailsCount->recursive = 0;
		$this->set('mailsCounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MailsCount->exists($id)) {
			throw new NotFoundException(__('Invalid mails count'));
		}
		$options = array('conditions' => array('MailsCount.' . $this->MailsCount->primaryKey => $id));
		$this->set('mailsCount', $this->MailsCount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MailsCount->create();
			if ($this->MailsCount->save($this->request->data)) {
				$this->Session->setFlash(__('The mails count has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mails count could not be saved. Please, try again.'));
			}
		}
		$mails = $this->MailsCount->Mail->find('list');
		$counts = $this->MailsCount->Count->find('list');
		$this->set(compact('mails', 'counts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MailsCount->exists($id)) {
			throw new NotFoundException(__('Invalid mails count'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MailsCount->save($this->request->data)) {
				$this->Session->setFlash(__('The mails count has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mails count could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MailsCount.' . $this->MailsCount->primaryKey => $id));
			$this->request->data = $this->MailsCount->find('first', $options);
		}
		$mails = $this->MailsCount->Mail->find('list');
		$counts = $this->MailsCount->Count->find('list');
		$this->set(compact('mails', 'counts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MailsCount->id = $id;
		if (!$this->MailsCount->exists()) {
			throw new NotFoundException(__('Invalid mails count'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MailsCount->delete()) {
			$this->Session->setFlash(__('Mails count deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mails count was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
