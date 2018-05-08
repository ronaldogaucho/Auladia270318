<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Rádio</title>
    <script>


    </script>
</head>
<body>
<form>
    Nome:<input type="text" name="nome"/><br>
    <input type="radio" name="genero" value="Masculino" checked> Masculino<br>
    <input type="radio" name="genero" value="Feminino"> Feminino<br>
    <input type="radio" name="genero" value="Outro"> Outro<br><br>
Funcionário:<br>
    <input type="radio" name="funcionario" value="sim" checked> Sim<br>
    <input type="radio" name="funcionario" value="nao"> Não<br>
    <input type="submit" name="action" value="Enviar"/><br><br>
</form>
</body>
</html>




<?php


echo "Nome: " . filter_input(INPUT_GET, 'nome', FILTER_DEFAULT). '<br>';


echo "Gênero: " .filter_input(INPUT_GET, 'genero', FILTER_DEFAULT)  . '<br>';


echo "Funcionário: " .filter_input(INPUT_GET, 'funcionario', FILTER_DEFAULT)  . '<br>';


?>
