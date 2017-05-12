<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MNormalMenu Entity
 *
 * @property int $menuId
 * @property int $menuType
 * @property string $menuName
 * @property int $menuGroupId
 * @property \Cake\I18n\Time $registDate
 * @property string $registUserId
 * @property \Cake\I18n\Time $updateDate
 * @property string $updateUserId
 */
class MNormalMenu extends Entity
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
        'menuId' => false
    ];
}
