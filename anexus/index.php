<!DOCTYPE html>
<html lang="pt-BR">
	<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Teste Anexus Network</title>
	<link href="css/cover.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
]{
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="inner cover">Rede de pontos do usuário</h3>
      
    </div>
  </header>

  <main role="main" class="inner cover">
  	<form name="Cadastro" method="POST">
    	<h1>Verificar pontos do usuário</h1><br>
    <td><label>Usuário 2</label></td>
    <td><input type="number" name="user2pontos" placeholder="Pontos" class="txtbox"></td>  <br>
    <td><label>Usuário 3</label></td>
    <td><input type="number" name="user3pontos" placeholder="Pontos" class="txtbox"></td>  <br><br>
 		<br><input name="btncalcular" type="submit" value="Calcular" class="btn btn-lg btn-secondary"><br><br>
 		<?php

      $usuario2= filter_input(INPUT_POST, 'user2pontos' , FILTER_SANITIZE_STRING);
      $usuario3= filter_input(INPUT_POST, 'user3pontos' , FILTER_SANITIZE_STRING);
 			$botao= filter_input(INPUT_POST, 'btncalcular' , FILTER_SANITIZE_STRING);

 			if($botao == "Calcular")
 			{
		    if($usuario2 && $usuario3)
        {
          if($usuario3 > $usuario2)
          {
              $valoresquerdo = $usuario3;
          }
          else
          {
            $valoresquerdo = $usuario2; 
          }
          if($usuario3 < $usuario2)
          {
            $valordireito = $usuario3;
          }
          else
          {
            $valordireito = $usuario2 ;
          }
            
          $total = $usuario2 +$usuario3;

          echo '<center><table>
          <tr><td><h5 style="color: black;">O Usuário um tem no total:</h5></td><td><h5 style="color: black;"> '.$total.'</h5></td></tr> 
          <tr> <td><h5 style="color: black;">Pontos do Usuário 2:</h5></td> <td> <h5 style="color: black;">' . $usuario2 .'</h5></td></tr>
              <tr> <td><h5 style="color: black;">Pontos do Usuário 3:</h5> </td> <td><h5 style="color: black;"> ' . $usuario3 .'</h5></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td><h5>Pontos do laddo esquerdo:</h5></td><td><h5> ' . $valoresquerdo .  '</h5></td></tr> 
              <tr><td><h5>Pontos do lado direito:</h5></td> <td> <h5>' . $valordireito .'</h5></td></tr>
             
              </table></center>'; 
        }
        else
        {
          echo '<h3 style="color: red;
           text-shadow: 0 .2rem .2rem rgba(0, 0, 0, 10);">';
          echo 'Preencha todos os campos!!';
          echo '</h3>';
        }
				
			}	
		?>
	</form>   
  </main>

  <footer class="mastfoot mt-auto">
      <p>Copyright  © - Gustavo Nogueira</p>
  </footer>
</div>
</body>
</html>