<?php
require_once "banco.php";
$codigo = $_POST['codigo'];
try{
  $sql = "DELETE FROM registros WHERE codigo=:codigo";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':codigo', $codigo);
if ($stmt->execute())
  include ("listar.php");
else
  echo "Falhou";
}catch(PDOException $e) {
echo 'Erro: ' . $e->getMessage();
}
?>
