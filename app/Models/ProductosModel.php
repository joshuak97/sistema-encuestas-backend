<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre_producto','precio_venta','precio_compra','id_impuesto','sku','cantidad','id_gym'];
}