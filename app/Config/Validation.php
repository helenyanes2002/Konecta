<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $formularioProductos=[
        'nombre_producto'=>'required',
        'referencia_producto'=>'required',
        'precio_producto'=>'required',
        'peso_producto'=>'required',
        'categoria_producto'=>'required',
        'stock_producto'=>'required',
        'fechaCreacion_producto'=>'required',
     

    ];
    public $formularioEdicion=[
        'nombre_producto'=>'required',
        'referencia_producto'=>'required',
        'precio_producto'=>'required',
        'peso_producto'=>'required',
        'categoria_producto'=>'required',
        'stock_producto'=>'required',
        'fechaCreacion_producto'=>'required',
       
    ];

    public $formularioVentas=[
        'id_producto'=>'required',
        'cantidad_producto'=>'required',
    ];

   
    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
