<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfiguracionesModel extends Model
{
    protected $table = 'configuraciones';
    protected $primaryKey = 'id_configuracion';
    protected $allowedFields = ['id_unidad_medida','id_gym'];
}