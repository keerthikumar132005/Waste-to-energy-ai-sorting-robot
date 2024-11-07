<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyRecord extends Model
{
    use HasFactory;

    // Define the table associated with this model
    protected $table = 'energy_records';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'energy_generated',
        'current_output',
        'created_at',
    ];

    // Define the primary key type and if it's auto-incrementing
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // Define timestamps if they are needed
    public $timestamps = false;

    /**
     * Get a formatted version of the current output.
     */
    public function getFormattedOutputAttribute()
    {
        return number_format($this->current_output, 2) . ' kW';
    }
}
