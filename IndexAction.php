<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["txtNome"];
    $valorCompra = $_POST["txtValorCompra"];
    $formaPagamento = $_POST["cmbPag"];
    $valorCompra = (float) str_replace(',','.',$valorCompra);
    $desconto = 0;
    $valorCompraFormatado = number_format($valorCompra, 2,',', '.');

    if ($formaPagamento == "cartaoCredito") {
        $desconto = 0;
        $mensagem = "Olá $nome, sua compra de R$ $valorCompraFormatado foi realizada com cartão de crédito. Não há desconto.";
    } elseif ($formaPagamento == "boleto") {
        $desconto = $valorCompra * 0.08;
        $descontoFormatado = number_format($desconto, 2, ',', '.');
        $mensagem = "Olá $nome, sua compra de R$ $valorCompraFormatado foi realizada com boleto. Seu desconto é de R$ $descontoFormatado.";
    } elseif ($formaPagamento == "deposito") {
        $desconto = $valorCompra * 0.1;
        $descontoFormatado = number_format($desconto, 2, ',', '.');
        $mensagem = "Olá $nome, sua compra de R$ $valorCompraFormatado foi realizada com depósito. Seu desconto é de R$ $descontoFormatado.";
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

    echo "<div class='w3-panel w3-purple'>$mensagem</div>";
}
//Para resolver o problema mais difícil, que era a mensagem não estar exibindo os valores corretos adotei a seguinte estrategia: notei que a forma de pagamento estava como um campo de texto livre, o que exigia que o usuário digitasse a forma de pagamento de uma maneira muito especifica para o if funcionar. Para resolver esse problema, substituí o input type="text" por um <select> no formulário, pré-definindo as opções possíveis. Assim, garanti que o valor enviado ao IndexAction.php fosse sempre exatamente "cartaoCredito", "boleto" ou "deposito". Por fim, revisei as porcentagens dos descontos para garantir que a matemática aplicada (8% para boleto e 10% para depósito) estava correta.
?>
</body>
</html>