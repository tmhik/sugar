<?php
/**
 * Created by PhpStorm.
 * User: yamadatomohiko
 * Date: 2017/05/11
 * Time: 11:29
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Board extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

}