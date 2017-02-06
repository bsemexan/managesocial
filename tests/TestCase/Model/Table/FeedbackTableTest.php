<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedbackTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedbackTable Test Case
 */
class FeedbackTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedbackTable
     */
    public $Feedback;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feedback',
        'app.post',
        'app.content',
        'app.post_content',
        'app.post_feedback'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Feedback') ? [] : ['className' => 'App\Model\Table\FeedbackTable'];
        $this->Feedback = TableRegistry::get('Feedback', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feedback);

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
