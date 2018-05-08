<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Checkbox</title>
</head>
<body>
<section>
    <form>
        <h2>Bebidas:</h2>
        <ul>
            <li>Coca-Cola <input type="checkbox" name="bebida[]" value="Coca-Cola"></li>
            <li>Água <input type="checkbox" name="bebida[]" value="Água" checked="checked"></li>
            <li>Guaraná<input type="checkbox" name="bebida[]" value="Guaraná"  checked="checked"></li>
        </ul>
        <h2>Comidas:</h2>
        <ul>
            <li>Pastel <input type="checkbox" name="comida[]" value="pastel"></li>
            <li>Xis <input type="checkbox" name="comida[]" value="xis" checked="checked"></li>
            <li>Salgadinho <input type="checkbox" name="comida[]" value="salgadinho"  checked="checked"></li>
        </ul>
        <input type="submit" value="Submit" name="Submit"><br>
    </form>
</section>




<?php
$arrBebidas = filter_input(INPUT_GET, 'bebida', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);


$arrComidas = filter_input(INPUT_GET, 'comida', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);



if ($arrBebidas != null) {
    //echo print_r($arrBebidas, TRUE) . '<br>';


    foreach ($arrBebidas as $bebidaSelecionada) {
        echo 'Bebida selecionada: ' . $bebidaSelecionada . '<br>';
    }
}

if ($arrComidas != null) {


    foreach ($arrComidas as $comidaSelecionada) {
        echo 'Comida selecionada: ' . $comidaSelecionada . '<br>';
    }
}
?>
</body>
</html>
