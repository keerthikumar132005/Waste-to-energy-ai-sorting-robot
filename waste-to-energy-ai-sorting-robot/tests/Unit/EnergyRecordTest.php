<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\EnergyRecord;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnergyRecordTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating an EnergyRecord entry.
     */
    public function testCreateEnergyRecord()
    {
        $record = EnergyRecord::create([
            'energy_generated' => 50,
            'current_output' => 5,
            'created_at' => now(),
        ]);

        $this->assertDatabaseHas('energy_records', [
            'energy_generated' => 50,
            'current_output' => 5,
        ]);
    }
}
