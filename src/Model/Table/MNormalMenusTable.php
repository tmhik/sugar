<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MNormalMenus Model
 *
 * @method \App\Model\Entity\MNormalMenu get($primaryKey, $options = [])
 * @method \App\Model\Entity\MNormalMenu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MNormalMenu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MNormalMenu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MNormalMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MNormalMenu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MNormalMenu findOrCreate($search, callable $callback = null, $options = [])
 */
class MNormalMenusTable extends Table
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

        $this->table('m_normal_menus');
        $this->displayField('menuId');
        $this->primaryKey('menuId');
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
            ->integer('menuId')
            ->allowEmpty('menuId', 'create');

        $validator
            ->integer('menuType')
            ->requirePresence('menuType', 'create')
            ->notEmpty('menuType');

        $validator
            ->allowEmpty('menuName');

        $validator
            ->integer('menuGroupId')
            ->requirePresence('menuGroupId', 'create')
            ->notEmpty('menuGroupId');

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
