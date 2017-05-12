<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MUsers Controller
 *
 * @property \App\Model\Table\MUsersTable $MUsers
 */
class MUsersController extends AppController
{

    public $paginate = [
        'limit' => 2,
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mUsers = $this->paginate($this->MUsers);

        $this->set(compact('mUsers'));
        $this->set('_serialize', ['mUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id M User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mUser = $this->MUsers->get($id, [
            'contain' => []
        ]);

        $this->set('mUser', $mUser);
        $this->set('_serialize', ['mUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mUser = $this->MUsers->newEntity();
        if ($this->request->is('post')) {
            $mUser = $this->MUsers->patchEntity($mUser, $this->request->data);
            if ($this->MUsers->save($mUser)) {
                $this->Flash->success(__('The m user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m user could not be saved. Please, try again.'));
        }
        $this->set(compact('mUser'));
        $this->set('_serialize', ['mUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mUser = $this->MUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mUser = $this->MUsers->patchEntity($mUser, $this->request->data);
            if ($this->MUsers->save($mUser)) {
                $this->Flash->success(__('The m user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m user could not be saved. Please, try again.'));
        }
        $this->set(compact('mUser'));
        $this->set('_serialize', ['mUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mUser = $this->MUsers->get($id);
        if ($this->MUsers->delete($mUser)) {
            $this->Flash->success(__('The m user has been deleted.'));
        } else {
            $this->Flash->error(__('The m user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
