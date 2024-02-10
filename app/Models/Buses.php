<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    use HasFactory;
    protected $table = 'buses';

    protected $fillable = [
        'bus_number',
        'bus_plate_number',
        'bus_type',
        'total_seats',
        'bus_id',
        'driver_id',
        'status',

    ];
    protected $primarykey = 'bus_id';

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function driver()
    {
        return $this->belongsTo(driver::class, 'driver_id');
    }

}
