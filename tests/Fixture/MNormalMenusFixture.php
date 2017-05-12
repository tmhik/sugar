<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MNormalMenusFixture
 *
 */
class MNormalMenusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'm_normal_menus';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'menuId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'メニューID', 'autoIncrement' => true, 'precision' => null],
        'menuType' => ['type' => 'integer', 'length' => 5, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'メニュータイプ（通常、カスタム、サプリ）', 'precision' => null, 'autoIncrement' => null],
        'menuName' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メニュー名', 'precision' => null, 'fixed' => null],
        'menuGroupId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '食事グループID（主食、汁物など）', 'precision' => null, 'autoIncrement' => null],
        'registDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '作成日時', 'precision' => null],
        'registUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '作成者ID', 'precision' => null, 'fixed' => null],
        'updateDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '更新日時', 'precision' => null],
        'updateUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '更新者ID', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['menuId'], 'length' => []],
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
            'menuId' => 1,
            'menuType' => 1,
            'menuName' => 'Lorem ipsum dolor sit amet',
            'menuGroupId' => 1,
            'registDate' => 1493723185,
            'registUserId' => 'Lorem ip',
            'updateDate' => 1493723185,
            'updateUserId' => 'Lorem ip'
        ],
    ];
}
