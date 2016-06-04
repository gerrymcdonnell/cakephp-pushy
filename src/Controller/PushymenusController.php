<?php
namespace Gerrymcdonnell\Pushy\Controller;

use Gerrymcdonnell\Pushy\Controller\AppController;
use Cake\Event\Event;

/**
 * Pushymenus Controller
 *
 * @property \Gmcd\Pushy\Model\Table\PushymenusTable $Pushymenus
 */
class PushymenusController extends AppController
{

    //allow JSON and XML
     public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	
	
	/**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pushymenus = $this->paginate($this->Pushymenus);

        $this->set(compact('pushymenus'));
        $this->set('_serialize', ['pushymenus']);
    }

    /**
     * View method
     *
     * @param string|null $id Pushymenu id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pushymenu = $this->Pushymenus->get($id, [
            'contain' => ['PushymenusItems']
        ]);

        $this->set('pushymenu', $pushymenu);
        $this->set('_serialize', ['pushymenu']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pushymenu = $this->Pushymenus->newEntity();
        if ($this->request->is('post')) {
            $pushymenu = $this->Pushymenus->patchEntity($pushymenu, $this->request->data);
            if ($this->Pushymenus->save($pushymenu)) {
                $this->Flash->success(__('The pushymenu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pushymenu could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pushymenu'));
        $this->set('_serialize', ['pushymenu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pushymenu id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pushymenu = $this->Pushymenus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pushymenu = $this->Pushymenus->patchEntity($pushymenu, $this->request->data);
            if ($this->Pushymenus->save($pushymenu)) {
                $this->Flash->success(__('The pushymenu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pushymenu could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pushymenu'));
        $this->set('_serialize', ['pushymenu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pushymenu id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pushymenu = $this->Pushymenus->get($id);
		
		//to do check for ajax request
		
        if ($this->Pushymenus->delete($pushymenu)) {
            $this->Flash->success(__('The pushymenu has been deleted.'));
        } else {
            $this->Flash->error(__('The pushymenu could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	
	
	
	//ajax delete
	public function ajaxdelete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $item = $this->Pushymenus->get($id);

        if ($this->request->is('ajax')) {

            $this->autoRender=false;   
            $this->layout = 'ajax';

            if ($this->Pushymenus->delete($item)) {
                $this->response->body('Success');
                return $this->response;                
            } else {
                return false;
            }
        }
    }

    /*
    public function beforeFilter(Event $event)
    {
        if($this->request->param('action') === 'add') {
            $this->viewBuilder()->layout('test');
        }
    }
    */
	
	
	
}
