<?php
include_once('conexao.php');
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha']; 

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome,email,celular,senha,tipo) VALUES ('$nome', '$email', '$celular', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }
}

// Fechar conexão
$conexao->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f1cdcd;
    font-family: "Raleway", sans-serif;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

header {
    background-image: url(./img/header.png);
    width: 100%;
    height: 134px;
    padding-top: 20px;
    margin-top: -180px;
    border-bottom: 5px solid #fff458;
    display: flex;
    justify-content: space-between; /* Espaça logo e ícones */
    align-items: center;
    padding: 0 50px;
}

#logo {
    width: 130px;
}

.header-icons {
    display: flex;
    gap: 15px; /* Espaço entre os ícones */
    align-items: center;
}

.header-icons img {
    width: 120px;
}

main {
    max-width: 100%;
    margin: 90px;
    padding: 10px;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 50px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-weight: bold;
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    width: 100%;
    background-color: #FF69B4;
    color: white;
    padding: 10px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #DB7093;
}

.cadastro, .login {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.break {
    width: 1px;
    height: 340px;
    background-color: #000;
    align-self: center;
}

/* Estilo da imagem do olho */
.senhaInput {
    cursor: pointer;
    position: absolute;
    right: 30px;
    top: 48px;
    width: 20px;
}

form div {
    position: relative;
    width: 100%;
}

footer {
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #eacded;
    height: 100px;
    position: relative;
    position: fixed;
}

footer p {
    padding-top: 28px;
}

/* Responsividade */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .break {
        display: none;
    }
}
</style>
</head>
<body>

<header>
<a href="index.php"><img src="./img/logo.png" alt="Logo" id="logo"></a>
    <div class="header-icons">
        <a href="carrinho.php"><img src="./img/carrinho1.png" alt="Carrinho" id="carrinho"></a>
        <a href="cadastro.php"><img src="./img/icon1.png" alt="Cadastro" id="icon"></a>
        <a href=""><img src="./img/zape1.png" alt="zape" id="zape"></a>
    </div>
</header>

<main>
    <div class="container">
        <div class="cadastro">
            <h2>Cadastro</h2>
            <form method="post" action="cadastro.php">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Coloque seu nome aqui" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Coloque seu email aqui" required>
                <label for="celular">Celular</label>
                <input type="tel" id="celular" name="celular" placeholder="11 99999-9999" required>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Coloque sua senha aqui" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="break"></div>

        <div class="login">
            <h2 id="Login">Login</h2>
            <form method="post" action="sistema.php">
                <label for="email.log">Email</label>
                <input type="email" id="email.log" name="email" required placeholder="Coloque seu email aqui">
                <label for="senha.log">Senha</label>
                <input type="password" id="senhaInput" name="senha" placeholder="Coloque sua senha aqui" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2023 Kanequinha's<br>Nos siga no Instagram!</p>
</footer>

</body>
</html>
