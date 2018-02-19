  <table class="table table-hover">
      <thead>
        <tr>        
          <th>Título</th>
          <th>Valor</th>       
          <th>Data de Publcação</th>        
          <th>Açao</th>
        </tr>
      </thead>
    <tbody>
<?php
  
  
  //if (isset($dados)){

    foreach ($dados as $valor) { ?>
      <tr>          
        <td style="width: 20%;"> <?php  if (isset($valor->titulo)) echo $valor->titulo ;?></td>
        <td style="width: 5%; "> <?php if (isset($valor->valor)) echo $valor->valor ; ?></td>
        <td style="width: 8%; ">  <?php if (isset($valor->dataAnuncio)) echo $valor->dataAnuncio ; ?>          
        </td>         
        <td class="actions" style="width: 5%; ">

         
  

          <a  class="btn btn-success btn-sm" style="border-radius: 0; width: 50%;" href="/rep/Anuncios/visualizar/<?php echo $valor->id ?>">  Ver</a>
        </td>
      </tr>    
  <?php
    if (isset($_POST['palavra'])) echo  ''; ?>
      <?php }  ?>  
      </tbody>  
    </table>