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

  <div class="container_salas">
    <aside class="sidebar">
      <h2 class="title-section">RESUMO DA COMPRA</h2>
      <div class="info-item">
        <span class="icon">📅</span>
        <p>HOJE, 29 ABR</p>
      </div>
      <div class="info-item">
        <span class="icon">📍</span>
        <p>TICKETCINE</p>
      </div>
      <div class="info-item">
        <span class="icon">🕒</span>
        <p>18H50, 2D - DUBLADO</p>
      </div>
      <div class="info-item">
        <span class="icon">💺</span>
        <p>SALA 6</p>
      </div>
    </aside>

    <main class="seat-selection">
      <h2 class="title-section">ESCOLHA SEUS ASSENTOS</h2>

      <div class="theater-map">
        <div class="row" data-row="F">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row" data-row="E">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>

        <div class="screen-area">
          <div class="screen"></div>
          <span>Tela</span>
        </div>
      </div>

      <div class="legend">
        <div class="legend-item">
          <div class="seat"></div> Disponível
        </div>
        <div class="legend-item">
          <div class="seat occupied"></div> Indisponível
        </div>
        <div class="legend-item">
          <div class="seat selected"></div> Selecionado
        </div>
      </div><br><br>

      <!-- IGRESSO -->

      <div class="ticket-row">
        <div class="ticket-info">
          <div class="ticket-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1042/1042259.png" alt="Icon" width="30">
          </div>
          <div class="ticket-text">
            <span class="ticket-title">Inteira</span>
            <span class="ticket-price">R$ 36,48</span>
          </div>
        </div>

        <div class="stepper">
          <button class="btn-step minus" id="btn-minus" disabled aria-label="Remover">
            <svg viewBox="0 0 24 24" width="16" height="16">
              <rect y="11" width="24" height="2" fill="currentColor" />
            </svg>
          </button>
          <span class="count" id="ticket-count">0</span>
          <button class="btn-step plus" id="btn-plus" aria-label="Adicionar">
            <svg viewBox="0 0 24 24" width="16" height="16">
              <path d="M11 11V0h2v11h11v2H13v11h-2V13H0v-2h11z" fill="currentColor" />
            </svg>
          </button>
        </div>
      </div><br><br>

      <button onclick="alert('Compra realizada com sucesso!')" style="background-color: transparent; color: white;">Comprar</button><br><br>
    </main>
  </div>

  <script>
    const seats = document.querySelectorAll('.seat:not(.occupied)');

    seats.forEach(seat => {
      seat.addEventListener('click', () => {

        seat.classList.toggle('selected');

        if (seat.classList.contains('selected')) {
          console.log("Assento selecionado!");
        }
      });
    });

    const btnMinus = document.getElementById('btn-minus');
    const btnPlus = document.getElementById('btn-plus');
    const countDisplay = document.getElementById('ticket-count');

    let count = 0;

    function updateDisplay() {
      countDisplay.innerText = count;

      if (count <= 0) {
        btnMinus.disabled = true;
      } else {
        btnMinus.disabled = false;
      }
    }

    btnPlus.addEventListener('click', () => {
      count++;
      updateDisplay();
    });

    btnMinus.addEventListener('click', () => {
      if (count > 0) {
        count--;
        updateDisplay();
      }
    });
  </script>

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