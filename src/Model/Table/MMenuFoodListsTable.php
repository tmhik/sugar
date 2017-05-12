<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MMenuFoodLists Model
 *
 * @method \App\Model\Entity\MMenuFoodList get($primaryKey, $options = [])
 * @method \App\Model\Entity\MMenuFoodList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MMenuFoodList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MMenuFoodList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MMenuFoodList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MMenuFoodList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MMenuFoodList findOrCreate($search, callable $callback = null, $options = [])
 */
class MMenuFoodListsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('m_menu_food_lists');
        $this->displayField('menuFoodListId');
        $this->primaryKey('menuFoodListId');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('menuFoodListId')
            ->allowEmpty('menuFoodListId', 'create');

        $validator
            ->integer('menuId')
            ->requirePresence('menuId', 'create')
            ->notEmpty('menuId');

        $validator
            ->integer('foodId')
            ->requirePresence('foodId', 'create')
            ->notEmpty('foodId');

        $validator
            ->numeric('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->integer('unitId')
            ->requirePresence('unitId', 'create')
            ->notEmpty('unitId');

        $validator
            ->dateTime('registDate')
            ->requirePresence('registDate', 'create')
            ->notEmpty('registDate');

        $validator
            ->allowEmpty('registUserId');

        $validator
            ->dateTime('updateDate')
            ->requirePresence('updateDate', 'create')
            ->notEmpty('updateDate');

        $validator
            ->allowEmpty('updateUserId');

        return $validator;
    }
}
