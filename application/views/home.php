<?php include_once('pags/menu.php');
?>
<header >
	

	<script> 
 
// valor inicial usado
valor = -1;  
 
var frases = new Array();
 
// frases para troca | seguir a ordem
frases[0] = "Republicas Janu";
frases[1] = "Aqui você acha a melhor opção !";
frases[2] = "Volte sempre :)";
 
function aumenta() { 
valor = valor+1;  
 
if(valor > frases.length-1) { 
valor = 0;
} 
 
// 1000 = 1 segundo para troca
setTimeout("aumenta()", 2000);  
 
document.getElementById('frases').innerHTML = frases[valor]; 
 
} 
</script>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('<?php echo base_url('assets/foto/').$mais['mais'][0]->nome_imagem ?>')">
				<div class="carousel-caption d-none d-md-block">
					<div  style="opacity: 0.7; width: 40%; margin-left: 30%;color: #000" class="alert alert-success " role="alert"><?php echo $mais['mais'][0]->titulo; ?></div>
					
				</div>
			</div>
			<div class="carousel-item " style="background-image: url('<?php echo base_url('assets/foto/').$mais['mais'][1]->nome_imagem ?>')">
				<div class="carousel-caption d-none d-md-block">
					<div  style="opacity: 0.7; width: 40%; margin-left: 30%;color: #000" class="alert alert-success " role="alert"><?php echo $mais['mais'][1]->titulo; ?></div>
					
				</div>
			</div>
			<div class="carousel-item " style="background-image: url('<?php echo base_url('assets/foto/').$mais['mais'][2]->nome_imagem ?>')">
				<div class="carousel-caption d-none d-md-block">
					<div  style="opacity: 0.7; width: 40%; margin-left: 30%; color: #000" class="alert alert-success " role="alert"><?php echo $mais['mais'][2]->titulo; ?></div>	
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>
<div class="container">
	<h1 class="my-4" id="frases">A melhor república está aqui</h1>
	<div class="row">
		<?php
		foreach ($paginacao  as $valor) {			
			echo '<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			<a href="/rep/Anuncios/visualizar/'.$valor->id.'"><img style="width: 100%; height: 250px" class="card-img-top" src="/rep/assets/foto/'.$valor->nome_imagem.'" alt=""></a>
			<div class="card-body">
			<h4 class="card-title" align="center">
			<a href="/rep/Anuncios/visualizar/'.$valor->id.'" style="font-size: 80%">'.$valor->titulo.'</a>
			</h4>
			<p class="card-text" align="lefet">'.$valor->descricao.'</p>
			</div>
			</div>
			</div>';
		}
		?>
	</div>
	<nav aria-label="Page navigation"  style="margin-left: 40%;">
		<ul class="pagination " >
			<li class="page-item">
				<a class="page-link" href='/rep?pagina=1' aria-label="Previous">
					Inicio
				</a>
			</li>
			<?php 
			$max_links = 2;


			for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
				if($pag_ant >= 1){
					
					echo '<li class="page-item"><a class="page-link" href="/rep?pagina='.$pag_ant.'">'.$pag_ant.'</a></li>';
				}
			}			
			echo '<li class="page-item"><a class="page-link" href="/rep?pagina='.$pag_ant.'">'.$pagina.'</a></li> ';

			for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
				if($pag_dep <= $quantidade_pg){
					echo '<li class="page-item"><a class="page-link" href="/rep?pagina='.$pag_dep.'">'.$pag_dep.'</a></li> ';
					//echo "<a href='/rep?pagina=$pag_dep'>$pag_dep</a> ";
				}
			}
			
			//echo "<a href='/rep?pagina=$quantidade_pg'>Fim</a></div>";
			?>




			<li class="page-item">
				<a class="page-link" href="<?php echo '/rep?pagina='.$quantidade_pg.''; ?>" aria-label="Next">
					Fim
				</a>
			</li>
		</ul>
	</nav>
</div>
<?php include_once('pags/rodape.php');?>
</body>
</html>