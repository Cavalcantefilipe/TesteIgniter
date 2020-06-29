<?php

class Clientes_model extends CI_Model
{

    public function __construct()
    {
            $this->load->database();
    }

    public function obter_clientes(){
        return $this->db->get('clientes')->result_array();
	}
	public function email_ja_cadastrado($email){
		$cliente =  $this->db->get_where('clientes',array('email' =>$email))->result_array();
		if($cliente){
			return true;
		}
		return false;
	}

    public function cadastrar($dados){
        $res = $this->db->insert('clientes', $dados);
        return $this->db->insert_id();
    }

}
