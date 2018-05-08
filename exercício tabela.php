<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício da tabela</title>
</head>
<body>
<?php
$ta = array(
    "Breakfast" => array(
        array("In lair", "With cronies", "In lair", "In lair", "In lair"),
    )
,
    "Morning" => array(
        array("Design traps", "Improve Hideout"),
    )
,
    "Afternoon" => array(
        array("train minions", "train minions", "train minions", "train minions", "world domination"),
    )
,
    "Evening" => array(
    array("manaical laughter", "manaical laughter", "manaical laughter", "manaical laughter"),
    ),
);

?>

<table border="1">
    <tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
    </tr>

    <?php
    foreach ($ta as $bela => $tabela) {
    ?>
    <tr>
        <td rowspan="2"> <?php echo $bela ?> </td>


        <?php
        foreach ($tabela as $tipoTabela) {
        ?>


        <?php
        foreach ($tipoTabela as $campos) {
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