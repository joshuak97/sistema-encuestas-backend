<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultadoModel extends Model
{
    protected $table = 'resultados';
    protected $primaryKey = 'id_resultado';
    protected $allowedFields = ['id_prospecto','id_pregunta','id_respuesta','completado','fecha_registro','ultima_modificacion'];
}