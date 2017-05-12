<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MFoodNutrientAmounts Controller
 *
 * @property \App\Model\Table\MFoodNutrientAmountsTable $MFoodNutrientAmounts
 */
class MFoodNutrientAmountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mFoodNutrientAmounts = $this->paginate($this->MFoodNutrientAmounts);

        $this->set(compact('mFoodNutrientAmounts'));
        $this->set('_serialize', ['mFoodNutrientAmounts']);
    }

    /**
     * View method
     *
     * @param string|null $id M Food Nutrient Amount id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mFoodNutrientAmount = $this->MFoodNutrientAmounts->get($id, [
            'contain' => []
        ]);

        $this->set('mFoodNutrientAmount', $mFoodNutrientAmount);
        $this->set('_serialize', ['mFoodNutrientAmount']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mFoodNutrientAmount = $this->MFoodNutrientAmounts->newEntity();
        if ($this->request->is('post')) {
            $mFoodNutrientAmount = $this->MFoodNutrientAmounts->patchEntity($mFoodNutrientAmount, $this->request->data);
            if ($this->MFoodNutrientAmounts->save($mFoodNutrientAmount)) {
                $this->Flash->success(__('The m food nutrient amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m food nutrient amount could not be saved. Please, try again.'));
        }
        $this->set(compact('mFoodNutrientAmount'));
        $this->set('_serialize', ['mFoodNutrientAmount']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M Food Nutrient Amount id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mFoodNutrientAmount = $this->MFoodNutrientAmounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mFoodNutrientAmount = $this->MFoodNutrientAmounts->patchEntity($mFoodNutrientAmount, $this->request->data);
            if ($this->MFoodNutrientAmounts->save($mFoodNutrientAmount)) {
                $this->Flash->success(__('The m food nutrient amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m food nutrient amount could not be saved. Please, try again.'));
        }
        $this->set(compact('mFoodNutrientAmount'));
        $this->set('_serialize', ['mFoodNutrientAmount']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M Food Nutrient Amount id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mFoodNutrientAmount = $this->MFoodNutrientAmounts->get($id);
        if ($this->MFoodNutrientAmounts->delete($mFoodNutrientAmount)) {
            $this->Flash->success(__('The m food nutrient amount has been deleted.'));
        } else {
            $this->Flash->error(__('The m food nutrient amount could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
