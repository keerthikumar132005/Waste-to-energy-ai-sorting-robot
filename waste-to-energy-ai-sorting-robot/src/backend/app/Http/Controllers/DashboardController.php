<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnergyRecord;
use App\Models\WasteRecord;

class DashboardController extends Controller
{
    /**
     * Get energy statistics for the dashboard.
     */
    public function energyStats()
    {
        $totalEnergy = EnergyRecord::sum('energy_generated');
        $currentOutput = EnergyRecord::latest()->value('current_output') ?? 0;

        return response()->json([
            'totalEnergy' => $totalEnergy,
            'currentOutput' => $currentOutput,
        ]);
    }

    /**
     * Get waste metrics for the dashboard.
     */
    public function wasteMetrics()
    {
        $totalWaste = WasteRecord::sum('amount');
        $recyclableWaste = WasteRecord::where('type', 'recyclable')->sum('amount');
        $organicWaste = WasteRecord::where('type', 'organic')->sum('amount');

        return response()->json([
            'totalWaste' => $totalWaste,
            'recyclableWaste' => $recyclableWaste,
            'organicWaste' => $organicWaste,
        ]);
    }
}
