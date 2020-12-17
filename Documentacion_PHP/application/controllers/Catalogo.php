<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {
    
    protected $datos=array(
        "titulo"=>"Mi sitio"
    );
	
	public function index()
	{
		// $this->listado(); //modo apantallado
        
        
        
        redirect("catalogo/listado");
	}
    
    public function listado(){
        $this->load->model("productos_model");
        
        
        $direccion = $this->uri->uri_to_assoc();
        if(isset($direccion["campo"]) and isset($direccion["sentido"])){
            $this->productos_model->set_orden($direccion["campo"],$direccion["sentido"]);
        }
        
        
        $this->datos["productos"]=$this->productos_model->listar();
        
        $this->load->view("portada",$this->datos);  //cargar una vista con el loader
    }
    
    public function test(){
    
        
        $this->load->model("productos_model");
        
        if($this->productos_model->borrar(4)){
            echo "OK";
        }else{
            echo "NO";
        }
    }
}
