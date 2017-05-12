<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MNormalMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MNormalMenusTable Test Case
 */
class MNormalMenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MNormalMenusTable
     */
    public $MNormalMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.m_normal_menus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MNormalMenus') ? [] : ['className' => 'App\Model\Table\MNormalMenusTable'];
        $this->MNormalMenus = TableRegistry::get('MNormalMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MNormalMenus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
