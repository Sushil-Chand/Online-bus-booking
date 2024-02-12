<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $table = 'operators';
    protected $primaryKey = 'id';

    protected $fillable = [
        'operator_name',
        'operator_email',
        'operator_phone',
        'operator_address',
        'operator_logo',
        'status',
    ];
}
