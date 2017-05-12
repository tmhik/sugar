<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MFoodNutrientAmountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MFoodNutrientAmountsTable Test Case
 */
class MFoodNutrientAmountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MFoodNutrientAmountsTable
     */
    public $MFoodNutrientAmounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.m_food_nutrient_amounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MFoodNutrientAmounts') ? [] : ['className' => 'App\Model\Table\MFoodNutrientAmountsTable'];
        $this->MFoodNutrientAmounts = TableRegistry::get('MFoodNutrientAmounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MFoodNutrientAmounts);

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
