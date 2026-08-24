<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <form action="IndexAction.php" method="post">
           
            <label><b>Nome</b></label>
            <br>
            <input type="text" name="txtNome" id="txtNome">
            <br>
           
            <label><b>Valor da compra</b></label>
            <br>
            <input type="text" name="txtValorCompra" id="txtValorCompra">
            <br>
            
            <label><b>Forma de pagamento</b></label>
            <br>
            <select name="cmbPag" id="cmbPag">
                 <option value="cartaocredito">Cartão de Crédito</option>
                <option value="boleto">Boleto Bancário</option>
                <option value="deposito">Depósito/Transferência</option>
            </select>
            <br>
            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>