<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paquete;

class Vivienda extends Model
{
    use HasFactory;

    protected $table = 'viviendas';
    protected $fillable = [
        'nomenclatura',
        'bloque id',
        'estado',
        'telefono',];


public function paquete()
{
    return $this->belongsTo(Paquete::class);
}

}
