<?php
    // Recebendo os dados enviados pelo formulário e guardando em variáveis
    $nome = $_POST["nome53"];
    $idade = $_POST["idade53"];
    $profissao = $_POST["profissao53"];
    $salario = $_POST["salario5315"];
    $experiencia = $_POST["experiencia15"];

    // Montando a mensagem personalizada, usando nome, profissão e experiência
    $mensagem = "Seja muito bem-vindo(a), " . $nome . "! Ficamos felizes em ter você como nosso(a) novo(a) " . $profissao . ". Com base na experiência que você contou (" . $experiencia . "), temos certeza de que você vai se destacar na equipe!";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

    <div class="w3-container w3-padding-32">
        <div class="w3-card w3-white w3-padding w3-margin" style="max-width:600px; margin:auto;">

            <h2 class="w3-text-blue">Cadastro Recebido!</h2>
            <p>Confira abaixo os dados enviados:</p>

            <!-- Exibindo cada informação em uma linha, usando as variáveis criadas -->
            <p><b>Nome completo:</b> <?php echo $nome; ?></p>
            <p><b>Idade:</b> <?php echo $idade; ?> anos</p>
            <p><b>Profissão:</b> <?php echo $profissao; ?></p>
            <p><b>Salário pretendido:</b> R$ <?php echo $salario; ?></p>
            <p><b>Experiência anterior:</b> <?php echo $experiencia; ?></p>

            <hr>

            <!-- Mensagem personalizada, usando nome, profissão e experiência -->
            <div class="w3-panel w3-pale-green w3-leftbar w3-border-green">
                <p><?php echo $mensagem; ?></p>
            </div>

            <!-- Link para voltar ao formulário -->
            <a href="cadastro.html" class="w3-button w3-blue w3-round">Voltar ao Formulário</a>

        </div>
    </div>

</body>
</html>
