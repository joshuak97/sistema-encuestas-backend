<?php

namespace App\Models;

use CodeIgniter\Model;

class PreguntaModel extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id_pregunta';
    protected $allowedFields = ['pregunta','limite_respuestas','usuario_captura','fecha_registro',
                                'ultima_modificacion','id_tipo_pregunta','id_cuestionario'];
                                
}