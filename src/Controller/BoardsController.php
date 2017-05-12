<?php
/**
 * Created by PhpStorm.
 * User: yamadatomohiko
 * Date: 2017/05/11
 * Time: 11:35
 */

namespace App\Controller;


class BoardsController extends AppController
{
    public function index(){
        $this->set('entity',$this->Boards->newEntity());
        if ($this->request->is('post')){
            $data = $this->Boards->find('all', [
                'conditions'=>[
                    'name like' => "%{$this->request->data['name']}%"
                ]
            ]);
        } else {
            $data = $this->Boards->find('all');
        }

        $this->set('data', $data);
        $this->set('count', $data->count());
        $this->set('min', $data->min('id'));
        $this->set('max', $data->max('id'));
        $this->set('first', $data->first()->toArray());
    }

    public function addRecord(){
        if ($this->request->is('post')){
            $board = $this->Boards->newEntity($this->request->data);
            $this->Boards->save($board);
        }
        return $this->redirect(['action' => 'index']);
    }
}