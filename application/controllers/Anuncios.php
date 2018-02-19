<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios extends CI_Controller {



	public function index(){	
	if(!isset($_GET['pagina'])){
			$_GET['pagina'] = 1;
		}	
		$this->load->model('Anuncios_model','anuncio');
		$arraylist['dados'] = $this->anuncio->listarTodos();
		$arraylist['mais'] = $this->maisPesquisados();
		
		$pagina_atual = $_GET['pagina'];


		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		$arraylist['pagina'] = 	$pagina ;
		$qnt_result_pg = 6;
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;	
		$arraylist['paginacao'] = 	$this->anuncio->paginacao($inicio, $qnt_result_pg);	

		$total=0;
		foreach ($arraylist['dados'] as $k) {
			$total++;
		}
		$quantidade_pg = ceil($total / $qnt_result_pg);
		$arraylist['quantidade_pg'] = $quantidade_pg;
		$this->load->view('home.php',$arraylist);
	}




	public function anunciar(){		
		$use = $this->session->userdata("id");
		if (!empty($use)){
			$this->load->view('anunciar.php');
		}else{
			header('Location: /rep/Erros');
		}
		 
	}

	public function editarAnuncio($idAnuncio){
		$use = $this->session->userdata("id");
		if (!empty($use)){
		$this->load->model('Anuncios_model','anuncio');
		if ($this->anuncio->editarAnuncio($idAnuncio) != 0){
			$arraylist['result'] = $this->anuncio->editarAnuncio($idAnuncio);
			$this->load->view('anunciar.php',$arraylist);
		}else{
			header('location: /rep/Anuncios/erro'); 
		}
		}else{
			header('location: /rep/Erros');
		}
	}

	public function erro(){
		$this->load->view('erro.php');
	}

	public function salvarAnuncio(){
		$this->load->model('Anuncios_model','anuncio');
		$dados['id']=$this->input->post('id');	    
        $dados['usuario']= $this->session->userdata("id");
        $dados['email']=$this->input->post('email');
        $dados['titulo']=$this->input->post('titulo');
        $dados['valor']=$this->input->post('valor');
        $dados['descricao']=$this->input->post('descricao');
        $dados['numero']=$this->input->post('numero');
        $dados['cep']=$this->input->post('cep');
        $dados['rua']=$this->input->post('rua');
        $dados['bairro']=$this->input->post('bairro');
        $dados['complemento']=$this->input->post('complemento');
        $dados['telefone']=$this->input->post('telefone');
        $dados['nome']=$this->input->post('nome');
        $dados['nome_imagem']= $_FILES['arquivo']['name'];
        date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d H:i');		
        $dados['dataAnuncio']= $date;
        include_once('../rep/application/models/Upload.php');
        if ($this->anuncio->salvar($dados) == 1 || $this->anuncio->salvar($dados) == 2 ){
        	header('location: /rep/Anuncios/meusanuncios');        	
        }else{
        	header('location: /rep/Anuncios/erro');
        }
	}

	public function apagar($idAnuncio){
		$use = $this->session->userdata("id");
		if (!empty($use)){
			$this->load->model('Anuncios_model','anuncio');
			$this->anuncio->apagar($idAnuncio);
			header('location: /rep/Anuncios/meusanuncios');
		}else
			header('location: /rep/Erros');
		
		 
	}

	public function maisPesquisados(){
		$this->load->model('Anuncios_model','anuncio');
		$pesq['mais'] = $this->anuncio->maisPesquisados();
		return $pesq;
	}

	public function buscar(){
		$this->load->model('Anuncios_model','anuncio');
		$arraylist['dados'] = $this->anuncio->listarTodos();
		$arraylist['mais'] = $this->maisPesquisados();				
		$this->load->view('buscar.php',$arraylist);
	}

	public function buscarAnuncios(){
		$palavra = "{$_POST['palavra']}";	
		$this->load->model('Anuncios_model','anuncio');
		$arraylist['dados'] = $this->anuncio->buscaPalavra($palavra);		
		$this->load->view('teste.php',$arraylist);
	}

	public function meusanuncios(){
		$use = $this->session->userdata("id");
		if (!empty($use)){
		$this->load->model('Anuncios_model','anuncios');
		$arraylist['dados'] = $this->anuncios->getMeusAnuncios($this->session->userdata("id"));
		$this->load->view('meusanuncios.php',$arraylist);
		}else{
			header('location: /rep/Erros');
		}
	}

	public function visualizar($idAnuncio){
		$this->load->model('Anuncios_model','anuncios');
		$arraylist['dados'] = $this->anuncios->editarAnuncio($idAnuncio);
		$this->anuncios->setClicks($idAnuncio);
		$this->load->view('visualizar.php',$arraylist);
	}
		


}
