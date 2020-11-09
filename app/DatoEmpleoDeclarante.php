<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DatoEmpleoDeclarante extends Model
{
    protected $table = 'dato_empleo_declarantes';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function nivel_gobierno(){
        return $this->belongsTo(Nivelordengobierno::class);
    }

    public function ambito_publico(){
        return $this->belongsTo(ambitoPublico::class);
    }
}
