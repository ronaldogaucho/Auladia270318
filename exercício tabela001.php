<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício da tabela</title>
</head>
<body>
<?php
$notas = array(
    "biologia" => array(
        array("Teoria", "A", "A"),
        array("Pratica", "A+", "A"),
    )
,
    "Quimica" => array(
        array("Teoria", "B", "C"),
        array("Pratica", "A", "C+"),
    )
,
    "Fisica" => array(
        array("Teoria", "A", "A"),
        array("Pratica", "A-", "A-"),
    )
);
?>
<table border="1">
    <tr><th colspan="1">ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Cadeiras</th>
        <th>Notas</th></tr>

    <?php
    foreach ($notas as $materia => $notasMateria) {
    ?>
    <tr>
        <td rowspan="2"> <?php echo $materia ?> </td>


        <?php
        foreach ($notasMateria as $tipoAvaliacao) {
        ?>


        <?php
        foreach ($tipoAvaliacao as $campos) {
            echo "<td>" . $campos . "</td>";
        }
        ?>
    </tr><tr>
        <?php
        }
        }
        ?>
    </tr>
</table>




</body>
</html>