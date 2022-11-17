<?php

namespace App\Controllers;

use App\Models\ProductoModelo;
use App\Models\VentaModelo;

class Ventas extends BaseController{
    
    public function index(){
        return view('ventaProductos');
    }

    public function registrarVenta(){
        $id_producto=$this->request->getPost("id_producto");
        $cantidad_producto=$this->request->getPost("cantidad_producto");

        if($this->validate('formularioVentas')){
           try{
            $modelo_producto = new ProductoModelo(); 
            $modelo_venta=new VentaModelo();
            
            $datos=array(
                "id_producto"=>$id_producto,
                "cantidad_producto"=>$cantidad_producto,
            );
            $modelo_venta->insert($datos);
            $mensaje="La cantidad del producto ".$id_producto." ha sido restada en bodega";

            return redirect()->to(site_url('/venta/producto'))->with('mensaje',$mensaje);

           }catch(\Exception $error){
               $mensaje=$error->getMessage();
               return redirect()->to(site_url('/venta/producto'))->with('mensaje',$mensaje);
           }
        }else{
            $mensaje="Revise por favor hay datos obligatorios";
            return redirect()->to(site_url('/venta/producto'))->with('mensaje',$mensaje);
        }
    }
}





