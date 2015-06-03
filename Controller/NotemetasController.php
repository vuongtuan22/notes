<?php
App::uses('AppController', 'Controller');
/**
 * Notemetas Controller
 *
 * @property Notemeta $Notemeta
 * @property PaginatorComponent $Paginator
 */
class NotemetasController extends AppController {

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
		$this->Notemeta->recursive = 0;
		$this->set('notemetas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Notemeta->exists($id)) {
			throw new NotFoundException(__('Invalid notemeta'));
		}
		$options = array('conditions' => array('Notemeta.' . $this->Notemeta->primaryKey => $id));
		$this->set('notemeta', $this->Notemeta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Notemeta->create();
			if ($this->Notemeta->save($this->request->data)) {
				$this->Session->setFlash(__('The notemeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notemeta could not be saved. Please, try again.'));
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
		if (!$this->Notemeta->exists($id)) {
			throw new NotFoundException(__('Invalid notemeta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Notemeta->save($this->request->data)) {
				$this->Session->setFlash(__('The notemeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notemeta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Notemeta.' . $this->Notemeta->primaryKey => $id));
			$this->request->data = $this->Notemeta->find('first', $options);
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
		$this->Notemeta->id = $id;
		if (!$this->Notemeta->exists()) {
			throw new NotFoundException(__('Invalid notemeta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Notemeta->delete()) {
			$this->Session->setFlash(__('The notemeta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The notemeta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
