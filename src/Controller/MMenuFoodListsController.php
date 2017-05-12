<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MMenuFoodLists Controller
 *
 * @property \App\Model\Table\MMenuFoodListsTable $MMenuFoodLists
 */
class MMenuFoodListsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mMenuFoodLists = $this->paginate($this->MMenuFoodLists);

        $this->set(compact('mMenuFoodLists'));
        $this->set('_serialize', ['mMenuFoodLists']);
    }

    /**
     * View method
     *
     * @param string|null $id M Menu Food List id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mMenuFoodList = $this->MMenuFoodLists->get($id, [
            'contain' => []
        ]);

        $this->set('mMenuFoodList', $mMenuFoodList);
        $this->set('_serialize', ['mMenuFoodList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mMenuFoodList = $this->MMenuFoodLists->newEntity();
        if ($this->request->is('post')) {
            $mMenuFoodList = $this->MMenuFoodLists->patchEntity($mMenuFoodList, $this->request->data);
            if ($this->MMenuFoodLists->save($mMenuFoodList)) {
                $this->Flash->success(__('The m menu food list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m menu food list could not be saved. Please, try again.'));
        }
        $this->set(compact('mMenuFoodList'));
        $this->set('_serialize', ['mMenuFoodList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M Menu Food List id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mMenuFoodList = $this->MMenuFoodLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mMenuFoodList = $this->MMenuFoodLists->patchEntity($mMenuFoodList, $this->request->data);
            if ($this->MMenuFoodLists->save($mMenuFoodList)) {
                $this->Flash->success(__('The m menu food list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m menu food list could not be saved. Please, try again.'));
        }
        $this->set(compact('mMenuFoodList'));
        $this->set('_serialize', ['mMenuFoodList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M Menu Food List id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mMenuFoodList = $this->MMenuFoodLists->get($id);
        if ($this->MMenuFoodLists->delete($mMenuFoodList)) {
            $this->Flash->success(__('The m menu food list has been deleted.'));
        } else {
            $this->Flash->error(__('The m menu food list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
