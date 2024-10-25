

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<style>
    body {
        background-color: #f7c8e3;
        background-size: cover;
        margin: 0;
        padding: 0;
        font-family: "Raleway", sans-serif;
        text-align: center;
    }
    
    header {
        background-image: url(./img/header.png);
        text-indent: -50px;
        display: flex; /* Adicionado para alinhamento flexível */
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 132px;
        padding-top: 5px;
        border-bottom: 5px solid #fff458;
        position: relative; /* Para os elementos posicionados absolutamente */
    }
    
    #carrinho, #icon, #zape, #mais {
        width: 120px;
        position: absolute;
    }
    
    #clientes {
        right: 30px;
        margin-left:200%;
        width:30%;
      
    }
    
    #add{
        right: 17%;
       
        width:30%;
        margin-left:135%;
    }
 
    
    
    #logo {
        margin: -60px;
        width: 142px;
        position: absolute;
        left: 7%; /* Centraliza o logo */
        transform: translateX(-50%); /* Ajuste de centralização */
        margin-top: -74px;
    }
    
    main {
        max-width: 100%;
        margin: 90px auto; /* Centraliza o main */
        padding: 10px;
    }
    
    .p1, .p2 {
        display: flex;
        flex-wrap: wrap; /* Permite que os itens se ajustem em linha */
        justify-content: center; /* Centraliza os itens */
        max-width: 100%;
        margin: 20px; /* Remove margem superior */
        padding: 20px;
    }
    
    .caneca {
        background-color: rgb(238, 238, 238);
        border: 4px solid rgb(117, 177, 255);
        padding: 30px;
        margin: 15px; /* Reduz a margem */
        border-radius: 10px;
        flex: 1 1 200px; /* Permite que as canecas cresçam e encolham */   
    }
    
    .caneca img {
        width: 100%;
        height: auto; /* Mantém a proporção */
        border-radius: 20px;
        padding: 10px;
        transition: transform 0.3s ease;
        cursor: pointer;
    }
    
    .caneca img:hover {
  transform: scale(1.1);
}

    button {
        background-color: #ffc6ef;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        text-decoration: none;
        font-size: 18px;
        border-radius: 5px;
        font-family: 'Abril Fatface', serif;
    }
    
    button:hover {
        background-color: #ea82f8;
        transition: 0.3s;
    }
    
    footer {
        background-color: #e3aae9;
        color: #300a35;
        text-align: center;
        padding: 10px 0;
        font-family: 'Abril Fatface', serif;
    }
    
    /* Media Queries */
    @media (max-width: 768px) {
        #carrinho, #icon, #zape, #mais {
            width: 100px; /* Reduzir a largura em telas menores */
            right: 5%; /* Ajustar a posição */
            margin-top: 4px; /* Ajuste de margem */
        }
    
        #logo {
            width: 120px; /* Reduzir o tamanho do logo */
        }
    
        .caneca {
            flex: 1 1 100%; /* Cada caneca ocupa 100% em telas menores */
        }
    }

 



.prev {
    left: 10px;
}

.next {
    right: 10px;
}

h1{
   
}






</style>
   </head>
   <body>
   <header>


    <a href="index.html">  <img src="img/logo.png" alt="" id="logo">    </a>
    <a href="listacliente"> <img src="./img/clientes1.png" alt="" id="clientes"></a>
    <a href="addproduto.php"> <img src="./img/addcaneca1.png" id="add"></a>
    
</header>
<h1> Pagina do Administrador</h1>
<main> 
    <div class="p1">
    <section class="caneca">
    <a href="caneca1.php"  >  <img src="./img/cafe.png" alt="" id="" style="width: 290px; height: 300px;"></a>
        <h5>Caneca Amo café</h5>
        <p class="preco">R$69,90</p>

    </section>
    <section class="caneca">
        <a href="caneca2.html"  >  <img src="./img/alienigena.png" alt="" id="" style="width: 290px; height: 300px;"></a>
            <h5>Caneca Alienigena</h5>
            <p class="preco">R$80,00</p>
        </section>
      
        
    </section>
    <section class="caneca">
         <a href="caneca2.html"  >  <img src="./img/nomeC.jpg" alt="" id=""  style="width: 250px; height: 300px;"></a>
        <h5>Caneca personalizada com Nome.</h5>
        <p class="preco">R$68,90</p>
        
    </section>
    <section class="caneca">
        <a href="caneca3.html"  >  <img src="./img/psicologia.png" alt="" id="" style="width: 250px; height: 300px;"></a>
        <h5>Caneca personlizada Profissão.</h5>
        <p class="preco">R$68,90</p>
        
    </section>
</div>
<div class="p2">
    <section class="caneca">
       <a href="caneca4.html"  >  <img src="./img/2.jpeg" alt="" id="" style="width: 260px; height: 250px;"></a>
        <h5>Caneca dupla Namorados. </h5>
     
        <p class="preco">R$119,90</p>
        
    </section>
    <section class="caneca">
        <a href="caneca5.html"  >  <img src="./img/aluminio.png" alt="" id="" style="width: 260px; height: 250px;"></a>
        <h5>Caneca de Alumínio com tampa.</h5>
       
        <p class="preco">R$90,00</p>
        
    </section>
    <section class="caneca">
        <a href="caneca6.html"  >  <img src="./img/vidro.png" alt="" id="" style="width: 260px; height: 250px;"></a>
        <h5>Caneca abelha de vidro.</h5>
        
        <p class="preco">R$78,90</p>
       
    </section>
    <section class="caneca">
        <a href="caneca7.html"  >  <img src="./img/flor-seca.png" alt="" id="" style="width: 260px; height: 250px;"></a>
        <h5>Caneca de flores secas.</h5>
       
        <p class="preco">R$78,90</p>
   
    </section>


</main>

<footer>
    <p>&copy; 2023 Kanequinha's</p>
    <p>Nos siga no instagram!</p>
</footer>


  

            
  