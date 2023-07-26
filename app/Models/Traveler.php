<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;

    protected $table = "travelers";

    protected $fillable = [
        'firstName', 'lastName','travelerNum', 'arrival_date', 'release_date', 'address', 'sex', 'age', 'date_of_birth', 'contactNo'
    ];


    public function monitor(){
        return $this->hasMany(Monitoring::class);
    }


}
