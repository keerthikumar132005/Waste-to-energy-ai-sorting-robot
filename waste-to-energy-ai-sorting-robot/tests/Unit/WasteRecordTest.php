<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\WasteRecord;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WasteRecordTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating a WasteRecord entry.
     */
    public function testCreateWasteRecord()
    {
        $record = WasteRecord::create([
            'type' => 'organic',
            'amount' => 20,
            'created_at' => now(),
        ]);

        $this->assertDatabaseHas('waste_records', [
            'type' => 'organic',
            'amount' => 20,
        ]);
    }
}
