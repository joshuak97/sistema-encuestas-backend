<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidosModel extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $allowedFields = ['fecha_pedido','id_usuario','id_metodo_pago','total_compra','total_venta',
    'total_pedido','id_gym'];
}