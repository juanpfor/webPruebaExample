<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;

    protected $table = "convenios";

    protected $primaryKey = "id_convenios";

    public function colegio()
    {
        return $this->hasMany(Colegio::class,"id_convenio","id_convenios");
    }

}
