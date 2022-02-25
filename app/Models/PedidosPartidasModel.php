<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidosPartidasModel extends Model
{
    protected $table = 'pedidos_partidas';
    protected $primaryKey = 'id_pedido_partida';
    protected $allowedFields = ['id_producto','id_pedido','precio_compra','precio_venta','descuento'];
}