<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epps extends Model
{
    protected $table="epps";
    protected $primaryKey="id";
    protected $fillable = [
        'nombre','cantidad'
    ];
}
