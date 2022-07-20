<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;

    protected $table = 'colegios';

    protected $primaryKey = 'id_colegios';

    //relaciones

    public function convenio()
    {
        return $this->belongsTo(Convenio::class,"id_convenio","id_convenios");
    }
        //relacion colegio secretaria
    public function secretaria()
    {
        return $this->belongsTo(Secretaria::class,"id_secretaria","id_secretarias");
    }

}
