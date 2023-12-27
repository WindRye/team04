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
        'updated_at	'
    ];
    protected $table = 'pokemons';
public function type()
{
    return $this->belongsTo('APP\Models\Type','tid','id');
}
    use HasFactory;
    public function type1()
    {
        return $this->belongsTo('App\Models\Type', 'tid1', 'id');
    }
    public function type2()
    {
        return $this->belongsTo('App\Models\Type', 'tid2', 'id');
    }
    
    public function scopeheight($query)
    {
        return $query->where('height', '>', 100)->orderBy('height', 'asc');
    }

    public function scopeAllRegions($query)
    { 
        return $query->select('region')->groupBy('region');
    }

    public function scopeRegion($query, $reg)
    {
        return $query->where('region', '=', $reg);
    }    
}
