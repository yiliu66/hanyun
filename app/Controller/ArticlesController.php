<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

	public $uses = array('Article','User');
	public $helpers = array('Form', 'Html', 'Fck');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * read method
 * almost the same as view method
 */
	public function read($id = null) {
		$this->layout = false;
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('Fck', $this->Fck);
		if ($this->request->is('post')) {
			$this->request->data['Article']['created_by'] = $this->Auth->user('username');
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('controller' => 'articles','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
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
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Article']['modified_by'] = $this->Auth->user('username');
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('controller' => 'articles','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
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
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('Article deleted'));
			$this->redirect(array('controller' => 'articles','action' => 'index'));
		}
		$this->Session->setFlash(__('Article was not deleted'));
		$this->redirect(array('controller' => 'articles','action' => 'index'));
	}
}
