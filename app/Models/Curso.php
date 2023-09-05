<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    
    /*
    cuando intente generar un registro por asignación masiva solo se crearan los campos del array
    Los campos que quermemos permitir que se guarden
    */
    // protected $fillable = ['name', 'descripcion', 'categoria'];

    /*
    si tenemos muchos campos en el formulario remplazamos por lo siguiente
    *colocamos los campos protegidos e ignorar los permitidos
    */
    // protected $guarded = ['status'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
