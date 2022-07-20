<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $table = "secretarias";

    protected $primaryKey = "id_secretarias";


    public function colegio()
    {
        return $this->hasMany(Colegio::class,"id_secretaria","id_secretarias");
    }
}
