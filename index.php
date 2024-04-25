<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

    <h1>Calculadora PHP</h1>

    <?php require_once 'functions.php'; ?>

    <form method="post">
        <label for="num1">Valor 1</label>  <!--O atributo "for" é usado para ligar a etiqueta a um elemento de formulário pelo id.-->
        <input type="number" id="num1" name="num1" required> <!--O atributo "type" é usado para definir a tipagem do valor que será inputado.-->

        <label for="operation"></label>
        <select id="operation" name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="!">!</option>
            <option value="^">^</option>
        </select>

        <label for="num2">Valor 2</label>
        <input type="number" id="num2" name="num2" required>
        
        <br>

        <button type="submit" name="calculate" >Calcular</button>

        <br>


        <button type="submit" name="save">Salvar</button>
        <button type="submit" name="getValues">Pegar Valores</button>
        <button type="submit" name="memory">M</button>
        <button type="submit" name="clear">Apagar Histórico</button>
    </form>

    <br>

    <p><?php if ($result): echo $num1 . " " . $operation . " " . $num2 . " = " . $result; endif; ?></p>
    <!--The endif statement is the closing part of an if statement construct in PHP. It marks the end of the code block that should only be executed if a certain condition is true.-->

    <h2>Histórico</h2>
    <?php if ($historic): ?>
        <table>
            
            <?php foreach ($historic as $operation): ?>
                <tr>
                    <td>
                        <?php echo $operation['num1']; ?>
                        <?php echo $operation['operation']; ?>
                        <?php echo $operation['num2']; ?>
                        <?php echo " = "; ?>
                        <?php echo $operation['result']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</body>
</html>