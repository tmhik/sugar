<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MFoodsFixture
 *
 */
class MFoodsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '識別ID', 'precision' => null, 'autoIncrement' => null],
        'foodNameKana' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '食材名(ひらがな)', 'precision' => null, 'fixed' => null],
        'foodNameDisplay' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '食材名(表示用)', 'precision' => null, 'fixed' => null],
        'foodNameOther' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '食材名(別名)、カンマ区切、複数可', 'precision' => null, 'fixed' => null],
        'foodId' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '食材ID', 'precision' => null],
        'foodName' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '食材名', 'precision' => null, 'fixed' => null],
        'subClass' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '副分類ID', 'precision' => null, 'fixed' => null],
        'kindClass' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '類区分ID', 'precision' => null, 'fixed' => null],
        'majorClassId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '大分類ID', 'precision' => null, 'autoIncrement' => null],
        'majorClass' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '大分類ID', 'precision' => null, 'fixed' => null],
        'middleClass' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '中分類ID', 'precision' => null, 'fixed' => null],
        'smallClass' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '小分類ID', 'precision' => null, 'fixed' => null],
        'registDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '作成日時', 'precision' => null],
        'registUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '作成者ID', 'precision' => null, 'fixed' => null],
        'updateDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '更新日時', 'precision' => null],
        'updateUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '更新者ID', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['foodId'], 'length' => []],
            'm_foods_ibfk_1' => ['type' => 'foreign', 'columns' => ['foodId'], 'references' => ['m_food_nutrient_amounts', 'foodId'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id' => 1,
            'foodNameKana' => 'Lorem ipsum dolor sit amet',
            'foodNameDisplay' => 'Lorem ipsum dolor sit amet',
            'foodNameOther' => 'Lorem ipsum dolor sit amet',
            'foodId' => '05e3e7e5-8754-4022-869f-ac395d12b61f',
            'foodName' => 'Lorem ipsum dolor sit amet',
            'subClass' => 'Lorem ipsum dolor sit amet',
            'kindClass' => 'Lorem ipsum dolor sit amet',
            'majorClassId' => 1,
            'majorClass' => 'Lorem ipsum dolor sit amet',
            'middleClass' => 'Lorem ipsum dolor sit amet',
            'smallClass' => 'Lorem ipsum dolor sit amet',
            'registDate' => 1493699980,
            'registUserId' => 'Lorem ip',
            'updateDate' => 1493699980,
            'updateUserId' => 'Lorem ip'
        ],
    ];
}
