<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
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
        'updated_at	',
    ];
    protected $table = 'pokemons';

    public function type1()
    {
        return $this->belongsTo('App\Models\Type','tid1','id');
    }

    public function type2()
    {
        return $this->belongsTo('App\Models\Type','tid2','id');
    }
}
