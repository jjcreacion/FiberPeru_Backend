<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table="tecnicos";
    protected $primaryKey="id";
    protected $fillable = [
        'nombre','apellido','tipo_documento','num_documento','telefono','email','direccion','img1','img2','created_at','update_at'
    ];
}
