<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MMenuFoodListsFixture
 *
 */
class MMenuFoodListsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'menuFoodListId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'メニュー食材リストID', 'autoIncrement' => true, 'precision' => null],
        'menuId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'メニューID', 'precision' => null, 'autoIncrement' => null],
        'foodId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '食材ID', 'precision' => null, 'autoIncrement' => null],
        'number' => ['type' => 'float', 'length' => 0, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '数量'],
        'unitId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '単位ID(区分ID)', 'precision' => null, 'autoIncrement' => null],
        'registDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '作成日時', 'precision' => null],
        'registUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '作成者ID', 'precision' => null, 'fixed' => null],
        'updateDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '更新日時', 'precision' => null],
        'updateUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '更新者ID', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['menuFoodListId'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'menuFoodListId' => 1,
            'menuId' => 1,
            'foodId' => 1,
            'number' => 1,
            'unitId' => 1,
            'registDate' => 1493723302,
            'registUserId' => 'Lorem ip',
            'updateDate' => 1493723302,
            'updateUserId' => 'Lorem ip'
        ],
    ];
}
