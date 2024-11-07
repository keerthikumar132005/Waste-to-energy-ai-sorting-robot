<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteRecord extends Model
{
    use HasFactory;

    // Define the table associated with this model
    protected $table = 'waste_records';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'type',
        'amount',
        'created_at',
    ];

    // Define the primary key type and if it's auto-incrementing
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    // Define timestamps if they are needed
    public $timestamps = false;

    /**
     * Accessor for formatted waste type.
     */
    public function getFormattedTypeAttribute()
    {
        return ucfirst($this->type);
    }
}
