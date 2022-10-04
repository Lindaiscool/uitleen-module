<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boeken extends Model
{
    protected $table = 'boeken';
    use HasFactory;
    protected $fillable = [

        'serienummer',
        'isbn',
        'titel'
    ]; 
}
