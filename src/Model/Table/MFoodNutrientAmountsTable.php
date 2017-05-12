<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MFoodNutrientAmounts Model
 *
 * @method \App\Model\Entity\MFoodNutrientAmount get($primaryKey, $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MFoodNutrientAmount findOrCreate($search, callable $callback = null, $options = [])
 */
class MFoodNutrientAmountsTable extends Table
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

        $this->table('m_food_nutrient_amounts');
        $this->displayField('foodId');
        $this->primaryKey('foodId');
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
            ->allowEmpty('foodId', 'create');

        $validator
            ->numeric('Refuse')
            ->allowEmpty('Refuse');

        $validator
            ->numeric('EnercKcal')
            ->allowEmpty('EnercKcal');

        $validator
            ->numeric('Enerc')
            ->allowEmpty('Enerc');

        $validator
            ->numeric('Water')
            ->allowEmpty('Water');

        $validator
            ->numeric('Protein')
            ->allowEmpty('Protein');

        $validator
            ->numeric('Protcaa')
            ->allowEmpty('Protcaa');

        $validator
            ->numeric('Fat')
            ->allowEmpty('Fat');

        $validator
            ->numeric('Fatnlea')
            ->allowEmpty('Fatnlea');

        $validator
            ->numeric('Fasat')
            ->allowEmpty('Fasat');

        $validator
            ->numeric('Fams')
            ->allowEmpty('Fams');

        $validator
            ->numeric('Fapu')
            ->allowEmpty('Fapu');

        $validator
            ->numeric('Chole')
            ->allowEmpty('Chole');

        $validator
            ->numeric('Carbohyd')
            ->allowEmpty('Carbohyd');

        $validator
            ->numeric('Choavlm')
            ->allowEmpty('Choavlm');

        $validator
            ->numeric('Fibsol')
            ->allowEmpty('Fibsol');

        $validator
            ->numeric('Fibins')
            ->allowEmpty('Fibins');

        $validator
            ->numeric('Fibtg')
            ->allowEmpty('Fibtg');

        $validator
            ->numeric('Ash')
            ->allowEmpty('Ash');

        $validator
            ->numeric('MineralNa')
            ->allowEmpty('MineralNa');

        $validator
            ->numeric('MineralK')
            ->allowEmpty('MineralK');

        $validator
            ->numeric('MineralCa')
            ->allowEmpty('MineralCa');

        $validator
            ->numeric('MineralMg')
            ->allowEmpty('MineralMg');

        $validator
            ->numeric('MineralP')
            ->allowEmpty('MineralP');

        $validator
            ->numeric('MineralFe')
            ->allowEmpty('MineralFe');

        $validator
            ->numeric('MineralZn')
            ->allowEmpty('MineralZn');

        $validator
            ->numeric('MineralCu')
            ->allowEmpty('MineralCu');

        $validator
            ->numeric('MineralMn')
            ->allowEmpty('MineralMn');

        $validator
            ->numeric('MineralId')
            ->allowEmpty('MineralId');

        $validator
            ->numeric('MineralSe')
            ->allowEmpty('MineralSe');

        $validator
            ->numeric('MineralCr')
            ->allowEmpty('MineralCr');

        $validator
            ->numeric('MineralMo')
            ->allowEmpty('MineralMo');

        $validator
            ->numeric('Retol')
            ->allowEmpty('Retol');

        $validator
            ->numeric('Carta')
            ->allowEmpty('Carta');

        $validator
            ->numeric('Cartb')
            ->allowEmpty('Cartb');

        $validator
            ->numeric('Crypxb')
            ->allowEmpty('Crypxb');

        $validator
            ->numeric('Cartbeq')
            ->allowEmpty('Cartbeq');

        $validator
            ->numeric('VitaRae')
            ->allowEmpty('VitaRae');

        $validator
            ->numeric('Vitd')
            ->allowEmpty('Vitd');

        $validator
            ->numeric('Tocpha')
            ->allowEmpty('Tocpha');

        $validator
            ->numeric('Tocphb')
            ->allowEmpty('Tocphb');

        $validator
            ->numeric('Tocphg')
            ->allowEmpty('Tocphg');

        $validator
            ->numeric('Tocphd')
            ->allowEmpty('Tocphd');

        $validator
            ->numeric('Vitk')
            ->allowEmpty('Vitk');

        $validator
            ->numeric('Thiahcl')
            ->allowEmpty('Thiahcl');

        $validator
            ->numeric('Ribf')
            ->allowEmpty('Ribf');

        $validator
            ->numeric('Nia')
            ->allowEmpty('Nia');

        $validator
            ->numeric('Vitb6A')
            ->allowEmpty('Vitb6A');

        $validator
            ->numeric('Vitb12')
            ->allowEmpty('Vitb12');

        $validator
            ->numeric('Fol')
            ->allowEmpty('Fol');

        $validator
            ->numeric('Pantac')
            ->allowEmpty('Pantac');

        $validator
            ->numeric('Biot')
            ->allowEmpty('Biot');

        $validator
            ->numeric('Vitc')
            ->allowEmpty('Vitc');

        $validator
            ->numeric('NaclEq')
            ->allowEmpty('NaclEq');

        $validator
            ->numeric('Alc')
            ->allowEmpty('Alc');

        $validator
            ->numeric('Nitra')
            ->allowEmpty('Nitra');

        $validator
            ->numeric('Thebrn')
            ->allowEmpty('Thebrn');

        $validator
            ->numeric('Caffn')
            ->allowEmpty('Caffn');

        $validator
            ->numeric('Tan')
            ->allowEmpty('Tan');

        $validator
            ->numeric('Polyphent')
            ->allowEmpty('Polyphent');

        $validator
            ->numeric('Aceac')
            ->allowEmpty('Aceac');

        $validator
            ->numeric('Oil')
            ->allowEmpty('Oil');

        $validator
            ->numeric('Oa')
            ->allowEmpty('Oa');

        $validator
            ->numeric('Fapun3')
            ->allowEmpty('Fapun3');

        $validator
            ->numeric('Fapun6')
            ->allowEmpty('Fapun6');

        $validator
            ->numeric('WeightRate')
            ->allowEmpty('WeightRate');

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
