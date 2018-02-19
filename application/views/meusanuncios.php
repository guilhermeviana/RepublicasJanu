<!DOCTYPE html> 
<title>Meus Anuncios - Republicas Janu</title>
<?php include_once('pags/menu.php');?>

<div class="container">
	<ol class="breadcrumb" style="margin-top: 2%; margin-bottom: 2%;">
		<li class="breadcrumb-item">
			<a href="/rep/">Home</a>
		</li>
		<li class="breadcrumb-item active">Meus Anuncios</li>
	</ol>

	<table class="table table-hover">
    <thead>
      <tr>        
        <th>Título</th>
        <th>Valor</th>       
        <th>Data de Publcação</th>        
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($dados as $valor) {?>
        <tr >          
          <td style="width: 20%;  "><?php echo $valor->titulo;?></td>
          <td style="width: 5%; "><?php echo $valor->valor;?></td>
          <td style="width: 8%; "><?php echo date_format( new DateTime($valor->dataAnuncio), 'd/m/Y H:i:s' ) ;?></td>         
          <td class="actions" style="width: 8%;">
            <a style="border-radius: 0;" class="btn btn-success btn-sm" href="/rep/Anuncios/visualizar/<?php echo $valor->id ?>">Ver</a>
            <a style="border-radius: 0; " class="btn btn-warning btn-sm" href="/rep/Anuncios/editarAnuncio/<?php echo $valor->id ?>/">Editar</a>
            <a id="teste" style="border-radius: 0; cursor: pointer;" class="btn btn-danger btn-sm" onclick="b()">Apagar</a>
          </td>
          <?php } ?>
        </tr>    
      </tbody>
    </table>
  </div>

  <script type="text/javascript">
    function a() {
        
       
          document.getElementById('msg').style.visibility = 'hidden';
          
 }


      function b(){
        document.getElementById('msg').style.visibility = 'visible';
      }


  </script>


  <div id="msg" style="visibility: hidden; position: fixed;margin-left: 40%  ; margin-top: 15%; top:0px; background-color: #f0f0f0;  border-radius: 10px;  width: 25%; height: 200px;  "><br><br>
    <h5 align="center"> Deseja realmente apagar o anuncio ?</h5>
    <div style="margin-top: 15%; margin-left: 35%">
      <button class="btn btn-success"><a style="color: white;"   href="/rep/Anuncios/apagar/<?php echo $valor->id ?>">Sim</a></button>
      <button class="btn btn-danger" onclick="a()" style="cursor: pointer; ">Não</button>
    </div>

  </div>
  <script src="/rep/assets/vendor/jquery/jquery.min.js"></script>
<script src="/rep/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<footer class="py-5 bg-dark" style=" position: fixed;
    
    bottom: 0;
    width: 100%;">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Republicas Janu 2018</p>
  </div>
</footer>
</body>
</html>