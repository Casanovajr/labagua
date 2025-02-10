<?php
session_start();
require 'admin/functions/db.php';

// Função para converter PNG para JPG
function convertPngToJpg($pngFilePath)
{
  // Carrega a imagem PNG
  $image = imagecreatefrompng($pngFilePath);

  // Cria uma nova imagem JPG com fundo branco
  $jpgImage = imagecreatetruecolor(imagesx($image), imagesy($image));
  $white = imagecolorallocate($jpgImage, 255, 255, 255);
  imagefill($jpgImage, 0, 0, $white);
  imagecopy($jpgImage, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));

  // Salva a imagem JPG em um arquivo temporário
  $tempJpgFile = tempnam(sys_get_temp_dir(), 'converted_') . '.jpg';
  imagejpeg($jpgImage, $tempJpgFile, 90); // 90 é a qualidade da imagem

  // Libera a memória
  imagedestroy($image);
  imagedestroy($jpgImage);

  return $tempJpgFile;
}

// Processamento do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $cargo = $_POST['cargo'];
  $lattes = $_POST['lattes'];

  // Verifica se o arquivo foi enviado
  if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto_temp = $_FILES['foto']['tmp_name'];
    $foto_type = $_FILES['foto']['type'];

    // Verifica se a imagem é PNG
    if ($foto_type == 'image/png') {
      // Converte PNG para JPG
      $foto_temp = convertPngToJpg($foto_temp);
    }

    // Lê o conteúdo binário da imagem
    $foto_data = file_get_contents($foto_temp);

    // Prepara a query para inserir no banco de dados
    $sql = "INSERT INTO membros (nome, cargo, lattes, foto) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Usa 'b' para indicar que o quarto parâmetro é um BLOB
    $null = NULL;
    $stmt->bind_param("sssb", $nome, $cargo, $lattes, $null);

    // Envia o binário da imagem
    $stmt->send_long_data(3, $foto_data);

    if ($stmt->execute()) {
      $_SESSION['mensagem'] = "Cadastro realizado com sucesso! Aguarde aprovação.";
    } else {
      $_SESSION['mensagem'] = "Erro ao cadastrar membro: " . $stmt->error;
    }

    // Remove o arquivo temporário se foi criado
    if ($foto_type == 'image/png') {
      unlink($foto_temp);
    }
  } else {
    $_SESSION['mensagem'] = "Erro ao fazer upload da foto.";
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