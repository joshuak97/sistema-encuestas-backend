<?php

namespace App\Models;

use CodeIgniter\Model;

class CuotasModel extends Model
{
    protected $table = 'cuotas';
    protected $primaryKey = 'id_cuota';
    protected $allowedFields = ['nombre_cuota','precio','periodo_facturacion','id_impuesto','descripcion','id_gym'];
}