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
     *
     * @return void
     */
    public function testEnergyStatsEndpoint()
    {
        // Seed the database with a sample energy record
        EnergyRecord::create([
            'energy_generated' => 100,
            'current_output' => 5,
            'created_at' => now(),
        ]);

        // Call the API
        $response = $this->getJson('/api/dashboard/energy-stats');

        // Assert response
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'totalEnergy',
                     'currentOutput',
                 ]);
    }

    /**
     * Test waste metrics endpoint.
     *
     * @return void
     */
    public function testWasteMetricsEndpoint()
    {
        // Seed the database with sample waste records
        WasteRecord::create(['type' => 'recyclable', 'amount' => 20, 'created_at' => now()]);
        WasteRecord::create(['type' => 'organic', 'amount' => 10, 'created_at' => now()]);

        // Call the API
        $response = $this->getJson('/api/dashboard/waste-metrics');

        // Assert response
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'totalWaste',
                     'recyclableWaste',
                     'organicWaste',
                 ]);
    }
}
