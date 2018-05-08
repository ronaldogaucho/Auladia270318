<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício do Array</title>
</head>
<body>
<?php

$arrAlunos = [];

$arrAluno1 = ['nome' => 'Galileu Galilei',
    'CPF' => '2045474841',
    'telefone' => '(97) 2866-4147'];

$cadeiraAluno1 = [['nome_cadeira' => 'Sistemas WEB', 'notas' => [8, 9, 10]],
    ['nome_cadeira' => 'Programação Orientada a Objetos', 'notas' => [10, 10, 10]],
    ['nome_cadeira' => 'Banco de Dados', 'notas' => [8.5, 9, 10]]];

$arrAluno1 ['cadeiras'] = $cadeiraAluno1;

$arrAlunos[] = $arrAluno1;

$arrAluno2 = ['nome' => 'Ronaldo Zydeck',
    'CPF' => '01079949097',
    'telefone' => '(55) 99985-4511'];

$cadeiraAluno2 = [['nome_cadeira' => 'Sistemas WEB', 'notas' => [1, 2, 3]],
    ['nome_cadeira' => 'Programação Orientada a Objetos', 'notas' => [0, 1, 2]],
    ['nome_cadeira' => 'Banco de Dados', 'notas' => [3, 2, 1]]];

$arrAluno2 ['cadeiras'] = $cadeiraAluno2;

$arrAlunos[] = $arrAluno2;

$arrAluno3 = ['nome' => 'Teodoro Vagabundo',
    'CPF' => '2045474841',
    'telefone' => '(97) 2866-4147'];

$cadeiraAluno3 = [['nome_cadeira' => 'Sistemas WEB', 'notas' => [0, 0, 0]],
    ['nome_cadeira' => 'Programação Orientada a Objetos', 'notas' => [0, 0, 0]],
    ['nome_cadeira' => 'Banco de Dados', 'notas' => [1, 1, 1]]];

$arrAluno3 ['cadeiras'] = $cadeiraAluno3;

$arrAlunos[] = $arrAluno3;


//echo '<pre>' . print_r($arrAlunos, true) . '</pre>';

?>

<style>
    table, th, td {
        border: 2px solid DarkViolet;
    }
</style>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Matéria</th>
        <th>Notas</th>
    </tr>

    <?php

    $totalAlunos = count($arrAlunos);

    for ($i = 0; $i < $totalAlunos; $i++) {

        echo '<tr>
<td rowspan="' . (count($arrAlunos[$i]['cadeiras']) * 3) . '">' . $i . '</td>
<td rowspan="' . (count($arrAlunos[$i]['cadeiras']) * 3) . '">' . $arrAlunos[$i]['nome'] . '</td>
<td rowspan="' . (count($arrAlunos[$i]['cadeiras']) * 3) . '">' . $arrAlunos[$i]['CPF'] . '</td>
<td rowspan="' . (count($arrAlunos[$i]['cadeiras']) * 3) . '">' . $arrAlunos[$i]['telefone'] . '</td>';


        $nota = $arrAlunos[$i]['cadeiras'][0]['notas'][0];


        echo '<td rowspan="3">' . $arrAlunos[$i]['cadeiras'][0]['nome_cadeira'] . '</td>
<td ' . (($nota < 9) ? 'class="notaRuim"' : '') . '>' . $nota . '</td></tr>';

        for ($l = 1; $l < 3; $l++) {

            $nota = $arrAlunos[$i]['cadeiras'][0]['notas'][$l];

            echo '<tr><td ' . (($nota < 9) ? 'class="notaRuim"' : '') . '>' . $nota . '</td></tr>';

        }

        $totalCadeiras = count($arrAlunos[$i]['cadeiras']);

        for ($j = 1; $j < $totalCadeiras; $j++) {

            $nota = $arrAlunos[$i]['cadeiras'][$j]['notas'][0];

            echo '<tr><td  rowspan="3">' . $arrAlunos[$i]['cadeiras'][$j]['nome_cadeira'] . '</td>
      <td  ' . (($nota < 9) ? 'class="notaRuim"' : '') . '>' . $nota . '</td></tr>';

            for ($l = 1; $l < 3; $l++) {
                $nota = $arrAlunos[$i]['cadeiras'][$j]['notas'][$l];

                echo '<tr><td ' . (($nota < 9) ? 'class="notaRuim"' : '') . '>' . $nota . '</td></tr>';
            }
        }
    }
    ?>
</table>

</body>
</html>