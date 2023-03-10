<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public $timestamps=false;

    use HasFactory;

    protected $fillable = [
        'name',
        'writer',
        'date',
        'genre',
    ];
    
}
