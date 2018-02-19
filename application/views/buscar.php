<!DOCTYPE html>
<title>Buscar - Republicas Janu</title>
<?php include_once('pags/menu.php');?>
<div class="container">	
	<ol class="breadcrumb" style="margin-top: 2%; margin-bottom: 2%;">
		<li class="breadcrumb-item">
			<a href="/rep/">Home</a>
		</li>
		<li class="breadcrumb-item active">Busca</li>
	</ol>
	<h3 class="mt-4 mb-3">
		Ache aqui a melhor rep para você        
	</h3>  
  <form method="post" id="form-pesquisa" action="">
   <div class="row">	
      <div class="col-lg-12">
          <div class="input-group">
            <input style="border-radius: 0px" type="text" class="form-control" placeholder="Buscar por titulo" name="palavra" id="palavra" >
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit" style="border-radius: 0px">Buscar</button>
         </span>
        </div>
      </div>
    </div>
  </form>
  <div id="resultado"> 
  </div>

    <h4 class="my-4">Mais pesquisadas</h4>
    <div class="row">
      <?php 
      $j = 0;
      $cont = $mais;    

        if (isset($cont['mais'][0]->titulo)){


          echo ' <div class="col-md-3 col-sm-6 mb-4">
        <a href="/rep/Anuncios/visualizar/'.$cont['mais'][0]->id.'">
          <img class="img-fluid" style="height: 100%; width: 100%;" src="/rep/assets/foto/'.$cont['mais'][0]->nome_imagem.'" alt="img" >
        </a>
      </div> ';
        }

        if (isset($cont['mais'][1]->titulo)){
          echo ' <div class="col-md-3 col-sm-6 mb-4">
        <a href="/rep/Anuncios/visualizar/'.$cont['mais'][1]->id.'">
          <img class="img-fluid" style="height: 100%; width: 100%;" src="/rep/assets/foto/'.$cont['mais'][1]->nome_imagem.'" alt="img" >
        </a>
      </div> ';
        }

        if (isset($cont['mais'][2]->titulo)){
          echo ' <div class="col-md-3 col-sm-6 mb-4">
        <a href="/rep/Anuncios/visualizar/'.$cont['mais'][2]->id.'">
          <img class="img-fluid" style="height: 100%; width: 100%;" src="/rep/assets/foto/'.$cont['mais'][2]->nome_imagem.'" alt="img" >
        </a>
      </div> ';
        }
        if (isset($cont['mais'][3]->titulo)){
          echo ' <div class="col-md-3 col-sm-6 mb-4">
        <a href="/rep/Anuncios/visualizar/'.$cont['mais'][3]->id.'">
          <img class="img-fluid" style="height: 100%; width: 100%;" src="/rep/assets//foto/'.$cont['mais'][3]->nome_imagem.'" alt="img" >
        </a>
      </div> ';
        }
      ?>   
   </div>
    <br><br>
</div>
<?php include_once('pags/rodape.php');?>
</body>
</html>