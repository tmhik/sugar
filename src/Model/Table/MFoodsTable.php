<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MFoods Model
 *
 * @method \App\Model\Entity\MFood get($primaryKey, $options = [])
 * @method \App\Model\Entity\MFood newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MFood[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MFood|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MFood patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MFood[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MFood findOrCreate($search, callable $callback = null, $options = [])
 */
class MFoodsTable extends Table
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

        $this->table('m_foods');
        $this->displayField('foodId');
        $this->primaryKey('foodId');
        $this->hasOne('m_food_nutrient_amounts');

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
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->allowEmpty('foodNameKana');

        $validator
            ->allowEmpty('foodNameDisplay');

        $validator
            ->allowEmpty('foodNameOther');

        $validator
            ->allowEmpty('foodId', 'create');

        $validator
            ->allowEmpty('foodName');

        $validator
            ->allowEmpty('subClass');

        $validator
            ->allowEmpty('kindClass');

        $validator
            ->integer('majorClassId')
            ->allowEmpty('majorClassId');

        $validator
            ->allowEmpty('majorClass');

        $validator
            ->allowEmpty('middleClass');

        $validator
            ->allowEmpty('smallClass');

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
