<?php


session_start();

 $_SESSION['nome'] = $_POST['nome'];
 $_SESSION['categoria'] = $_POST['categoria'];
 $_SESSION['preco'] = $_POST['preco'];
 $_SESSION['descricao'] = $_POST['descricao'];
 $_SESSION['quantidade'] = $_POST['quantidade'];
 $_SESSION['imagem'] = $_POST['imagem'];



 echo $_SESSION['nome'];

 echo "<br />";

 echo $_SESSION['categoria'];

 echo "<br />";

 echo $_SESSION['preco'];

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="produto.css" >
    <script src="main.js"></script>
</head>
<body>

    <section class="products-view">

        <div class="product-img">
            <button><a href="desafio.php"> Voltar para lista de Produtos </button> </a>
            <br>
            <div class="img-div"> <img src=" <?php echo $_SESSION['imagem'];?> ">  </div>

    </div>

    <div class="product-information">
        <spam><strong><?php echo $_SESSION['nome'] ?></strong></spam>
        <p><?php echo $_SESSION['categoria'] ?></p>
        <h><strong>Produto</strong></h>
        <p><strong>Descrição</strong></p>
        <h><?php echo $_SESSION['categoria'] ?></h>
        <p><strong>Quantidade em estoque </strong></p>
        <h><?php echo $_SESSION['quantidade'] ?></h>
        <p><strong>Preço</strong></p>
        <h><?php echo $_SESSION['preco'] ?></h>
    


 </section>
 </body>
 </html>