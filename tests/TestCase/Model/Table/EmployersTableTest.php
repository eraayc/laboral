<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployersTable Test Case
 */
class EmployersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployersTable
     */
    public $Employers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employers',
        'app.hirings',
        'app.paychecks',
        'app.settlements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Employers') ? [] : ['className' => EmployersTable::class];
        $this->Employers = TableRegistry::get('Employers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employers);

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
