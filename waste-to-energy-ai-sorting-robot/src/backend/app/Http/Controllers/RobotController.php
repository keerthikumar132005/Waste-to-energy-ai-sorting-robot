<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WasteRecord;
use App\Models\EnergyRecord;

class RobotController extends Controller
{
    /**
     * Upload waste classification data from the robot.
     */
    public function uploadWasteData(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'amount' => 'required|numeric',
            'timestamp' => 'required|date'
        ]);

        WasteRecord::create([
            'type' => $data['type'],
            'amount' => $data['amount'],
            'created_at' => $data['timestamp'],
        ]);

        return response()->json(['status' => 'success'], 201);
    }

    /**
     * Upload energy output data from the robot.
     */
    public function uploadEnergyData(Request $request)
    {
        $data = $request->validate([
            'energy_generated' => 'required|numeric',
            'current_output' => 'required|numeric',
            'timestamp' => 'required|date'
        ]);

        EnergyRecord::create([
            'energy_generated' => $data['energy_generated'],
            'current_output' => $data['current_output'],
            'created_at' => $data['timestamp'],
        ]);

        return response()->json(['status' => 'success'], 201);
    }
}
