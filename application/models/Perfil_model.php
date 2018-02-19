<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model {


	public function alterarSenha($dados){
		if($this->session->userdata("id") > 0){				
			$this->db->where('id', $dados['id']);
			$senha['senha'] = $dados['senha'];
            $this->db->update('usuarios', $senha);
            return 1;
		}
	}

	public function setUsuario($dados){
		return $this->db->insert('usuarios',$dados);
	}

	public function validarUsuario($senha){
		
		$this->db->where('id',$this->session->userdata("id"));
		$this->db->where('senha',$senha);
		$query = $this->db->get('usuarios');
		$vl = $query->result();		
		if($query->num_rows() == 1){
			return $vl;
		}else {
			return null;
		}
	}

	public function getUsuario($login,$senha){
		$this->db->where('email',$login);
		$this->db->where('senha',$senha);
		$query = $this->db->get('usuarios');
		$vl = $query->result();		
		if($query->num_rows() == 1){
			return $vl[0]->id;
		}else {
			return 0;
		}
	}


}