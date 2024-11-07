<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChatbotTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test chatbot response with a sample query.
     */
    public function testChatbotRespondsToQuery()
    {
        $response = $this->postJson('/api/chat/respond', [
            'query' => 'What is the energy output today?'
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['response']);
    }
}
