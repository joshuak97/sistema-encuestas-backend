<?php

namespace App\Models;

use CodeIgniter\Model;

class MetodosPagoModel extends Model
{
    protected $table = 'metodos_pago';
    protected $primaryKey = 'id_metodo_pago';
    protected $allowedFields = ['nombre_metodo_pago'];
}