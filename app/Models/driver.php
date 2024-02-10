<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $table = 'driver'; // Specify the table name if it's different from the plural of the model name
    protected $primaryKey = 'driver_id'; // Specify the primary key name if it's different from 'id'
    protected $fillable = ['name', 'gender', 'contact', 'bus_id']; // Specify the fillable columns

    public function Buses()
    {
        return $this->belongsTo(Buses::class, 'bus_id');
    }
}
