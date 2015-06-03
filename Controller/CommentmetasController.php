<?php
App::uses('AppController', 'Controller');
/**
 * Commentmetas Controller
 *
 * @property Commentmeta $Commentmeta
 * @property PaginatorComponent $Paginator
 */
class CommentmetasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Commentmeta->recursive = 0;
		$this->set('commentmetas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commentmeta->exists($id)) {
			throw new NotFoundException(__('Invalid commentmeta'));
		}
		$options = array('conditions' => array('Commentmeta.' . $this->Commentmeta->primaryKey => $id));
		$this->set('commentmeta', $this->Commentmeta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commentmeta->create();
			if ($this->Commentmeta->save($this->request->data)) {
				$this->Session->setFlash(__('The commentmeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentmeta could not be saved. Please, try again.'));
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
		if (!$this->Commentmeta->exists($id)) {
			throw new NotFoundException(__('Invalid commentmeta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commentmeta->save($this->request->data)) {
				$this->Session->setFlash(__('The commentmeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentmeta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commentmeta.' . $this->Commentmeta->primaryKey => $id));
			$this->request->data = $this->Commentmeta->find('first', $options);
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
		$this->Commentmeta->id = $id;
		if (!$this->Commentmeta->exists()) {
			throw new NotFoundException(__('Invalid commentmeta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Commentmeta->delete()) {
			$this->Session->setFlash(__('The commentmeta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The commentmeta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
