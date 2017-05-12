<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MMenuFoodListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MMenuFoodListsTable Test Case
 */
class MMenuFoodListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MMenuFoodListsTable
     */
    public $MMenuFoodLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.m_menu_food_lists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MMenuFoodLists') ? [] : ['className' => 'App\Model\Table\MMenuFoodListsTable'];
        $this->MMenuFoodLists = TableRegistry::get('MMenuFoodLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MMenuFoodLists);

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
