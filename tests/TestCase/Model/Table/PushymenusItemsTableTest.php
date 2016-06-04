<?php
namespace Gmcd\Pushy\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Gmcd\Pushy\Model\Table\PushymenusItemsTable;

/**
 * Gmcd\Pushy\Model\Table\PushymenusItemsTable Test Case
 */
class PushymenusItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Gmcd\Pushy\Model\Table\PushymenusItemsTable
     */
    public $PushymenusItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.gmcd/pushy.pushymenus_items',
        'plugin.gmcd/pushy.pushymenus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PushymenusItems') ? [] : ['className' => 'Gmcd\Pushy\Model\Table\PushymenusItemsTable'];
        $this->PushymenusItems = TableRegistry::get('PushymenusItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PushymenusItems);

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
