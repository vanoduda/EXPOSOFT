<?php
	require "conexaocarrinho.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		
	</head>
	<body>
	<header>
    <?php
    include 'menu.php';
     ?>    
    </header>	
        <div class="containerl">

			<div class="cart-container">

				<header>

					<h3>Carrinho de Compras</h3>

				</header>

				<div class="cart-body">

					<div class="cart-item">

						<?php
                        session_start();
							if(count($_SESSION['carrinho']) == 0){
								echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
							}else{
								$conexao  = new mysqli ("localhost", "root", "", "liberty ");
								mysqli_set_charset($conexao, "utf-8");
								$total = 0;

								$id = 2;

								foreach($_SESSION['carrinho'] as $id => $qtd){

									echo "
									<div class='cart-row'>

										<div class='cart-row-cell pic'>";
										
									?>
											<a href="?acao=del&id='.$id.'">-</a>
											
									<?php
										echo "
											<span></span>
										
										</div>	

										<div class='cart-row-cell desc'>";
									?>
											
											<h5><?php echo $ln['nome']; ?></h5>

						<?php
									echo "
										</div>

										<div class='cart-row-cell quant'>

											<ul>
												<li><a href='#'>-</a></li>

												<li>1</li>
												
												<li><a href='#'>+</a></li>
											</ul>

										</div>

										<div class='cart-row-cell amount'>

									";
						?>
											<p id="preco"><?php echo $ln['preco']; ?>,99</p>
						<?php
									echo "
										</div>	
								
									</div>
									
									";
								}
							} 
						?>

					</div>
				
				</div>

				<footer>

					<div class="totals">
						
						<p class="total-label">Total</p>

						<p class="total-amount">R$15,87</p>

					</div>

					<a href="index.php" class="continuar">Continuar Comprando</a>
					<br><br>
					<a href="pagamento.php" class="continuar">Finalizar Compra</a>

				</footer>

			</div>

		</div>
 <header>
  <?php
    include 'footer.php';
?>      
</header>
	</body>

</html>