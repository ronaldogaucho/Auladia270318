<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício do Bingo</title>
</head>
<body>
<?php
$cartelasBingo = array();
$intTotalCartelas = 10;
$intTotalLinhas = 5;
$intTotalColunas = 5;


for ($iCartela = 0; $iCartela < $intTotalCartelas; $iCartela++) {
    for ($iLinha = 0; $iLinha < $intTotalLinhas; $iLinha++) {
        for ($iColuna = 0; $iColuna < $intTotalColunas; $iColuna++) {

            $cartelasBingo[$iCartela][$iLinha][$iColuna] = rand(0, 99);

        }
    }
}
for ($iCartela = 0; $iCartela < $intTotalCartelas; $iCartela++) {

    echo "<br>";
    ?>

    <table border="1">
        <tr>
            <td colspan="<?php echo $intTotalColunas; ?>"> Bingo</td>
        </tr>
        <?php
        for ($iLinha = 0; $iLinha < $intTotalLinhas; $iLinha++) {
            ?>
            <tr>
                <?php
                for ($iColuna = 0; $iColuna < $intTotalColunas; $iColuna++) {
                    ?>
                    <td><?php
                        echo $cartelasBingo[$iCartela][$iLinha][$iColuna];
                        ?>
                    </td>
                    <?php
                }
                ?></tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>
</body>
</html>