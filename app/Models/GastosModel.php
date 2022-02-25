<?php

namespace App\Models;

use CodeIgniter\Model;

class GastosModel extends Model
{
    protected $table = 'gastos';
    protected $primaryKey = 'id_gasto';
    protected $allowedFields = ['fecha_gasto','numero_factura','id_proveedor','id_impuesto','total_gasto','estado','id_gym',
    'descripcion_gasto'];
}