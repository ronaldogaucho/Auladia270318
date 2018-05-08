<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <p>Texto:
        <input type="file" name="arquivo"/><br>
        <input type="submit" value="Enviar"/>
    </p>
</form>
<?php
echo '<pre>' . print_r($_FILES, true) . '</pre>';

if (count($_FILES) > 0) {

    $conteudo = file_get_contents($_FILES["arquivo"]["tmp_name"]);
// sleep(1000);
    echo '<pre>' . print_r($conteudo, true) . '</pre>';
}

?>
</body>
</html>