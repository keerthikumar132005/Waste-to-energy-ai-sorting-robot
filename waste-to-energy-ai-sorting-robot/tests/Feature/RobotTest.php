<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\WasteRecord;
use App\Models\EnergyRecord;

class RobotTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test robot uploading waste data.
     */
    public function testRobotUploadWasteData()
    {
        $payload = [
            'type' => 'recyclable',
            'amount' => 50,
            'timestamp' => now()->toDateTimeString(),
        ];

        $response = $this->postJson('/api/robot/upload-waste', $payload);

        $response->assertStatus(201)
                 ->assertJson(['status' => 'success']);

        $this->assertDatabaseHas('waste_records', [
            'type' => 'recyclable',
            'amount' => 50,
        ]);
    }

    /**
     * Test robot uploading energy data.
     */
    public function testRobotUploadEnergyData()
    {
        $payload = [
            'energy_generated' => 30,
            'current_output' => 5,
            'timestamp' => now()->toDateTimeString(),
        ];

        $response = $this->postJson('/api/robot/upload-energy', $payload);

        $response->assertStatus(201)
                 ->assertJson(['status' => 'success']);

        $this->assertDatabaseHas('energy_records', [
            'energy_generated' => 30,
            'current_output' => 5,
        ]);
    }
}
