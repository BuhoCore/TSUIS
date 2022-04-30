<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consejo
 *
 * @property $id
 * @property $animal
 * @property $titulo
 * @property $consejo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consejo extends Model
{
    
    static $rules = [
		'animal' => 'required',
		'titulo' => 'required',
		'consejo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal','titulo','consejo'];



}
