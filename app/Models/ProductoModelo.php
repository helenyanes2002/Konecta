<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModelo extends Model {

    protected $table='productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre_producto','referencia_producto','precio_producto','peso_producto','categoria_producto','stock_producto', 'fechaCreacion_producto', 'cantidad_producto'];
}