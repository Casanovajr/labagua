<?php
session_start();
require 'admin/functions/db.php';

function convertPngToJpg($pngFilePath)
{
  if (!file_exists($pngFilePath)) {
    throw new Exception("O arquivo PNG não foi encontrado: " . $pngFilePath);
  }

  $image = imagecreatefrompng($pngFilePath);
  if (!$image) {
    throw new Exception("Erro ao carregar a imagem PNG.");
  }

  $width = imagesx($image);
  $height = imagesy($image);

  $jpgImage = imagecreatetruecolor($width, $height);
  $white = imagecolorallocate($jpgImage, 255, 255, 255);
  imagefill($jpgImage, 0, 0, $white);
  imagecopy($jpgImage, $image, 0, 0, 0, 0, $width, $height);

  // Diretório na Hostinger
  $tempDir = $_SERVER['DOCUMENT_ROOT'] . '/temp_images/';
  if (!file_exists($tempDir)) {
    mkdir($tempDir, 0777, true);
  }

  if (!is_writable($tempDir)) {
    throw new Exception("A pasta de destino não tem permissão de escrita: " . $tempDir);
  }

  // Criar arquivo temporário
  $tempJpgFile = $tempDir . uniqid('converted_', true) . '.jpg';

  if (!imagejpeg($jpgImage, $tempJpgFile, 90)) {
    throw new Exception("Erro ao salvar a imagem JPG.");
  }

  imagedestroy($image);
  imagedestroy($jpgImage);

  return $tempJpgFile;
}




// Processamento do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $lattes = $_POST['lattes'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
      $foto_temp = $_FILES['foto']['tmp_name'];
      $foto_type = $_FILES['foto']['type'];

      // Debug: Tipo de imagem
      error_log("Tipo da imagem enviada: " . $foto_type);

      // Se for PNG, converte para JPG
      if ($foto_type == 'image/png') {
        $foto_temp = convertPngToJpg($foto_temp);
      }

      // Lê o conteúdo da imagem convertida
      $foto_data = file_get_contents($foto_temp);
      if (!$foto_data) {
        throw new Exception("Erro ao ler o conteúdo da imagem.");
      }

      // Prepara a query para inserir no banco de dados
      $sql = "INSERT INTO membros (nome, cargo, lattes, foto) VALUES (?, ?, ?, ?)";
      $stmt = $connection->prepare($sql);
      if (!$stmt) {
        throw new Exception("Erro ao preparar a query: " . $connection->error);
      }

      // Usa 'b' para indicar que o quarto parâmetro é um BLOB
      $null = NULL;
      $stmt->bind_param("sssb", $nome, $cargo, $lattes, $null);
      $stmt->send_long_data(3, $foto_data);

      if ($stmt->execute()) {
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso! Aguarde aprovação.";
      } else {
        throw new Exception("Erro ao cadastrar membro: " . $stmt->error);
      }

      // Remove o arquivo temporário, se foi criado
      if ($foto_type == 'image/png' && file_exists($foto_temp)) {
        unlink($foto_temp);
      }
    } else {
      throw new Exception("Erro ao fazer upload da foto.");
    }
  } catch (Exception $e) {
    $_SESSION['mensagem'] = $e->getMessage();
    error_log("Erro no upload: " . $e->getMessage());
  }

  header("Location: cadastro_membro.php");
  exit();
}


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Membro</title>
</head>

<body>
  <h1>Cadastro de Membro</h1>
  <?php if (isset($_SESSION['mensagem'])): ?>
    <p><?= $_SESSION['mensagem']; ?></p>
    <?php unset($_SESSION['mensagem']); ?>
  <?php endif; ?>
  <form action="cadastro_membro.php" method="post" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>
    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo" required><br>
    <label for="lattes">Link Lattes:</label>
    <input type="url" name="lattes" required><br>
    <label for="foto">Foto:</label>
    <input type="file" name="foto" accept="image/*" required><br>
    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>