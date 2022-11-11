<?php
      session_start();

      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }

      //adiciona produto

      if(isset($_GET['acao'])){

         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }

         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
             
            if(isset($_SESSION['carrinho'][$id])){ 
                $qtd=0;
               unset($_SESSION['carrinho'][$id]);
            }
         }

         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }

      }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href=cssphpalterar.css>
<title>Carrinho</title>
</head>
<?php
    include 'menu2.php';
?>
<body>
<center>
<table>
    <caption>Carrinho de Compras<hr></caption>
    <thead>
          <tr>
            <th width="244">Viagem</th>
            <br>
            <th width="79">Preço</th>
            <th width="79">Quantidade</th>
            <th width="79">Remover</th>
          </tr>
    </thead>
            <form action="?acao=up" method="post">
    <tfoot>
            <tr>
            <td colspan="5"><a class="button" href="adicionarproduto.php">Continuar Comprando</a><hr></td>
            <tr>
            <tr>
            <td colspan="5"><a class="button" href="pagamento.php">Finalizar Pedido</a><hr></td>
    </tfoot>

    <tbody>
               <?php
        $qtd=0;
                     if(count($_SESSION['carrinho']) == 0){
                        echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                     }else{
                        require("conexaocarrinho.php");
                                                               $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                              $sql   = "SELECT *  FROM agencia WHERE idagencia= '$id'";
                              $qr    = mysqli_query($conexao,$sql);
                              $ln=mysqli_fetch_array($qr);

                              $nome  = $ln['nome'];
                              $preco = $ln['preco'];
                           echo '<tr>
                                 <td>'.$nome.'</td>
                                 <td>'.$preco.'</td>
                                 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                 <td><a class="button" href="?acao=del&id='.$id.'">Remove</a></td>
                              </tr>';
                        }
                           $total = number_format($total, 2, ',', '.');
                           echo '<tr>
                              </tr>';
                     }
               ?>


     </tbody>
        </form>
</table>
</center>
</body>
</html>