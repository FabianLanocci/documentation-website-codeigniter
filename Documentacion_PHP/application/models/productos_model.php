<?php
class productos_model extends CI_Model{
    
    protected $orden_campo="nombre";
    protected $orden_sentido="ASC";
    
    public function set_orden($campo,$setido){
        
        if(in_array($campo,array("nombre","precio"))){
            $this->orden_campo=$campo;
        }else{
            $this->orden_campo="nombre";
        }
        
        if(in_array($setido,array("DESC","ASC"))){
            $this->orden_sentido=$setido;
        }else{
            $this->orden_sentido="ASC";
        }
        
    }
    
    public function listar(){
        $this->db->order_by($this->orden_campo,$this->orden_sentido);
        
        $recordset=$this->db->get("productos");
        
        // echo $this->db->last_query();
        return $recordset->result_array();
        
    }
    
    public function alta($datos=array()){
        /*
        nombre
        precio
        imagen
        */
        $this->db->insert("productos",$datos);
        
        return $this->db->insert_id();
    }
    
    public function borrar($producto_id=null){
        $this->db->where("producto_id",$producto_id);
        $this->db->delete("productos");
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}