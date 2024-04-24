<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <h1>Calculadora PHP</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="campos">
            <input type="text" name="num1" id="num1" class="num" placeholder="Número 1">
            <select name="operacao" id="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="!">n!</option>
                <option value="^">x^y</option>
            </select>
            <input type="text" name="num2" id="num2" class="num" placeholder="Número 2">
        </div>

        <div class="acoes">
            <button type="submit" name="calcular">Calcular</button>
            <button type="button" id="btnMemoria">M</button>
            <button type="button" id="btnApagarHistorico">Apagar Histórico</button>
        </div>

        <div class="resultado">
            <p id="visor"></p>
        </div>

        <div class="historico">
            <h2>Histórico</h2>
            <ul id="listaHistorico"></ul>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>
