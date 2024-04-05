<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;

class Residente extends Model
{
    use HasFactory;

    protected $table = 'residentes';
    protected $fillable = [
        'nombre',
        'movil',
        'propietario',
        'nombre_propietario',
        'movil_propietario',
        'email_propietario',
        'estado',];
    
        public function vivienda()
        {
            return $this->belongsTo(Vivienda::class);
        }
    }