<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    /**
     * Respond to a chatbot query.
     */
    public function respond(Request $request)
    {
        $query = $request->input('query');
        
        // Here we simulate sending the query to a serverless inference endpoint
        // For production, you can replace this with actual serverless inference logic.
        try {
            $client = new Client();
            $response = $client->post('https://serverless-inference-url', [
                'json' => ['query' => $query]
            ]);
            $result = json_decode($response->getBody(), true);

            return response()->json([
                'response' => $result['response'] ?? 'Error processing query'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'response' => 'Failed to process your query. Please try again later.'
            ], 500);
        }
    }
}
