<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Usuários</title>

  </head>
  <body>

<table border="1">
  <thead>
    <th>Código</th><th>Nome</th><th>Apelido</th><th>E-mail</th><th></th>
  </thead>
  <tbody>
    <?php
    require_once "banco.php";
    $sql = "select codigo, nome, apelido, email, telefone from registros";
    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['codigo']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['telefone']."</td>";
      echo "</tr>";
    }



    ?>
  </tbody>
</table>
      <form  action="remover.php" method="post" >
        <div>
          <input type="text" name="codigo"  placeholder="Codigo"><a href="cadastrar.php"><input type="submit" class="btn" value="Excluir" ></a>
        </div>
    </form>




  </body>
</html>
