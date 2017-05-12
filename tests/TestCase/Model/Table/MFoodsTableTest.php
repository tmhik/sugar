<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MFoodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MFoodsTable Test Case
 */
class MFoodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MFoodsTable
     */
    public $MFoods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.m_foods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MFoods') ? [] : ['className' => 'App\Model\Table\MFoodsTable'];
        $this->MFoods = TableRegistry::get('MFoods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MFoods);

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
