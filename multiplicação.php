<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício do Array</title>
</head>
<body>

<form>
    <imput type="text" name="operador1"><br>
        <imput type="text" name="operador2"><br>
            <imput type="submit" value="Multiplicar" name="action">
</form>

<?php

if (isset($_GET['operador1'])
    && isset($_GET['operador2'])
    && trim($_GET['operador2']) !=''
    && trim($_GET['operador2'])!='') {

    echo 'A multipicação dos dois números é:'.
        ($_GET['operador1'] * $_GET['operador2']);

}



