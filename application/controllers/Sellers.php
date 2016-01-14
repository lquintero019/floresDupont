<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellers extends CI_Controller {
   function __construct(){
   	  parent::__construct();
   }
    
    public function getSellers(){
        $array = $this->sellers_model->getSellers();
        echo json_encode($array);
    }
    
    public function addSeller(){
        $array = json_decode(file_get_contents('php://input'));
        $this->sellers_model->addSeller($array);
        echo json_encode(array("status"=>1,"message"=>"Vendedor agregado exitosamente!"));
    }
    
    public function updateSeller(){
        $array = (array) json_decode(file_get_contents('php://input'));
        $id = $array["id"];
        unset($array["id"]);
        $this->sellers_model->updateSeller($array,$id);
        echo json_encode(array("status"=>1,"message"=>"Vendedor actualizado exitosamente!"));
    }
    
    public function getSelectedSeller(){
        $id = json_decode(file_get_contents('php://input'));
        $seller = $this->sellers_model->getSelectedSeller($id);
        echo json_encode($seller);
    }
    
    public function deleteSeller(){
        $id = json_decode(file_get_contents('php://input'));
        $seller = $this->sellers_model->deleteSeller($id);
        echo json_encode(array("status"=>1,"message"=>"El vendedor ha sido eliminado exitosamente!"));
    }
}
