<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animale
 *
 * @property $id
 * @property $especie
 * @property $created_at
 * @property $updated_at
 *
 * @property Cartilla[] $cartillas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animale extends Model
{
    
    static $rules = [
		'especie' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['especie'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartillas()
    {
        return $this->hasMany('App\Models\Cartilla', 'animales_id', 'id');
    }
    

}
