<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitleen extends Model
{
    protected $table = 'uitleen';
    use HasFactory;
    protected $fillable = [

        'student',
        'datum',
        'boeken',
        'arduinos',
        'sensoren'
    ]; 
}
