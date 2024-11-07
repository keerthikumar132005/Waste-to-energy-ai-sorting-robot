<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RobotController;

// Chatbot Route
Route::post('/chat/respond', [ChatbotController::class, 'respond']);

// Dashboard Routes
Route::get('/dashboard/energy-stats', [DashboardController::class, 'energyStats']);
Route::get('/dashboard/waste-metrics', [DashboardController::class, 'wasteMetrics']);

// Robot Data Upload Routes
Route::post('/robot/upload-waste', [RobotController::class, 'uploadWasteData']);
Route::post('/robot/upload-energy', [RobotController::class, 'uploadEnergyData']);
