
<?php
 include_once("conexao.php");
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe e valida os dados do formulário
    $nome = trim($_POST['nome']);
    $preco = trim($_POST['preco']);


    // Lida com o upload da imagem
    $imagem = $_FILES['imagem']['name'];
    $imagemTmp = $_FILES['imagem']['tmp_name'];
    $imagemPath = 'uploads/' . basename($imagem);

    // Cria o diretório de uploads se não existir
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // Move o arquivo para o diretório de uploads
    if (!move_uploaded_file($imagemTmp, $imagemPath)) {
        die("Erro ao enviar a imagem.");
    }

    // Prepara a consulta SQL
    $sql = "INSERT INTO produtos (nome, preco, imagem) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conexao->error);
    }

    // Vincula os parâmetros e executa a consulta
    // Use "ssd" para strings e decimal
    $stmt->bind_param("ssd", $nome, $preco, $imagem);

    if ($stmt->execute()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
}

// Fecha a conexão
$conexao->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produto.css">
    <title>Cadastro de Produto</title>
</head>
<header>
<a href="index.html">  <img src="logo.png" alt="" id="logo">    </a>

</header>
<body>
    <h1>Cadastro de Produto</h1>


    <div class="info">
        <form action="produto.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required> 

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>

            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem" accept="imagem/*">

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"></textarea>

            <input type="submit" value="Cadastrar">
        </form>
   
        <hr class="break">  
    </div>
</body>
</html>