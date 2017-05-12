<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MUsers Model
 *
 * @method \App\Model\Entity\MUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MUser findOrCreate($search, callable $callback = null, $options = [])
 */
class MUsersTable extends Table
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

        $this->table('m_users');
        $this->displayField('name');
        $this->primaryKey('userId');
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
            ->integer('userId')
            ->allowEmpty('userId', 'create');

        $validator
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('token', 'create')
            ->notEmpty('token');

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

        $validator
            ->boolean('deleteFlg')
            ->requirePresence('deleteFlg', 'create')
            ->notEmpty('deleteFlg');

        return $validator;
    }
}
