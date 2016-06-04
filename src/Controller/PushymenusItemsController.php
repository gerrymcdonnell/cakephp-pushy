<?php
namespace Gerrymcdonnell\Pushy\Controller;

use Gerrymcdonnell\Pushy\Controller\AppController;

/**
 * PushymenusItems Controller
 *
 * @property \Gmcd\Pushy\Model\Table\PushymenusItemsTable $PushymenusItems
 */
class PushymenusItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pushymenus']
        ];
        $pushymenusItems = $this->paginate($this->PushymenusItems);

        $this->set(compact('pushymenusItems'));
        $this->set('_serialize', ['pushymenusItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Pushymenus Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pushymenusItem = $this->PushymenusItems->get($id, [
            'contain' => ['Pushymenus']
        ]);

        $this->set('pushymenusItem', $pushymenusItem);
        $this->set('_serialize', ['pushymenusItem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pushymenusItem = $this->PushymenusItems->newEntity();
        if ($this->request->is('post')) {
            $pushymenusItem = $this->PushymenusItems->patchEntity($pushymenusItem, $this->request->data);
            if ($this->PushymenusItems->save($pushymenusItem)) {
                $this->Flash->success(__('The pushymenus item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pushymenus item could not be saved. Please, try again.'));
            }
        }
        $pushymenus = $this->PushymenusItems->Pushymenus->find('list', ['limit' => 200]);
        $this->set(compact('pushymenusItem', 'pushymenus'));
        $this->set('_serialize', ['pushymenusItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pushymenus Item id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pushymenusItem = $this->PushymenusItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pushymenusItem = $this->PushymenusItems->patchEntity($pushymenusItem, $this->request->data);
            if ($this->PushymenusItems->save($pushymenusItem)) {
                $this->Flash->success(__('The pushymenus item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pushymenus item could not be saved. Please, try again.'));
            }
        }
        $pushymenus = $this->PushymenusItems->Pushymenus->find('list', ['limit' => 200]);
        $this->set(compact('pushymenusItem', 'pushymenus'));
        $this->set('_serialize', ['pushymenusItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pushymenus Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pushymenusItem = $this->PushymenusItems->get($id);
        if ($this->PushymenusItems->delete($pushymenusItem)) {
            $this->Flash->success(__('The pushymenus item has been deleted.'));
        } else {
            $this->Flash->error(__('The pushymenus item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
