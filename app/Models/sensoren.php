<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensoren extends Model
{
    protected $table = 'sensoren';
    use HasFactory;
    protected $fillable = [

        'serienummer',
        'soort',
        'defect'
    ]; 
}
