<!DOCTYPE html>
<html lang="pt-br">

<?php if (!isset($msg)) $msg = "";
if ($msg == "E-mail ou senha incorreto !")
echo '<div align="center" class="alert alert-danger " style="width: 25%; margin-left: 37.5%; margin-top: 2%"  role="alert">
  '.$msg.'
</div>';
 ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="">
    <title>Login - Republicas Janu</title>
    <link href="/rep/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/rep/assets/css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">

      <div class="col-md-12">

      <form class="form-signin" method="POST" action="/rep/Perfil/fazerLogin">
        <h2 style="margin-bottom: 10%" class="form-signin-heading">Republicas Janu</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input style="border-radius: 0px" type="email" name="login" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input id="teste" style="border-radius: 0px" type="password" name="senha" id="inputPassword" class="form-control" placeholder="senha" required>
        <a href="/rep/Perfil/cadastre"><p  style="font-size: 13px; margin-right: 5%; margin-top: -15px; border: none; background-color: transparent; cursor: pointer;" align="right">Cadastrar-se</p></a>
        <button style="border-radius: 0px; cursor: pointer;" class="btn btn-lg btn-success btn-block" type="submit">ENTRAR</button>

        <div id="k"></div>

      </form>
    </div>

    <p class="text-center text-danger">  
    </p>
    <p class="text-center text-success">      
    </p>
    </div>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
