<!DOCTYPE html> 
<title>Alterar Senha - Republicas Janu</title>
<?php include_once('pags/menu.php');?>

<div class="container">
	<ol class="breadcrumb" style="margin-top: 2%; margin-bottom: 2%;">
		<li class="breadcrumb-item">
			<a href="/rep/">Home</a>
		</li>
		<li class="breadcrumb-item active">Alterar Senha</li>
	</ol>
	<?php 

if ($info != ""){

if ($info == "Senha alterada com sucesso !")
echo '<div align="center" class="alert alert-success " style="width: 25%; margin-left: 35%; margin-top: 2%"  role="alert">
  '.$info.'
</div>';
else 
echo '<div align="center" class="alert alert-danger " style="width: 25%; margin-left: 35%; margin-top: 2%"  role="alert">
  '.$info.'
</div>';
}
?>
<div class="container profile profile-view" id="profile">
		<form action="/rep/Perfil/alterarSenha" method="post">

			<div class="col-md-8">
				<h2>Perfil</h2>
				<hr>
				<div class="row">
					
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label class="control-label">Senha Atual</label>
							<input style="border-radius: 0px" class="form-control" type="password" name="senhaAtual" autocomplete="off" required="">
						</div>
					</div>
				</div> 

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label class="control-label">Nova Senha</label>
							<input style="border-radius: 0px" class="form-control" type="password" name="senha1" autocomplete="off" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label class="control-label">Confirme a Senha</label>
							<input style="border-radius: 0px" class="form-control" type="password" name="senha2" autocomplete="off" required="">
						</div>
					</div>
				</div>
				<hr>
				<div class="row" style="width: 27%">
					<div class="col-md-12 content-right" style="margin-bottom: 35%; margin-left: 290%; margin-top: 2%;"">
						<button style="border-radius: 0px" class="btn btn-danger" type="reset">Cacelar</button>
						<a href="/rep/Perfil/alterarSenha"><button style="border-radius: 0px" class="btn btn-success" type="submit">Salvar</button></a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include_once('pags/rodape.php');?>
</body>
</html>