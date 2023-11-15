<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'pokemon',
        'region',
        'tid1',
        'tid2',
        'height',
        'weight',
        'gender',
        'ability',
        'created_at',
        'updated_at	'
    ];
    protected $table = 'pokemons';

    use HasFactory;
}
