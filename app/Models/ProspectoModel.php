<?php

namespace App\Models;

use CodeIgniter\Model;

class ProspectoModel extends Model
{
    protected $table = 'prospectos';
    protected $primaryKey = 'id_prospecto';
    protected $allowedFields = ['nombre_completo','correo_electronico','telefono','direccion',
                                'codigo_acceso','usuario_captura','fecha_registro','ultima_modificacion'];
}