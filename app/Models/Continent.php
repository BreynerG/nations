<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "continents";
    //la clave primaria de dicha tabla
    protected $primaryKey="continent_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre continente y region por medio de un metodo
    public function regiones(){
        return $this->hasMany(region::class , 'continent_id');
    }
}
