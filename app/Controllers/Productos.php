<?php

namespace App\Controllers;


use App\Models\ProductoModelo;

class Productos extends BaseController{
    
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
       
        //se reciben los datos del formulario
        $nombre_producto=$this->request->getPost("nombre_producto");
        $referencia_producto=$this->request->getPost("referencia_producto");
        $precio_producto=$this->request->getPost("precio_producto");
        $peso_producto=$this->request->getPost("peso_producto");
        $categoria_producto=$this->request->getPost("categoria_producto");
        $stock_producto=$this->request->getPost("stock_producto");
        $fechaCreacion_producto=$this->request->getPost("fechaCreacion_producto");
      
 
        if($this->validate('formularioProductos')){
           try{
            $modelo=new ProductoModelo();
             //se crea un arreglo con los datos recibidos
            $datos=array(
                "nombre_producto"=>$nombre_producto,
                "referencia_producto"=>$referencia_producto,
                "precio_producto"=>$precio_producto,
                "peso_producto"=>$peso_producto,
                "categoria_producto"=>$categoria_producto,
                "stock_producto"=>$stock_producto,
                "fechaCreacion_producto"=>$fechaCreacion_producto,
              
            );
            $modelo->insert($datos);
            $mensaje="exito agregando el producto...";
            return redirect()->to(site_url('/registro/productos'))->with('mensaje',$mensaje);

           }catch(\Exception $error){
               $mensaje=$error->getMessage();
               return redirect()->to(site_url('/registro/productos'))->with('mensaje',$mensaje);
               
           }
        }else{
            $mensaje="Revise por favor hay datos obligatorios";
            return redirect()->to(site_url('/registro/productos'))->with('mensaje',$mensaje);
        }
    }

    public function buscar(){
        try{
            $modelo=new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos=array("productos"=>$resultado);
            return view('listaProductos',$productos);

           }catch(\Exception $error){
               $mensaje=$error->getMessage();
               return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);  
           }
    }

    public function eliminar($id){
       try{
        $modelo=new ProductoModelo();
        $modelo->where('id_producto',$id)->delete();
        $mensaje="Exito eliminando el producto...";
        return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);

       }catch(\Exception $error){
        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);
        }
    }

    public function editar($id){
        $nombre_producto=$this->request->getPost("nombre_producto");
        $referencia_producto=$this->request->getPost("referencia_producto");
        $precio_producto=$this->request->getPost("precio_producto");
        $peso_producto=$this->request->getPost("peso_producto");
        $categoria_producto=$this->request->getPost("categoria_producto");
        $stock_producto=$this->request->getPost("stock_producto");
        $fechaCreacion_producto=$this->request->getPost("fechaCreacion_producto");
        
        if($this->validate('formularioEdicion')){
            try{
             $modelo=new ProductoModelo();
             $datos=array(
                "nombre_producto"=>$nombre_producto,
                "referencia_producto"=>$referencia_producto,
                "precio_producto"=>$precio_producto,
                "peso_producto"=>$peso_producto,
                "categoria_producto"=>$categoria_producto,
                "stock_producto"=>$stock_producto,
                "fechaCreacion_producto"=>$fechaCreacion_producto,             
             );
             $modelo->update($id,$datos);
             $mensaje="Exito editando el producto...";
             return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);
 
            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);
            }
        }else{
             $mensaje="Revise por favor hay datos obligatorios";
             return redirect()->to(site_url('/producto/buscar'))->with('mensaje',$mensaje);
 
         }
    }
}
