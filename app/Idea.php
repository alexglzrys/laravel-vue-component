<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    // Especificar campos a rellenar de forma masiva mediante Modelo::create([...])
    protected $fillable = ['description'];
}
