<?php

namespace App\Models;

use CodeIgniter\Model;

class ImpuestosModel extends Model
{
    protected $table = 'impuestos';
    protected $primaryKey = 'id_impuesto';
    protected $allowedFields = ['nombre_impuesto','porcentaje','id_gym'];
}