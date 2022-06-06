<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteVenta extends Model
{
    use HasFactory;
    protected $table = 'reporte_ventas';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    protected $fillable = [
        'codigo',
        'categoria',
        'producto',
        'cantidad',
        'fecha_venta',
        'total_venta',
    ];

}
