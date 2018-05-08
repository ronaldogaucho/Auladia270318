<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Caixa de Seleção</title>
</head>
<body>
<section>
    <form>
        <li><label for="location">Visitar Localização:</label>
            <select name="location" id="location">
                <option value="">Selecionar localização</option>
                <option value="New York">New York</option>
                <option value="Vancouver">Vancouver</option>
                <option value="Atlantis">Atlantis</option>
                <option value="Alpha Centauri">Alpha Centauri</option>
                <option value="Blackpool">Blackpool</option>
                <option value="Bognor Regis">Bognor Regis</option>
            </select></li>
        submit <input type="submit" value="Submit" name="submit"><br>
    </form>
</section>


<?php
$arrLocation = filter_input(INPUT_GET, 'location', FILTER_DEFAULT);
if ($arrLocation != null) {
    echo print_r($arrLocation, TRUE);
}
?>
</body>
</html>