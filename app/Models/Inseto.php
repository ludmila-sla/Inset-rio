<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inseto extends Model
{
    use HasFactory;
    protected $fillable = [
        'cultura_id',
        'nome',
        'nomecientifico',
        'autor',
        'image'
        
    ];
}
