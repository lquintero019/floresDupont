<?php
    class Sellers_model extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getSellers(){
            return $this->db->get('fd_sellers')->result();
        }
        
        function addSeller($seller){
            return $this->db->insert('fd_sellers',$seller);
        }
        
        function getSelectedSeller($id){
            return $this->db->where('id',$id)->get('fd_sellers')->row();
        }
        
        function updateSeller($seller,$id){
            return $this->db->where('id',$id)->update('fd_sellers',$seller);
        }
        
        function deleteSeller($id){
            return $this->db->delete('fd_sellers',array('id'=>$id));
        }
    }
?>