<?php 

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="desafio.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <header> 
        <div class="container1">
            <span>Cadastro de Produtos</span>
        </div>

    </header>

    <section class="section-products">


        <div class="todos-produtos">
            <a>Todos os Produtos</a><br/>
        <table>
            <tr>
            <td><b>Nome</b></td>
            <td><b>Categoria</b></td>
            <td><b>Preço</b></td>
            </tr>
            <tr>
            <td><a href="produto.php"> <?php echo $_SESSION['nome'];?> </a></td>
            <td><?php echo $_SESSION['categoria']; ?> </td>
            <td><?php echo $_SESSION['preco']; ?> </td>
            </tr>
            <!-- <tr>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Preço</td>
            </tr>
            <tr>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Preço</td>
            </tr>
            <tr>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Preço</td>
            </tr> -->

        </table>


        </div>

        <div class="compra-produtos">

        <form method="post" name="form1" action="produto.php" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input name="nome" type="text" class="form-control" id="inputEmail4" placeholder="Seu nome aqui">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Categoria</label>
      <input name="categoria" type="text" class="form-control" id="inputClass" placeholder="Qual será a categoria?">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Descrição</label>
    <textarea name="descricao" type="text" class="form-control" id="inputdescription" placeholder=""></textarea>
  </div></br>
  <div class="form-group">
    <label for="inputAddress2">Quantidade</label>
    <input name="quantidade" type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Preço</label>
      <input name="preco" type="text" class="form-control" id="inputCity">
    </div>
    
  <div class="form-group">
    <label for="exampleFormControlFile1">Escolher arquivo</label>
    <input name="imagem" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="form-group">
    <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Li e concordo com o termos
      </label> -->
    </div>
    <br>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

        </div>

    </section>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>