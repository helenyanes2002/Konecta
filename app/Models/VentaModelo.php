<?php

namespace App\Models;

use CodeIgniter\Model;

class VentaModelo extends Model {

    protected $table='ventas';
    protected $primaryKey = 'id_venta';
    protected $allowedFields = ['id_producto','cantidad_producto'];
}