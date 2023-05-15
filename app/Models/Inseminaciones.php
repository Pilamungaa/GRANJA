<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inseminaciones extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['codigo_hembra','raza_hembra','codigo_macho','raza_macho','fecha_inseminacion','observacion'];
}
