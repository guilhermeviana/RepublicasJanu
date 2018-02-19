  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
          <link rel="apple-touch-icon" sizes="57x57" href="/rep/assets/img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de Republicas">
    <meta name="author" content="Guilherme">
    <title>Home - Republicas Janu</title>      
    <link href="/rep/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">   
    <link href="/rep/assets/css/modern-business.css" rel="stylesheet">
   <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="/rep/assets/js/busca.js"></script>



  </head>

  <body onLoad="aumenta()">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand glyphicon glyphicon-search" href="/rep/">Republicas Janu</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/rep/">Home </a>
            </li> 
            
            <li class="nav-item">
              <a class="nav-link" href="/rep/Anuncios/buscar">Buscar</a>
            </li> 
                        
            <li class="nav-item">
              <a class="nav-link" href="/rep/Anuncios/meusanuncios"><?php if ($this->session->userdata("id") != 0 && $this->session->userdata("id") != null) echo "Meus Anuncios"; else echo ""; ?></a>
            </li>
          
             <li class="nav-item">
              <a class="nav-link" href="<?php if ($this->session->userdata("id") != 0 && $this->session->userdata("id") != null) echo '/rep/Anuncios/anunciar'; else echo '/rep/Perfil/login';   ?>">Anunciar </a>
            </li> 
          <?php if ($this->session->userdata("id") != 0 && $this->session->userdata("id") != null) echo'
                  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Perfil
              </a>'; else echo  '<a class="nav-link" href="/rep/Perfil/login">
                Entrar
              </a>';?>
              <?php if ($this->session->userdata("id") != 0 && $this->session->userdata("id") != null) echo'
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="/rep/Perfil/">Alterar Senha</a>
                <a class="dropdown-item" href="/rep/Perfil/sair">Sair</a>                
              </div>';?>
            </li>
          </ul>
        </div>
      </div>
    </nav>