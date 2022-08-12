<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "languages";
    //la clave primaria de dicha tabla
    protected $primaryKey="language_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion M:M Con paises(Country)
    public function paises(){
        //be
        return $this->belongsToMany(Country::class,'country_languages', 'language_id', 'country_id')->withPivot('official');
    }
}
