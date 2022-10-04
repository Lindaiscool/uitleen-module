<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arduino extends Model
{
    protected $table = 'arduino';
    use HasFactory;
    protected $fillable = [

        'serienummer',
        'type',
        'defect'
    ]; 
}

