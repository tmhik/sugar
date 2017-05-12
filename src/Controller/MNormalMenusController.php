<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MNormalMenus Controller
 *
 * @property \App\Model\Table\MNormalMenusTable $MNormalMenus
 */
class MNormalMenusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mNormalMenus = $this->paginate($this->MNormalMenus);

        $this->set(compact('mNormalMenus'));
        $this->set('_serialize', ['mNormalMenus']);
    }

    /**
     * View method
     *
     * @param string|null $id M Normal Menu id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mNormalMenu = $this->MNormalMenus->get($id, [
            'contain' => []
        ]);

        $this->set('mNormalMenu', $mNormalMenu);
        $this->set('_serialize', ['mNormalMenu']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mNormalMenu = $this->MNormalMenus->newEntity();
        if ($this->request->is('post')) {
            $mNormalMenu = $this->MNormalMenus->patchEntity($mNormalMenu, $this->request->data);
            if ($this->MNormalMenus->save($mNormalMenu)) {
                $this->Flash->success(__('The m normal menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m normal menu could not be saved. Please, try again.'));
        }
        $this->set(compact('mNormalMenu'));
        $this->set('_serialize', ['mNormalMenu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M Normal Menu id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mNormalMenu = $this->MNormalMenus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mNormalMenu = $this->MNormalMenus->patchEntity($mNormalMenu, $this->request->data);
            if ($this->MNormalMenus->save($mNormalMenu)) {
                $this->Flash->success(__('The m normal menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m normal menu could not be saved. Please, try again.'));
        }
        $this->set(compact('mNormalMenu'));
        $this->set('_serialize', ['mNormalMenu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M Normal Menu id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mNormalMenu = $this->MNormalMenus->get($id);
        if ($this->MNormalMenus->delete($mNormalMenu)) {
            $this->Flash->success(__('The m normal menu has been deleted.'));
        } else {
            $this->Flash->error(__('The m normal menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
