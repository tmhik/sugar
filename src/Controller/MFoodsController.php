<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * MFoods Controller
 *
 * @property \App\Model\Table\MFoodsTable $MFoods
 */
class MFoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mFoods = $this->paginate($this->MFoods);

        $this->set(compact('mFoods'));
        $this->set('_serialize', ['mFoods']);

        // table
        $members = TableRegistry::get('mFoods');

        // find
        $query = $members->find()
            ->hydrate(true)
            ->join([
                'table' => 'm_food_nutrient_amounts',
                'alias' => 'c',
                'type' => 'INNER',
                'conditions' => 'c.foodId = mFoods.foodId',
            ])->select([
                "foodId" => "mFoods.foodId"
                , "foodName" => "mFoods.foodName"
                , "water" => "c.Water"
            ]);

        // SQ
//        // 出力
//        foreach($query as $item){
//            var_dump($item);
//        }

//        $query = $this->MFoods->find()->contain(['m_food_nutrient_amounts']);
//        $results = $query->all();
//        foreach($results as $item){
//            var_dump($item);
//        }
        $this->set('tasks', $this->paginate($query) );
    }

    /**
     * View method
     *
     * @param string|null $id M Food id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mFood = $this->MFoods->get($id, [
            'contain' => []
        ]);

        $this->set('mFood', $mFood);
        $this->set('_serialize', ['mFood']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mFood = $this->MFoods->newEntity();
        if ($this->request->is('post')) {
            $mFood = $this->MFoods->patchEntity($mFood, $this->request->data);
            if ($this->MFoods->save($mFood)) {
                $this->Flash->success(__('The m food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m food could not be saved. Please, try again.'));
        }
        $this->set(compact('mFood'));
        $this->set('_serialize', ['mFood']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M Food id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mFood = $this->MFoods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mFood = $this->MFoods->patchEntity($mFood, $this->request->data);
            if ($this->MFoods->save($mFood)) {
                $this->Flash->success(__('The m food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m food could not be saved. Please, try again.'));
        }
        $this->set(compact('mFood'));
        $this->set('_serialize', ['mFood']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M Food id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mFood = $this->MFoods->get($id);
        if ($this->MFoods->delete($mFood)) {
            $this->Flash->success(__('The m food has been deleted.'));
        } else {
            $this->Flash->error(__('The m food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
