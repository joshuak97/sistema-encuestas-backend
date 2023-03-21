<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['codigo_interno','descripcion','codigo_barras',
        'usuario_captura','fecha_registro','usuario_modifica','ultima_modificacion'];

    public function obtenerProductosLimit100() {
        return $this->findAll(100);
    }
}
