<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName', 'lastName', 'address', 'sex', 'age', 'residency_year', 'date_of_birth', 'contactNo'
    ];
}
