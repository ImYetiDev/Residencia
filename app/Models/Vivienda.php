<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;

    protected $table = 'viviendas';
    protected $fillable = [
        'nomenclatura',
        'bloque id',
        'estado',
        'telefono',];
}
