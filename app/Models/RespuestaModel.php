<?php

namespace App\Models;

use CodeIgniter\Model;

class RespuestaModel extends Model
{
    protected $table = 'respuestas';
    protected $primaryKey = 'id_respuesta';
    protected $allowedFields = ['respuesta','fecha_registro','ultima_modificacion','id_pregunta'];
}