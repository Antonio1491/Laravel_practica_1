<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    //Relación uno a muchos

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    
}
