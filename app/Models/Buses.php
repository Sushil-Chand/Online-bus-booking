<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    use HasFactory;
    protected $table = 'buses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'bus_name',
        'bus_code',
        'type',
        'operator_id',
        'total_seats',
        'status',
        'user_id',
        'driver_id',
        'status'
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
