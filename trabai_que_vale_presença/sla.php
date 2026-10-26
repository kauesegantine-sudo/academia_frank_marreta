<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Matrícula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="cabeçalho">
     <h1>Academia dos fortinhos</h1>
     <br><br>
    </div>

    
<div class="texto" >
 <h2>Recibo de Matrícula</h2>
</div>

<div class="matricula">
 <h3>Matrícula processada com sucesso!</h3>
</div>


<?php
$nome = $_POST["nome"];
$idade = (int) $_POST["idade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$data = $_POST["data"];
$plano = $_POST["plano"];
$pagamento = $_POST["pagamento"];

if ($plano == "basico") {
    $nomePlano = "Básico";
    $preco = 89.90;
} elseif ($plano == "plus") {
    $nomePlano = "Plus";
    $preco = 129.90;
} else {
    $nomePlano = "Premium";
    $preco = 179.90;
}

$desconto = 0;

if ($idade >= 60) {
    $desconto = 15;
} elseif ($pagamento == "pix") {
    $desconto = 10;
}

$total = $preco - ($preco * $desconto / 100);
?>


    <div class="formulario">
        <h3>Resumo da matrícula</h3>

        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
        <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Data:</strong> <?php echo htmlspecialchars($data); ?></p>
        <p><strong>Plano:</strong> <?php echo $nomePlano; ?></p>
        <p><strong>Forma de pagamento:</strong> <?php echo $pagamento == "pix" ? "PIX" : "Cartão"; ?></p>
        <p><strong>Valor original:</strong> R$ <?php echo number_format($preco, 2, ",", "."); ?></p>
        <p><strong>Desconto:</strong> <?php echo $desconto; ?>%</p>
        <p><strong>Valor final:</strong> R$ <?php echo number_format($total, 2, ",", "."); ?></p>

        <a href="novamatricula.html" class="voltar">Nova matrícula</a>
        <a href="index.html" class="voltar">Voltar ao painel</a>
    </div>


</body>
</html>