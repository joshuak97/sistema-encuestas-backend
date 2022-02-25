<?php

namespace App\Models;

use CodeIgniter\Model;

class CreditoModel extends Model
{
    protected $table = 'credito';
    protected $primaryKey = 'id_credito';
    protected $allowedFields = ['periodo','restringir_uso_creditos','hora_inicio_restringir','hora_fin_restringir','id_cuota'];
                                
}