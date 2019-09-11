<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Apagando arquivos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
      $dados = file('dados.csv'); /*recebendo arquivos da tabela csv*/
      for ($i=0; $i < sizeof($dados); $i++) { 
        $dados[$i] = explode(',', $dados[$i]);
      }
    ?>  
        <legend>Preencher Informações</legend>
     <form action="add.php" method="POST" style="text-align: center;">
            <fieldset>
              <input type="text" name="pais" placeholder="País"><br>
              <input type="text" name="capital" placeholder="Capital"><br>
              <input type="text" name="continente" placeholder="Continente"><br>
              <input type="submit" value="Adicionar">
            </fieldset>
    </form>

    <table>
          <tr>
            <th>País</th>
            <th>Capital</th>
            <th>Continente</th>
            <th>Apagar Dados</th> 
          </tr>

      <?php foreach ($dados as $i => $dado):?> 
         <tr>
           <?php foreach ($dado as $dados): ?>  
              <td><?= $dados ?></td>
            <?php endforeach?>
              <td>
                <a href="del.php?linha=<?= $i ?>">Remover</a>
              </td>
          </tr>
         <?php endforeach ?>
    </table>
</body>
</html>

 
