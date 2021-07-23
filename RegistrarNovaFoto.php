<?php
// Adicionando a conexão
require_once "conexao.php";
if (isset($_POST['enviar'])) {
    $formatos_permitidos = array("png", "jpeg", "jpg", "gif", "jfif"); // FORMATOS DE ARQUIVOS PERMITIDOS
    $extensao = pathinfo($_FILES['caminho']['name'], PATHINFO_EXTENSION); // PEGAR A  EXTENSÃO DO ARQUIVO
    if (in_array($extensao, $formatos_permitidos)) {
        $pasta = "Fotos/"; // nome da pasta onde vai ser guardado a imagem
        $temporario = $_FILES['caminho']['tmp_name']; // arquivo temporário
        $novoNome = uniqid() . ".$extensao";
        if (move_uploaded_file($temporario, $pasta . $novoNome)) {
            // Fazendo o upload do arquivo
            echo "Upload feito com sucesso";
        } else {
            echo "Falha ao fazer o upload";
        }
    } else {
        echo  "Arquivo não suportado";
    }


    // Inserir todos dados no banco de dados 
    $nome =  mysqli_escape_string($con, $_POST['nome']);
    $fotografo = mysqli_escape_string($con, $_POST['fotografo']);
    $ano = mysqli_escape_string($con, $_POST['ano']);

    $sql = "INSERT INTO images(nome,fotografo,ano,caminho) VALUES('" . $nome . "',
   '" . $fotografo . "',
   '" . $ano . "',
   '" . $novoNome . "'
   )";
    $resultado = mysqli_query($con, $sql);
    if (!$resultado) {
        echo  "Erro ao adicionar";
    } else {
        echo "Parabéns foi adicionado uma nova foto";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fotos</title>
</head>

<body>
    <form enctype="multipart/form-data" method="POST" action="test.php"><br>
        <input type="text" name="nome" placeholder="digita o nome da foto" autofocus required><br>
        <input type="text" name="fotografo" placeholder="digita o nome da fotografo" autofocus required><br>
        <input type="text" name="ano" placeholder="digita o ano" autofocus required><br>
        <input type="file" name="caminho" placeholder="anexa uma foto" autofocus required><br>
        <button name="enviar">Upload</button>
    </form>
</body>

</html>