<?php
class Demande_Model extends CI_Model{
	

public function ajouter_demande($data){
	
	$this->db->insert("test", $data);
	return;
}
}

?>