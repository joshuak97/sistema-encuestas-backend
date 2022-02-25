<?php

namespace App\Models;

use CodeIgniter\Model;

class UnidadesMedidaModel extends Model
{
    protected $table = 'unidades_medida';
    protected $primaryKey = 'id_unidad_medida';
    protected $allowedFields = ['descripcion_unidad_medida'];
}