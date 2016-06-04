<?php
namespace Gmcd\Pushy\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Gmcd\Pushy\Model\Table\PushymenusTable;

/**
 * Gmcd\Pushy\Model\Table\PushymenusTable Test Case
 */
class PushymenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Gmcd\Pushy\Model\Table\PushymenusTable
     */
    public $Pushymenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.gmcd/pushy.pushymenus',
        'plugin.gmcd/pushy.pushymenus_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pushymenus') ? [] : ['className' => 'Gmcd\Pushy\Model\Table\PushymenusTable'];
        $this->Pushymenus = TableRegistry::get('Pushymenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pushymenus);

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
