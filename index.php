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
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="body_inicial">
  <nav> <!-- Cabeçalho -->
    <div class="topo d-flex justify-content">
      <a href="index.php"><img src="imagens/logo_menor.png" alt="Logo do nosso cinema" width="150px"></a>
      <div class="botoes_cima">
        <a href="telas/filmes.php">Filmes</a>
        <a href="telas/cadastro.php">Cadastro</a>
        <a href="telas/login.php">Login</a>
      </div>
    </div>
  </nav>

  <!-- Corpo do site -->
  <div class="cartaz_inicio" style="text-align: center;">
    <img src="imagens/capa_vingadores.png" alt="Foto dos vingadores">
  </div>

  <div class="filmes">
    <div class="container md-2">
      <a href="telas/extraordinario.php"><img src="imagens/extraordinario.jpg" alt="Cartaz do filme Extraordinário" width="250px"></a>
      <h1>Extraordinário</h1>
    </div>
    <div class="container md-2">
      <a href="telas/genteGrande.php"><img src="imagens/gente_grande.png" alt="Cartaz do filme Gente Grande" width="250px"></a>
      <h1>Gente Grande</h1>
    </div>
    <div class="container md-2">
      <a href="telas/toyStory.php"><img src="imagens/toy_story.webp" alt="Cartaz do filme Toy Story" width="250px"></a>
      <h1>Toy Story</h1>
    </div>
    <div class="container md-2">
      <a href="telas/branquelas.php"><img src="imagens/as_branquelas.jpg" alt="Cartaz do filme As Branquelas" width="250px" height="368px"></a>
      <h1>As Branquelas</h1>
    </div>
    <div class="container md-2">
      <a href="telas/superGirl.php"><img src="imagens/super_girl.png" alt="Cartaz do filme Super Girl" width="270px" height="368px"></a>
      <h1>Super Girl</h1>
    </div>
    <div class="container md-2">
      <a href="telas/grinch.php"><img src="imagens/grinch.jpg" alt="Cartaz do filme O Grinch" width="232px" height="368px"></a>
      <h1>O Grinch</h1>
    </div>
  </div>

  <div class="filmes">
    <div class="container md-2">
      <a href="telas/drama.php"><img src="imagens/o-drama-filme-1.jpg" alt="Cartaz do filme O Drama" width="250px"></a>
      <h1>O Drama</h1>
    </div>
    <div class="container md-2">
      <a href="telas/diabo-veste-prada.php"><img src="imagens/diabo_prada.webp" alt="Cartaz do filme O Diabo Veste Prada 2" width="250px"></a>
      <h1>O Diabo <br> Veste Prada 2</h1>
    </div>
    <div class="container md-2">
      <a href="telas/os_estranhos.php"><img src="imagens/estranhos.webp" alt="Cartaz do filme Os Estranhos" width="250px"></a>
      <h1>Os Estranhos <br> </h1>
      <h3>capítulo final</h3>
    </div>
    <div class="container md-2">
      <a href="telas/crepusculo.php"><img src="imagens/lua_nova.webp" alt="Cartaz do filme A Saga Crepúsculo: Lua Nova" width="250px"></a>
      <h1>Crepúsculo: <br></h1>
      <h3>Lua Nova</h3>
    </div>
    <div class="container md-2">
      <a href="telas/superMario.php"><img src="imagens/super-mario.jpg" alt="Cartaz do filme Super Mário" width="270px"></a>
      <h1>Super Mário</h1>
    </div>
    <div class="container md-2">
      <a href="telas/michael.php"><img src="imagens/michael.jpg" alt="Cartaz do filme Michel" width="232px"></a>
      <h1>Michael</h1>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <!-- Propagandas -->
    <div class="propaganda d-flex justify-content">
      <img src="imagens/propaganda_1.png" class="propagandas" alt="1ª Propaganda" style="margin-left: 230px;">
      <img src="imagens/propaganda_2.png" class="propagandas" alt="2ª Propaganda" style="margin-left: 230px;">
      <img src="imagens/propaganda_3.png" class="propagandas" alt="3ª Propaganda" style="margin-left: 230px;">
    </div><br><br>  

    <img src="imagens/propaganda_4.png" class="propagandas" alt="4ª Propaganda" style="margin-left: 600px;">
    
    <div class="face d-flex justify-content">

      <img src="imagens/icone_facebook.png" class="icones" alt="Ícone do facebook" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="imagens/icone_x.png" class="icones" alt="Ícone do x (antigo twitter)" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="imagens/icone_instagram.png" class="icones" alt="Ícone do instagram" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
      <img src="imagens/icone_youtube.png" class="icones" alt="Ícone do youtube" style="margin-left: 230px;">
      <h4>/TicketCine</h4>
    </div>
  </footer>
</body>

</html>