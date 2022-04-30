<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cartilla
 *
 * @property $id
 * @property $animales_id
 * @property $nombre
 * @property $nacimiento
 * @property $peso
 * @property $created_at
 * @property $updated_at
 *
 * @property Animale $animale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cartilla extends Model
{
    
    static $rules = [
		'animales_id' => 'required',
		'nombre' => 'required',
		'nacimiento' => 'required',
		'peso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animales_id','nombre','nacimiento','peso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function animale()
    {
        return $this->hasOne('App\Models\Animale', 'id', 'animales_id');
    }
    

}
