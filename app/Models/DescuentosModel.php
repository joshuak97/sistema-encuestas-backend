<?php

namespace App\Models;

use CodeIgniter\Model;

class DescuentosModel extends Model
{
    protected $table = 'descuentos';
    protected $primaryKey = 'id_descuento';
    protected $allowedFields = ['nombre_descuento','porcentaje_descuento','efectivo_descuento','ciclos_facturacion','numero_ciclos_facturacion','id_gym'];
}