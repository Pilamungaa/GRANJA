<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apariamientos extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['codigo_hembra','codigo_macho','responsable','fecha_apariamiento','fecha_parto','jaula' ,'observacion'];
}