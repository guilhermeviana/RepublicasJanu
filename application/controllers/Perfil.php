<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {




	public function index(){
		if (!empty($this->session->userdata("id"))){
			$dados['info'] = "";		
			$this->load->view('alterarsenha.php',$dados);
		}else{
			$this->load->view('login.php');
		}
	}
	

	//analisar com mais calma 
	public function alterarSenha(){	
		// $this->session->userdata("id");		
		$this->load->model('Perfil_model', 'perfil');
		$senhaAtual = $this->input->post("senhaAtual");	
		$senha1 = $this->input->post("senha1");
		$senha2 = $this->input->post("senha2");

		if ($senha1 == $senha2){

		$usuarioBanco = $this->perfil->validarUsuario($senhaAtual);
		if ($usuarioBanco == 0){
			$dados['info'] = "Erro ao atualizar senha !";
			$this->load->view('alterarsenha.php', $dados);
		}elseif ($usuarioBanco[0]->id != null){
			$usuario['senha'] = $senha1;
			$usuario['id'] = $this->session->userdata("id");
			if ($this->perfil->alterarSenha($usuario) == 1){
				$dados['info'] = "Senha alterada com sucesso !";
				$this->load->view('alterarsenha.php', $dados);
			}	
		}else{
			$dados['info'] = "Erro ao atualizar senha !";
			$this->load->view('alterarsenha.php', $dados);
		}	
		}
		else{
			$dados['info'] = "As senhas nao conferem !";
			$this->load->view('alterarsenha.php', $dados);
		}
	}



public function sair(){
	$this->session->sess_destroy();
	$this->load->view('login.php');
}

public function login(){
	$this->load->view('login.php');
}

public function cadastre(){
	$this->load->view('cadastro.php');
}

public function cadastrarse(){
	$login = $this->input->post("login");
	$senha = $this->input->post("senha");
	$senha2 = $this->input->post("senha2");

	if($senha == $senha2){
		$nome = $this->input->post("nome");
		$this->load->model('Perfil_model','lg');
		$dados['email'] = $login ;
		$dados['senha'] = $senha ;
		$dados['nome'] = $nome;
		$isOK = $this->lg->setUsuario($dados);
		if ($isOK == 1){
			$this->load->view('login.php');
		}else{
			$msg['msg'] = "Ouve um erro ao realizar o cadastro !";
			$this->load->view('cadastro.php',$msg);
		}
	}else{
		$msg['msg'] = "As senhas não conferem !";
		$this->load->view('cadastro.php',$msg);
	}
}

public function fazerLogin(){		
	$login = $this->input->post("login");
	$senha = $this->input->post("senha");
	$this->load->model('Perfil_model','lg');
	$queryid = $this->lg->getUsuario($login,$senha);
	if($queryid > 0){
		$this->session->set_userdata("id", $queryid);						
		header('Location:/rep/');;
	}else{			
		$msg['msg'] = "E-mail ou senha incorreto !";
		$this->load->view('login.php',$msg);
	}
}	
}
