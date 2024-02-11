<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'drivers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'gender',
        'license_number',
        'contact_number',
        'user_id',
        'status',
    ];
    

}
