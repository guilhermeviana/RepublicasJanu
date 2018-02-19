$(function(){	
	$("#palavra").keyup(function(){		
		var pesquisa = $(this).val();		
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('/rep/Anuncios/buscarAnuncios', dados, function(retorna){				
				$("#resultado").html(retorna);
			});
		}else{
			$("#resultado").html('');
		}		
	});
});