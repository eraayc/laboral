<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HiringsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HiringsTable Test Case
 */
class HiringsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HiringsTable
     */
    public $Hirings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hirings',
        'app.employers',
        'app.paychecks',
        'app.settlements',
        'app.periods',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hirings') ? [] : ['className' => HiringsTable::class];
        $this->Hirings = TableRegistry::get('Hirings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hirings);

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
