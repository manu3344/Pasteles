<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'empleado');
    }
}
