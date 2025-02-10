<?php
session_start();
require 'admin/functions/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $status = $_POST['status'];

  $sql = "UPDATE membros SET status = ? WHERE id = ?";
  $stmt = $connection->prepare($sql);

  if ($stmt) {
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
      if ($status == 'recusado') {
        $sql_delete = "DELETE FROM membros WHERE id = ?";
        $stmt_delete = $connection->prepare($sql_delete);
        $stmt_delete->bind_param("i", $id);
        $stmt_delete->execute();
      }
      $_SESSION['mensagem'] = "Status atualizado com sucesso!";
    } else {
      $_SESSION['mensagem'] = "Erro ao atualizar status.";
    }
  } else {
    $_SESSION['mensagem'] = "Erro ao preparar a query: " . $connection->error;
  }
}

$sql = "SELECT * FROM membros WHERE status = 'pendente'";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Solicitações de Membros</title>
</head>

<body>
  <h1>Solicitações de Membros</h1>
  <?php if (isset($_SESSION['mensagem'])): ?>
    <p><?= $_SESSION['mensagem']; ?></p>
    <?php unset($_SESSION['mensagem']); ?>
  <?php endif; ?>
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Cargo</th>
      <th>Lattes</th>
      <th>Foto</th>
      <th>Ação</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['nome']; ?></td>
        <td><?= $row['cargo']; ?></td>
        <td><a href="<?= $row['lattes']; ?>" target="_blank">Lattes</a></td>
        <td><img src="data:image/jpeg;base64,<?= base64_encode($row['foto']); ?>" alt="<?= $row['nome']; ?>" width="100"></td>
        <td>
          <form action="solicitacoes_membros.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <button type="submit" name="status" value="aprovado">Aprovar</button>
            <button type="submit" name="status" value="recusado">Recusar</button>
          </form>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>