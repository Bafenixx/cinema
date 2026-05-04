<?php 
    namespace Projeto\telas;
    require_once("../DAO/login.php");
    require_once("../DAO/cadastro.php");
    use Projeto\DAO\Login;
    use Projeto\DAO\Cadastro;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticketcine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <link rel="icon" href="../imagens/ticket_login.png"/>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body_login">
  <nav> <!-- Cabeçalho -->
    <div class="topo d-flex justify-content">
      <a href="../index.php"><img src="../imagens/logo_menor.png" alt="Logo do nosso cinema" width="150px"></a>
      <div class="botoes_cima">
        <a href="filmes.php">Filmes</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Login</a>
        <a href="adm.php">Administrador</a>
      </div>
    </div>
  </nav>

  <!-- Corpo do site -->
  
  <div class="login-container">
    <img src="../imagens/ticket_login.png" class="bg">
  </div>
  <h2 class="texto_login">LOGIN</h2>
  <form class="form_login" method="POST">
    <label>Seu E-mail: </label>
    <input type="email" name="email" id="email"/><br><br>
    <label>Sua senha: </label>
    <input type="text" name="senha" id="senha"/><br><br>
    <button type="submit" name="btnEntrar">Entrar

    <?php
      try{
          if (isset($_POST['btnEntrar'])) {
          $email           = $_POST['email']; 
          $senha           = $_POST['senha']; 
          $emailCadastrado = $_POST['emailCadastrado'];
          $senhaCadastrada = $_POST['senhaCadastrada'];

          session_start();

          $cadastro = new Cadastro($email, $senha, $_SESSION['emailCadastrado'], $_SE['senhaCadastrada']);

          if($_SESSION['senhaCadastrada'] == $senha && $_SESSION['emailCadastrado'] == $email){
            header('location: filmes.php');
          }else{
            echo "Usuário ou senha incorreto!";
          }
          }
      }catch(Except $erro){
          echo "Algo deu errado! <br<br> $erro";
      }
    ?>

    </button><br><br>
    <p>Não é cadastrado? <a href="cadastro.php">Cadastra-se</a></p>
  </form>

  <!-- FOOTER -->
  <footer>
    <!-- Propagandas -->
    <div class="propaganda d-flex justify-content">
      <img src="../imagens/propaganda_1.png" class="propagandas" alt="1ª Propaganda" style="margin-left: 230px;">
      <img src="../imagens/propaganda_2.png" class="propagandas" alt="2ª Propaganda" style="margin-left: 230px;">
      <img src="../imagens/propaganda_3.png" class="propagandas" alt="3ª Propaganda" style="margin-left: 230px;">
    </div><br><br>  

    <img src="../imagens/propaganda_4.png" class="propagandas" alt="4ª Propaganda" style="margin-left: 600px;">
    
    <div class="face d-flex justify-content">

      <img src="../imagens/icone_facebook.png" class="icones" alt="Ícone do facebook" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="../imagens/icone_x.png" class="icones" alt="Ícone do x (antigo twitter)" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="../imagens/icone_instagram.png" class="icones" alt="Ícone do instagram" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="../imagens/icone_youtube.png" class="icones" alt="Ícone do youtube" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
    </div>
  </footer>
</body>

</html>