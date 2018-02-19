<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios_model extends CI_Model {

	public function listarTodos (){
		$list = $this->db->get('anuncios');
		return $list->result();
	}

	public function maisPesquisados(){
		$query = $this->db->query("SELECT * FROM anuncios order by clicks desc");		
		return $query->result();
	}

	public function buscaPalavra($palavra){
		$query = $this->db->query("SELECT * FROM anuncios WHERE titulo like '%$palavra%' ");
		return $query->result();
	}

	public function paginacao($qte,$qnt_result_pg){		
		$query = $this->db->query("SELECT * FROM anuncios LIMIT $qte,$qnt_result_pg");
		return $query->result();
	}

	public function getMeusAnuncios($idUsuario){
		$arraylist= $this->db->where('usuario',$idUsuario);
		$arraylist= $this->db->get('anuncios');
		return $arraylist->result();
	}

	public function editarAnuncio($idAnuncio){
		$this->db->where('id',$idAnuncio);
        $query = $this->db->get('anuncios'); 
        $query = $query->result();
       	//echo $query[0]->usuario;
       // if ($query[0]->usuario == $this->session->userdata("id"))        
 			return $query;
 		//else return 0;

	}


	public function apagar($idAnuncio){
		$this->db->where('id', $idAnuncio);
        return $this->db->delete('anuncios');	
	}

	public function salvar($dados){

		if($this->session->userdata("id") <=0){
			return 3;
		}else if($dados['id'] <=0){			
				$this->db->insert('anuncios',$dados);
	            return 1;
			}else {			
				$this->db->where('id', $dados['id']);
	            $this->db->replace('anuncios', $dados);
	            return 2;
			}
		}
	
	

	

	public function setClicks ($idAnuncio){
		$this->db->where('id', $idAnuncio);
		$dados = $this->db->get('anuncios');
		$dados = $dados->result();		
		$dados[0]->clicks++;				
		$this->db->replace('anuncios',$dados[0]);
	}

	

}