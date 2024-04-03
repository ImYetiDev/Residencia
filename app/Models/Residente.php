<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;

    protected $table = 'residentes';
    protected $fillable = [
        'nombre',
        'movil',
        'vivienda id',
        'Propietario',
        'nombre propietario',
        'movil propietario',
        'email propietario',
        'estado',];
    
}
