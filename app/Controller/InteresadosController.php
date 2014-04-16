<?php
App::uses('AppController', 'Controller');
/**
 * Interesados Controller
 *
 * @property Interesado $Interesado
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InteresadosController extends AppController {

    /**
     * Components
     *
     * @var array
     */
	public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->Interesado->recursive = 0;
        $this->Paginator->settings = array( 'limit' => 1000000 );
		$this->set('interesados', $this->Paginator->paginate() );
	}

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		if (!$this->Interesado->exists($id)) {
			throw new NotFoundException( "Interesado invalido" );
		}
		$options = array('conditions' => array('Interesado.' . $this->Interesado->primaryKey => $id));
		$this->set('interesado', $this->Interesado->find('first', $options));
        $this->layout = 'impresion';
	}

    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interesado->create();
			if ($this->Interesado->save($this->request->data)) {
				$this->Session->setFlash('El interesado ha sido guardado.');
				return $this->redirect(array('action' => 'view', $this->Interesado->id));
			} else {
				$this->Session->setFlash( 'El interesado no pudo ser guardado. Intente nuevamente.');
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
		if (!$this->Interesado->exists($id)) {
			throw new NotFoundException( "Interesado invalido" );
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interesado->save($this->request->data)) {
				$this->Session->setFlash("El interesado ha sido guardado" );
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash( 'El interesado no pudo ser guardado. Intente nuevamente.');
			}
		} else {
			$options = array('conditions' => array('Interesado.' . $this->Interesado->primaryKey => $id));
			$this->request->data = $this->Interesado->find('first', $options);
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
		$this->Interesado->id = $id;
		if (!$this->Interesado->exists()) {
			throw new NotFoundException( "Interesado invalido" );
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Interesado->delete()) {
			$this->Session->setFlash( "El interesado fue eliminado correctamente");
		} else {
			$this->Session->setFlash( 'El interesado no pudo ser eliminado. Intente nuevamente.');
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function exportar() {
        $this->Interesado->recursive = 0;
        $this->set('interesados', $this->Interesado->find( 'all' ) );
    }
}
