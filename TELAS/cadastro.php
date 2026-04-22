<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="body_cadastro">
    <img src="../imagens/logo.png" alt="logo da empresa" width="200">
    <h1><a href="../index.php">TicketCine</a></h1>
    <h3>Crie sua conta e compre ingressos!</h3>
    <p>Já é cadastrado? <a href="login.php">Entrar</a>.</p>
    <input type="text" name="nome" id="nome" placeholder="*Nome"><br><br>
    <input type="number" name="cpf" id="cpf" placeholder="*CPF" max="11"><br><br>
    <input type="tel" name="celular" id="celular" placeholder="*Celular"><br><br>
    <input type="email" name="email" id="email" placeholder="*E-mail"><br><br>
    <input type="password" name="senha" id="senha" placeholder="*Senha"><br>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Precisa de ajuda com a senha?
                 </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Sua senha precisa atender aos seguintes critérios: <br>
                    &#9989 <!-- Emoji do certo--> Mínimo uma letra minúscula <br>
                    &#9989 Mínimo uma letra maiúscula <br>
                    &#9989 Mínimo um número <br>
                    &#9989 Mínimo de 8 caracteres
            </div>
        </div>
    </div><br><br>

    <input type="password" name="senha" id="senha" placeholder="*Senha"><br>

    <button>Continuar</button><br>
    <p>Já é cadastrado? <a href="login.php">Entrar</a>.</p>
</body>
</html>