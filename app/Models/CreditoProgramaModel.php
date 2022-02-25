<?php

namespace App\Models;

use CodeIgniter\Model;

class CreditoProgramaModel extends Model
{
    protected $table = 'credito_programa';
    protected $primaryKey = 'id_credito_programa';
    protected $allowedFields = ['id_credito','id_programa'];
}