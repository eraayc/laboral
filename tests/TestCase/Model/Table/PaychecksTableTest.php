<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaychecksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaychecksTable Test Case
 */
class PaychecksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaychecksTable
     */
    public $Paychecks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paychecks',
        'app.employees',
        'app.hirings',
        'app.employers',
        'app.settlements',
        'app.periods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paychecks') ? [] : ['className' => PaychecksTable::class];
        $this->Paychecks = TableRegistry::get('Paychecks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paychecks);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
