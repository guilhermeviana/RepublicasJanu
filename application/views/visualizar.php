<!DOCTYPE html> 
<title><?php 
    echo $dados[0]->titulo;
    ?></title>
<?php include_once('pags/menu.php');?>
<div class="container" >
  <ol class="breadcrumb" style="margin-top: 2%; margin-bottom: 2%;">
    <li class="breadcrumb-item">
      <a href="/rep/">Home</a>
    </li>
    <li class="breadcrumb-item active">Visualizar</li>
  </ol>
  <header>
    <h4 align="center" "><?php 
    echo $dados[0]->titulo;
    ?></h4>
    <p align="center" style="font-size: 12px;">Inserido em: <?php $ver = date_format( new DateTime($dados[0]->dataAnuncio), 'd/m/Y' ); echo $ver;?> às <?php $ver = date_format( new DateTime($dados[0]->dataAnuncio), 'H:i' ); echo $ver?> </p>
    <div >
        <a >
          <img class="img-fluid" style="height: 700px; width: 100%; " src="/rep/assets/foto/<?php echo $dados[0]->nome_imagem; ?>" alt="img" >
        </a>
      </div>

  </header>
  <h5 style="margin-bottom: 2%; margin-top: 5%; border-radius: 2px"><span style="font-weight: normal;">Preço: </span> R$ <?php echo $dados[0]->valor;?></h5>

  <div class="col-md-7" >
   <p style="margin-left: -2%"> <?php echo $dados[0]->descricao ?></p>     
 </div>
 <div class="col-md-7" >
   <hr style="margin-left: -2%; margin-top: 5%; margin-bottom: 5%">
 </div>

 <h5 style="margin-bottom: 2%"><span style="font-weight: normal;">Detalhes do anúncio</h5>
  <div class="col-md-7">      
    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3"> Visualizações:</p>
      <p class="col-md-6"><?php echo $dados[0]->clicks ?></p>  
    </div>  
   
  </div>


  <div class="col-md-7" >
   <hr style="margin-left: -2%; margin-top: 5%; margin-bottom: 5%">
 </div>
 <h5 style="margin-bottom: 2%"><span style="font-weight: normal;">Localização</h5>
   <div class="col-md-7" >
    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3"> Rua:</p>
      <p class="col-md-6"><?php echo $dados[0]->rua ?></p>  
    </div>

    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3"> Numero:</p>
      <p class="col-md-6"><?php echo $dados[0]->numero ?></p>  
    </div>

    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3"> Bairro:</p>
      <p class="col-md-6"><?php echo $dados[0]->bairro ?></p>  
    </div>  

    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3"> CEP:</p>
      <p class="col-md-6"><?php echo $dados[0]->cep ?></p>  
    </div>  
    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3">Complemento:</p>
      <p class="col-md-6"><?php echo $dados[0]->complemento ?></p>  
    </div>



  </div>

    <div class="col-md-7" >
   <hr style="margin-left: -2%; margin-top: 5%; margin-bottom: 5% ">
 </div>
 <h5 style="margin-bottom: 2%"><span style="font-weight: normal;">Contato</h5>
   <div class="col-md-7" >
    <div class="row">      
      <p style="margin-left: -2%" class="col-md-3">Anunciante:</p>
      <p class="col-md-6"><?php echo $dados[0]->nome ?></p>  
    </div>
     <div class="row">      
      <p style="margin-left: -2%" class="col-md-3">E-mail:</p>
      <p class="col-md-6"><?php echo $dados[0]->email ?></p>  
    </div>
     <div class="row">      
      <p style="margin-left: -2%" class="col-md-3">Telefone:</p>
      <p class="col-md-6"><?php echo $dados[0]->telefone ?></p>  
    </div>

  </div>
   <div class="col-md-7" >
   <hr style="margin-left: -2%; margin-top: 5%;  ">
 </div>



   <div class="row">      
      <p  class="col-md-3" style="margin-top: -5px ; font-size: 11px"> Codigo do ánuncio: <span style="font-weight: bold;"> <?php echo $dados[0]->id ?> </span></p>
    
    </div> 
</div>
<?php include_once('pags/rodape.php');?>
</body>
</html>
