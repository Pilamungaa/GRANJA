<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porcinos extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['codigo','genero','tipo','raza','fecha_nacimiento','fecha_entrada','observacion','idestado','idcuarentena','motivo_cuarentena'];
}
