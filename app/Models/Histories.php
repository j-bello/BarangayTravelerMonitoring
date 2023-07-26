<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName', 'lastName', 'day_one','day_two','day_three','day_four','day_five','day_six','day_seven','day_eight','day_nine','day_ten','day_eleven','day_twelve','day_thirteen','day_fourteen','status','result'
    ];
}
