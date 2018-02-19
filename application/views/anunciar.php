<!DOCTYPE html> 


<title>Anunciar - Republicas Janu</title>
<?php include_once('pags/menu.php');?>
<div class="container" >
	<ol class="breadcrumb" style="margin-top: 2%; margin-bottom: 2%;">
		<li class="breadcrumb-item">
			<a href="/rep/">Home</a>
		</li>
		<li class="breadcrumb-item active">Anunciar</li>
	</ol>

	<div style="border-style: ridge; border-color: #D3D3D3	; border-width: 1px; margin-top: 2%; margin-bottom:  2% ">
		<h4 class="mt-4 mb-3" align="center">Falta pouco para anunciar sua república :)</h4>
		<p align="center" style="margin-top: -1.4%;">Anuncie e aguarde o contato !</p>
		<form action="/rep/Anuncios/salvarAnuncio" method="post"  enctype="multipart/form-data">
			<h4 class="col-lg-8 ">Informações do anúncio</h4>
			<p class="col-lg-8" style="font-size: 12px;">As informações marcadas com asterisco (*) são obrigatórias</p>

			<div class="form-group col-lg-7">
				<label for="exampleFormControlInput1" >Título* (50 caracteres)</label>
				<input placeholder="Seja curto e objetivo" maxlength="50" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?php if(isset($result[0]->titulo)) echo $result[0]->titulo; ?>">
			</div>
			
				
		
			<div class="form-group col-lg-7">
				<label for="exampleFormControlTextarea2">Descrição*</label>
				<textarea placeholder="Descreva com mais detalhes seu anuncio" required maxlength="200" style="border-radius: 0px" class="form-control" id="exampleFormControlTextarea2" rows="3" name="descricao" ><?php if(isset($result[0]->descricao)) echo $result[0]->descricao;?></textarea>
			</div>
			<div class="form-group col-lg-4">
				<label for="valor">Preço*</label>
				<input placeholder="Ex: 200,00" required id="valor" style="border-radius: 0px" class="form-control" type="number"  name="valor" value="<?php if(isset($result[0]->valor)) echo $result[0]->valor; ?>">
			</div>
			<div class="form-group col-lg-8">
				<label for="exampleInputFile">Adicionar imagens</label>
				<input style="border-radius: 0px" type="file" accept="image/png, image/jpeg" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" multiple name="arquivo">
				<small id="fileHelp" class="form-text text-muted">Um anúncio com foto é mais visto.</small>
			</div>

			<div class="form-group col-lg-4">
				<label for="exampleFormControlInput4">Rua*</label>
				<input placeholder="Ex: Mestre maria das dores" maxlength="30" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput4" name="rua" value="<?php if(isset($result[0]->rua)) echo $result[0]->rua; ?>">				
			</div>
			<div class="row">
				<div class="form-group col-lg-2" style="margin-left: 1.4%">
					<label for="exampleFormControlInput5">CEP*</label>
					<input placeholder="Ex: 39480000" maxlength="8" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput5" name="cep" value="<?php if(isset($result[0]->cep)) echo $result[0]->cep; ?>">
				</div>
				<div class="form-group col-lg-1">
					<label for="exampleFormControlInput6">Numero*</label>
					<input maxlength="4" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput6" name="numero" value="<?php if(isset($result[0]->numero)) echo $result[0]->numero; ?>">
				</div>
			</div>
			<div class="form-group col-lg-4">
				<label for="exampleFormControlInput7">Bairro*</label>
				<input placeholder="Ex: Centro" maxlength="25" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput7" name="bairro" value="<?php if(isset($result[0]->bairro)) echo $result[0]->bairro; ?>">
			</div>
			<div class="form-group col-lg-2">
				<label for="exampleFormControlInput8">Complemento</label>
				<input placeholder="Ex: Casa" maxlength="15" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput8" name="complemento" value="<?php if(isset($result[0]->complemento)) echo $result[0]->complemento; ?>">
			</div>

			 <div style="display: none">
                 <input required style="border-radius: 0px" type="text" name="id" style="" value="<?php if(isset($result[0]->id)) echo $result[0]->id; else echo 0;?>">
            </div> 

			<div style="border-style: ridge; border-top: #D3D3D3; border-width: 1.5px; "></div>
			<h4 class="col-lg-8 " style="margin-top: 2%;">Dados para contato</h4>
			<div class="form-group col-lg-4">
				<label for="exampleFormControlInput9">Nome*</label>
				<input placeholder="Ex: Guilherme" maxlength="30" required style="border-radius: 0px" type="text" class="form-control" id="exampleFormControlInput9" name="nome" value="<?php if(isset($result[0]->nome)) echo $result[0]->nome; ?>">
			</div>
			<div class="form-group col-lg-4">
				<label for="exampleFormControlInput9">E-mail*</label>
				<input placeholder="Ex: user@domain.com" required style="border-radius: 0px" type="email" class="form-control" id="exampleFormControlInput9" name="email" value="<?php if(isset($result[0]->email)) echo $result[0]->email; ?>">
			</div>
			<div class="form-group col-lg-2">
				<label for="telefone">Telefone*</label>
				<input required style="border-radius: 0px" type="tel" class="form-control" id="telefone" maxlength="14" placeholder="Ex: (11)123456789" name="telefone" value="<?php if(isset($result[0]->telefone)) echo $result[0]->telefone; ?>">
			</div>



			<div class="form-group col-lg-12">
				<button  class="btn btn-success" style=" margin-bottom: 0.5%; cursor: pointer; border-radius: 0px;">Anunciar</button>
			</div>
			
		
		</form>
	</div>
</div>

 





<?php include_once('pags/rodape.php');?>


</body>
</html>