<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaciones extends Model
{
    protected $table="asignaciones";
    protected $primaryKey="id";
    protected $fillable = [
        'cantidad','id_tecnicos','id_epps'
    ];
}
