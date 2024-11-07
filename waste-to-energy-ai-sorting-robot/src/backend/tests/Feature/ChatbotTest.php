<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Mockery;

class ChatbotTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test chatbot response with a sample query.
     *
     * @return void
     */
    public function testChatbotRespondsToQuery()
    {
        // Mock a response for the chatbot API
        $response = $this->postJson('/api/chat/respond', [
            'query' => 'What is the energy output today?'
        ]);

        // Assert status and response structure
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'response'
        ]);
    }
}
