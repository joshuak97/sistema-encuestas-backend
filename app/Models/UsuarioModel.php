<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['usuario','password','correo_electronico','nombre_completo','fecha_captura',
                                'ultima_modificacion','id_acceso
                                '];
}