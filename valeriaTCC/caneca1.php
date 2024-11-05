<?php
include_once('conexao.php');
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
 
    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome,preco,imagem) VALUES ('$nome', '$preco', '$imagem')";

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
    <link rel="stylesheet" href="caneca1.css">
    <title>Caneca amo café.</title>
    <style>
          
  header {
    background-image: url(./img/header.png);
    text-indent: -50px;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 132px;
    padding-top: 5px;
   border-bottom: 5px solid #fff458;
  }
  *{
    margin: 0;
    padding: 0;
    font-family: "Raleway", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
  }
  
  header {
    background-image: url(./img/header.png);
    text-indent: -50px;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 132px;
    padding-top: 5px;
   border-bottom: 5px solid #fff458;
  }



  #carrinho{
    width: 120px;
    margin-top: 6px;
    position:absolute ;
    right: 30px;
   }


   #icon{
   width: 120px;
   margin-top: 6px;
   position: absolute;
   right: 17%;
   }

   #zape{
   width: 120px;
   margin-top: 6px;
   position:absolute; 
   right: 9%;
   }


  #logo{
    width: 137px;
    margin-left: 50px;
    margin-top: -5px;
    position: absolute;
  }

 





          body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
              background-color: #f7c8e3;
              
              
          }
          .info{
              max-width: 1100px;
              margin: 100px ;
              background-color: #eaeaea;
              padding: 20px;
              margin-left: 17%;
              border: 1px solid #eaeaea;
              border-radius: 5px;
              display: flex;
              border: 5px solid rgb(117, 177, 255);
             
              
          }
          
          .info img{
              width: 50%;
              border: 2px solid #9e9e9e;
              transition: transform 0.3s ease;
        cursor: pointer;
               
          }
  
         .info img:hover{
            transform: scale(1.1);
         }



          .texto{
              display: inline;
              margin: 20px;
              padding-bottom: 20px;
              font-size: 20px;
          }
  
          .texto h1{
              font-size: 45px;
              padding-bottom: 30px;
          }
          .texto h3{
              font-size: 25px;
          }
          .texto p{
              font-size: 20px;
              padding-top: 20px;
              padding-bottom: 20px;
          }
        
  
        
          .break{
              width: 0.1px;
              height: 550px;
              background-color: #000000;
              justify-content: center;
              align-items: center;
              margin-left: 20px;
          }
  
  
          #sacola{
            margin-top:220px;
            padding: 10px;
            cursor: pointer;
            color: #4d4d4d;
            font-size: 20px;
            width: 100%;
            background-color: #eedcc2;
            border-radius: 5px;
            border:2px solid #9b8c65;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;


          
          }  
  
          #sacola:hover{
              background-color: #ecd0a9;
              transition: 0.3s;
              color: #4d4d4d;
              border: 1px solid #eedcc2; 
          }
  
          
          #contador{
              padding: 2rem;
              border-radius: 8px;
              width: 14rem;

              
          }
          #value{
              font-size: 2rem;
              color: #333333;  
              min-width: 14rem; 
              text-align: center;     
          }
          button {
              border: none;
              border-radius: 4px;
              color: #000000;
              font-weight: 400px;
              cursor: pointer;
              font-size: 20px;
              background-color: #ecd0a9;
              border:2px solid #9b8c65;
              width: 230px;
              height: 7%;
              margin-top: 30%;
              
             
              
          }
          button:hover{
            background-color: #ecd0a9;
            transition: 0.3s;
            color: #4d4d4d;
            border: 1px solid #eedcc2;

          }
          .botao{
              width: 2rem;
              height: 2rem;
          }
  
          footer {
      background-color: #eacded;
      color: #300a35;
      text-align: center;
      padding: 10px 0;
      font-family: 'Abril Fatface', serif;
     
  }
  #contador{
    margin-left:50%;
    margin-top:-30%;
  }


    </style>
</head>



<body>


    <header> 
      
       <a href="index.html">  <img src="./img/logo.png" alt="" id="logo">    </a>
              
       <a href="carrinho.php"> <img src="./img/carrinho1.png" alt="" id="carrinho"></a>
       <a href="cadastro.php"> <img src="./img/icon1.png" id="icon"></a>
       <a href=""><img src="./img/zape1.png" id="zape"></a>
        </header> 
    

    <div class="info">
        <img src="./img/cafe.png" alt="">
        <hr class="break">  
        <div class="texto">
            <form action=""></form>
        <h1>Caneca amo café</h1>
        <h3>R$59,00</h3>
    
            <div id="contador">
                <div id="contador">
                    <button id="mais" class="botao" >+</button>
                    <span id="value">0</span>
                    <button id="menos" class="botao">-</button>
                </div>
            </div>
            <button onclick="addToCart(1, 1)" > Adicionar ao Carrinho</button>
            </form>
        </div>
    </div>
    

    <footer>
        <p>&copy; KANEKINHA'S 2024</p>
    </footer>
</body>
</html>