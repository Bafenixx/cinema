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
  <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="body_sobre_filmes">
  <nav> <!-- Cabeçalho -->
    <div class="topo d-flex justify-content">
      <a href="../index.php"><img src="../imagens/logo_menor.png" alt="Logo do nosso cinema" width="150px"></a>
      <div class="botoes_cima">
        <a href="filmes.php">Filmes</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Login</a>
      </div>
    </div>
  </nav>

  <!-- Corpo do site -->

  <img src="../imagens/michael.jpg" class="filmes" alt="Cartaz do filme Michael" width="500px"> 
  
  <div class="card bg-transparent" style="width: 31rem;">
  <div class="card-body">
    <p class="card-text">Michael é uma cinebiografia musical sobre o rei do pop Michael Jackson. 
O longa retrata a vida e o legado do cantor (Jaafar Jackson), desde a descoberta de seu espetacular talento como líder do Jackson Five 
até o impacto cultural de sua visão
 artística ímpar. Para além da música, este drama biográfico traça as ambições criativas de um homem que buscou ativamente se tornar um dos maiores artistas do mundo, 
destacando os passos dados por Jackson fora dos palcos. Performances icônicas de sua carreira solo, ainda, compõem esse retrato íntimo e nunca antes visto do artista. 
 <br><br>
 Classificação indicativa 12 Anos. Contém drogas lícitas, violência.
</p>
  </div>
</div>

  <div class="horarios">
    <h1 style="color: rgb(2, 24, 72);">Horários do dia</h1>
    <h3>HOJE <br> 29/Abr</h3><br><br><br>
    <h6>2D · Dublado · Sala 6</h6>
    <button class="b_filme"><a href="sala6.php"> Hoje, 29 Abr <br> 18:50 </a></button><br><br><br><br><br>
    <h6>2D · Dublado · Sala 7</h6>
    <button class="b_filme"><a href="sala7.php"> Hoje, 29 Abr <br> 15:50 </a></button><br><br><br><br><br>
    
    <div class="d-flex">
      <img src="../imagens/icone_d-box.png" alt="Ícone do d-box" width="50px" height="30px">
      <p class="texto-normal" style="margin-left: 10px;">Poltronas com movimento.</p>
    </div><br>
    <div class="d-flex">
      <img src="../imagens/logo-bradesco-prime.png" alt="Ícone do d-box" width="50px" height="30px">
      <p class="texto-normal" style="margin-left: 10px;">Atendimento exclusivo e ambiente diferenciado.</p>
    </div>
    <div class="d-flex">
      <img src="../imagens/imax.png" alt="Ícone do d-box" width="50px" height="30px">
      <p class="texto-normal" style="margin-left: 10px;">A melhor tela com tecnologia 4k.</p>
    </div>

  </div>

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