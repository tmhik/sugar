<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MFood Entity
 *
 * @property int $id
 * @property string $foodNameKana
 * @property string $foodNameDisplay
 * @property string $foodNameOther
 * @property string $foodId
 * @property string $foodName
 * @property string $subClass
 * @property string $kindClass
 * @property int $majorClassId
 * @property string $majorClass
 * @property string $middleClass
 * @property string $smallClass
 * @property \Cake\I18n\Time $registDate
 * @property string $registUserId
 * @property \Cake\I18n\Time $updateDate
 * @property string $updateUserId
 */
class MFood extends Entity
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
