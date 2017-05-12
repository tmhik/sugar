<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MFoodNutrientAmount Entity
 *
 * @property string $foodId
 * @property float $Refuse
 * @property float $EnercKcal
 * @property float $Enerc
 * @property float $Water
 * @property float $Protein
 * @property float $Protcaa
 * @property float $Fat
 * @property float $Fatnlea
 * @property float $Fasat
 * @property float $Fams
 * @property float $Fapu
 * @property float $Chole
 * @property float $Carbohyd
 * @property float $Choavlm
 * @property float $Fibsol
 * @property float $Fibins
 * @property float $Fibtg
 * @property float $Ash
 * @property float $MineralNa
 * @property float $MineralK
 * @property float $MineralCa
 * @property float $MineralMg
 * @property float $MineralP
 * @property float $MineralFe
 * @property float $MineralZn
 * @property float $MineralCu
 * @property float $MineralMn
 * @property float $MineralId
 * @property float $MineralSe
 * @property float $MineralCr
 * @property float $MineralMo
 * @property float $Retol
 * @property float $Carta
 * @property float $Cartb
 * @property float $Crypxb
 * @property float $Cartbeq
 * @property float $VitaRae
 * @property float $Vitd
 * @property float $Tocpha
 * @property float $Tocphb
 * @property float $Tocphg
 * @property float $Tocphd
 * @property float $Vitk
 * @property float $Thiahcl
 * @property float $Ribf
 * @property float $Nia
 * @property float $Vitb6A
 * @property float $Vitb12
 * @property float $Fol
 * @property float $Pantac
 * @property float $Biot
 * @property float $Vitc
 * @property float $NaclEq
 * @property float $Alc
 * @property float $Nitra
 * @property float $Thebrn
 * @property float $Caffn
 * @property float $Tan
 * @property float $Polyphent
 * @property float $Aceac
 * @property float $Oil
 * @property float $Oa
 * @property float $Fapun3
 * @property float $Fapun6
 * @property float $WeightRate
 * @property \Cake\I18n\Time $registDate
 * @property string $registUserId
 * @property \Cake\I18n\Time $updateDate
 * @property string $updateUserId
 */
class MFoodNutrientAmount extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'foodId' => false
    ];
}
