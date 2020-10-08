<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>
			Teste anexus
		</title>
		<link rel ="stylesheet" type="text/css" href="css/estilo.css">		

	</head>
	<body>
		<div class="teamplate">
			<header>
				<h1 class="borda">Rede de pontos de usuário</h1>
			</header>
			<main>
				<div class="borda">						
					<h1>Verificar pontos do usário</h1>
				

				<script type="text/javascript" src="script.js"></script>


				<?php

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

					echo '<div class="texto"> O Usuário um tem no total: '.$total.' Pontos
							<br>Pontos do laddo esquerdo:  ' . $valor2 . 
							'<br> Pontos do lado direito:  ' . $valor3 . 
							'</div>';		
		
				?>
				</div>
			</main>	
			<aside>
				
				
			</aside>
			<footer>
				<div class="borda">
					<h3 class="rodape">Copyright  © - Todos os direitos reservados</h3>
				</div>
			</footer>
		</div>
	</body>
</html>