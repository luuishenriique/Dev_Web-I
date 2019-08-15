<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela Dinamica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $pessoas = array(
            'Anita',
            'Renata',
            'Marcos',
            'Paulo',
            'Marcelo'
        );

        $enderecos = [
            'Rua 1',
            'Rua 2',
            'Rua 3',
            'Rua 4',
            'Rua 5'
        ];

        $ceps = [
            '53468-220',
            '53468-221',
            '53468-222',
            '53468-223',
            '53468-224'
        ];

        $titulos = [
            'Nome',
            'Endereço',
            'Cep'
        ];
    ?>
    <h1>Tabela com os endereços dos clientes</h1>
    <br>
    <table>
        <tr>
            <?php for ($i=0; $i<3; $i++): ?>
                <th><?= $titulos[$i] ?></th>
                <?php endfor ?>
        </tr>
        <?php for ($i=0; $i<5; $i++): ?>
            <tr>
                <td><?= $pessoas[$i] ?></td>
                <td><?= $enderecos[$i] ?></td>
                <td><?= $ceps[$i] ?></td>
            </tr>
        <?php endfor ?>
    </table>
</body>
</html>