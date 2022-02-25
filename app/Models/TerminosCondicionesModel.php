<?php

namespace App\Models;

use CodeIgniter\Model;

class TerminosCondicionesModel extends Model
{
    protected $table = 'terminos_condiciones';
    protected $primaryKey = 'id_terminos_condiciones';
    protected $allowedFields = ['descripcion','estatus','id_gym'];
}