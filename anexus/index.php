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
        .bd-placeholder-img-lg {
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
    	<h1>Verificar pontos do usuário</h1>

 		<br><input name="btncalcular" type="submit" value="Calcular" class="btn btn-lg btn-secondary"><br><br>
 		<?php

 			$botao= filter_input(INPUT_POST, 'btncalcular' , FILTER_SANITIZE_STRING);

 			if($botao == "Calcular")
 			{
				 $valor1 = 0;
			     $valor2 = null;
			     $valor3 = null;
			     $value = null;	


					
				if($valor3 == null)
				{
					$valor3 = 100;
				}
				else
				{
					$value = $valor2;
				}
				if($valor2 == null)
				{
					$valor2 = 200;
				}
				else
				{
					$value = $valor3	;
				}
					
				$total = $valor2 +$valor3;

				echo '<center><table>
        <tr><td>O Usuário um tem no total:</td><td> '.$total.'</td></tr>
						<tr><td>Pontos do laddo esquerdo: </td><td> ' . $valor2 .  '</td></tr> 
            <tr> <td>Pontos do lado direito:</td> <td> ' . $valor3 .'</td></tr>
            </table></center>';	
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