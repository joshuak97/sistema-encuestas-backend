<?php

namespace App\Models;

use CodeIgniter\Model;

class CuestionarioModel extends Model
{
    protected $table = 'cuestionarios';
    protected $primaryKey = 'id_cuestionario';
    protected $allowedFields = ['nombre_cuestionario','expiracion','usuario_captura','fecha_registro','ultima_modificacion'];
}