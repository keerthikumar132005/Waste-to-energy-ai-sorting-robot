<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EnergyRecord;
use App\Models\WasteRecord;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test energy stats endpoint.
     */
    public function testEnergyStatsEndpoint()
    {
        EnergyRecord::create([
            'energy_generated' => 100,
            'current_output' => 5,
            'created_at' => now(),
        ]);

        $response = $this->getJson('/api/dashboard/energy-stats');

        $response->assertStatus(200)
                 ->assertJsonStructure(['totalEnergy', 'currentOutput']);
    }

    /**
     * Test waste metrics endpoint.
     */
    public function testWasteMetricsEndpoint()
    {
        WasteRecord::create(['type' => 'recyclable', 'amount' => 20, 'created_at' => now()]);
        WasteRecord::create(['type' => 'organic', 'amount' => 10, 'created_at' => now()]);

        $response = $this->getJson('/api/dashboard/waste-metrics');

        $response->assertStatus(200)
                 ->assertJsonStructure(['totalWaste', 'recyclableWaste', 'organicWaste']);
    }
}
