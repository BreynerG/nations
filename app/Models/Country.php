<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //la clave primaria de dicha tabla
    protected $primaryKey="country_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion inversa M:1 paises y region
    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }

    //relacion de M:M entre pais y idioma
    public function idiomas(){
        return $this->belongsToMany(Idioma::class, 'country_languages', 'country_id', 'language_id')->withPivot('official');
    }
}
