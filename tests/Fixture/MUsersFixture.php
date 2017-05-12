<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MUsersFixture
 *
 */
class MUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'userId' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '識別用ID', 'autoIncrement' => true, 'precision' => null],
        'id' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'ユーザID(メールアドレス)', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => 'ニックネーム', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => 'ログインパスワード', 'precision' => null, 'fixed' => null],
        'token' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => 'トークン文字列', 'precision' => null, 'fixed' => null],
        'registDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '作成日時', 'precision' => null],
        'registUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '作成者ID', 'precision' => null, 'fixed' => null],
        'updateDate' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '更新日時', 'precision' => null],
        'updateUserId' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '更新者ID', 'precision' => null, 'fixed' => null],
        'deleteFlg' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '削除フラグ', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['userId'], 'length' => []],
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
            'userId' => 1,
            'id' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ip',
            'token' => 'Lorem ipsum dolor sit amet',
            'registDate' => 1493632206,
            'registUserId' => 'Lorem ip',
            'updateDate' => 1493632206,
            'updateUserId' => 'Lorem ip',
            'deleteFlg' => 1
        ],
    ];
}
