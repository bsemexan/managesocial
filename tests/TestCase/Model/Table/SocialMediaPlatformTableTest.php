<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialMediaPlatformTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialMediaPlatformTable Test Case
 */
class SocialMediaPlatformTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialMediaPlatformTable
     */
    public $SocialMediaPlatform;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.social_media_platform'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SocialMediaPlatform') ? [] : ['className' => 'App\Model\Table\SocialMediaPlatformTable'];
        $this->SocialMediaPlatform = TableRegistry::get('SocialMediaPlatform', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialMediaPlatform);

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
