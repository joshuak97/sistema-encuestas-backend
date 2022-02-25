<?php

namespace App\Models;

use CodeIgniter\Model;

class SalasModel extends Model
{
    protected $table = 'salas';
    protected $primaryKey = 'id_sala';
    protected $allowedFields = ['nombre_sala','id_gym'];
}