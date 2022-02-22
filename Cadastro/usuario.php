<?php
//conexão
require_once 'conexao.php';

//verficação
if(isset($_SESSION['logado'])):
  header('Location: ../Home/index.html');
endif;

//sessão 
session_start();

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($con , $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles-usuario/c-cards1.css">
    <link rel="stylesheet" href="Styles-usuario/c-nav3.css">
    <link rel="stylesheet" href="Styles-usuario/c-footer2.css">
    <link rel="stylesheet" href="Styles-usuario/c-responsivo.css">
    <link rel="shortcut icon" href="imagens/2953logo-1 2.ico" type="image/x-icon">
    <title>Game Home</title>
</head>
<body>
    <header class="container-nav"> 
      <a href=""><img class="logo-0" src="imagens/logo-1 2.png" alt=""></a> 
        <button>&#9776;</button>
        <nav class="nav">
          <a class = "nav-item" href="#">Home</a>
          <a class = "nav-item" href="#">Categorias</a>
          <a class = "nav-item" href="#"><?php if
          (isset($_SESSION['logado'])){
            print $dados['nome'];
          }else{
            print "perfil";
          }
          ;?></a>
          <a class = "nav-item" href="sair.php">Sair</a>
        </nav>
    </header>

    <section class="c-conteudo">
      <img class="img-1" src="imagens/edit -2-2.png" alt="">
      <h1 class="text-0" >As Melhores Ofertas de Jogos Estão Aqui!</h1>
      <section class="c-lojas">
        <a class="c-steam" href="https://store.steampowered.com/?l=portuguese">STEAM</a>
        <a class="c-epic" href="https://www.epicgames.com/store/pt-BR/">EPIC</a>
        <a class="c-ubisoft" href="https://www.ubisoft.com/pt-br/">UBISOFT</a>
      </section>
    </section>

      <!--PARTE DOS CARDS -->
    <section class="container-principal">
        <h1 class="c-text">Games</h1>
        <section class="Container-cards">
        <section class="cards"> 
          <img class="img-0" src="imagens/jogos/Forzan-5.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Forza 5</h1>
            <h3 class="c-h3">Nota Critica: 9.2</h3>
            <h3 class="c-h3">Nota de Usúarios: 8.5</h3>
            <h3 class="c-h3">Preço: R$399,00</h3>
            <h3 class="c-h3">Desconto 0%</h3>
            <h3 class="c-h3"></h3>
            <a class="btn-0" href="https://store.steampowered.com/app/1551360/Forza_Horizon_5/">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/far-cry-6.jpeg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Far Cry 6</h1>
            <h3 class="c-h3">Nota Critica: 8.9</h3>
            <h3 class="c-h3">Nota de Usúarios: 8.0</h3>
            <h3 class="c-h3">Preço: R$162,49</h3>
            <h3 class="c-h3">Desconto 35%</h3>
            <a class="btn-0" href="https://store.ubi.com/br/home?ncid=2265-1367---1-pdsc-6-11-21_BR_STOR_STORE_EG_0422_DSA--17-22-7-0421-4----ID_106246----DSA+-Text_BuyNow_Text_HomePage_PORT&maltcode=ubisoftstore_convst_pdsc_google___UBISOFT+STORE____DSA+&addinfo=Google+AdWords_MULTI_CONV_Retargeting_Google+AdWords_Text_TextAd_ClickTrackerOnly_3rd_Keyword_DSA+&gclid=Cj0KCQiAuvOPBhDXARIsAKzLQ8E_2ZJKcjEwMh8WQofJCvgvSkRChmJJ_OfkDJOKAi7Cko43B_sw8aAaAiufEALw_wcB">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/cod.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Cod Vanguard</h1>
            <h3 class="c-h3">Nota Critica: 7.3</h3>
            <h3 class="c-h3">Nota de Usúarios: 3.6</h3>
            <h3 class="c-h3">Preço: R$439,00</h3>
            <h3 class="c-h3">Desconto 35%</h3>
            <a class="btn-0" href="https://store.playstation.com/pt-br/product/UP0002-PPSA01687_00-CODVULTIMATE0001/">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/fifa.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">FIFA 22</h1>
            <h3 class="c-h3">Nota Critica: 7.3</h3>
            <h3 class="c-h3">Nota de Usúarios: 1.5</h3>
            <h3 class="c-h3">Preço: R$139,60</h3>
            <h3 class="c-h3">Desconto 60%</h3>
            <a class="btn-0" href="https://store.steampowered.com/app/1506830/FIFA_22/">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/god  of war.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">God Of War</h1>
            <h3 class="c-h3">Nota Critica: 9.4</h3>
            <h3 class="c-h3">Nota de Usúarios: 9.1</h3>
            <h3 class="c-h3">Preço: R$199,00</h3>
            <h3 class="c-h3">Desconto 0%</h3>
            <a class="btn-0" href="https://store.steampowered.com/app/1593500/God_of_War/">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/minecraft.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Minecraft</h1>
            <h3 class="c-h3">Nota Critica: 9.3</h3>
            <h3 class="c-h3">Nota de Usúarios: 8.0</h3>
            <h3 class="c-h3">Preço: R$79,90</h3>
            <h3 class="c-h3">Desconto 0%</h3>
            <a class="btn-0" href="https://boostgames.store/?gclid=Cj0KCQiAuvOPBhDXARIsAKzLQ8FIHoTnMiJFMOWpVEwK_7f8kcPRiTIowX4qWk0kB8Jaa4IJtsGz6u0aAgy8EALw_wcB">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/syberpunk.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Cyberpunk-2077</h1>
            <h3 class="c-h3">Nota Critica: 8.6</h3>
            <h3 class="c-h3">Nota de Usúarios: 7.1</h3>
            <h3 class="c-h3">Preço: R$99,95</h3>
            <h3 class="c-h3">Desconto 50%</h3>
            <a class="btn-0" href="https://www.epicgames.com/store/pt-BR/p/cyberpunk-2077">Comprar</a>
          </div>
        </section>
        <section class="cards">
          <img class="img-0" src="imagens/jogos/resident.jpg" alt="">
          <div class="c-descricao">
            <h1 class="c-h1">Resident Evil Village</h1>
            <h3 class="c-h3">Nota Critica: 8.4</h3>
            <h3 class="c-h3">Nota de Usúarios: 8.5</h3>
            <h3 class="c-h3">Preço: R$239,99</h3>
            <h3 class="c-h3">Desconto 2%</h3>
            <a class="btn-0" href="https://store.steampowered.com/app/1196590/Resident_Evil_Village/">Comprar</a>
          </div>
          
        </section>
      </section>
    </section>
    
    <footer class="c-rodape">
        <a href=""><img class="logo-0-2"src="imagens/logo-1 2.png" alt=""></a>
      <div class="contatos">
        <h1 class="h1-0">Contatos</h1>
        <h3 class="h3-0">(77) 98613-0191</h3>
        <h3 class="h3-0">Gamehome.store@hotmail,com</h3>
        <h3 class="h3-0">Jardins do Paraíso, São Paulo</h3>
      </div>
      <div class="c-redes">
        <a href="#"><img class="img-redes" src="imagens/facebook.png" alt=""></a>
        <a href="#"><img class="img-redes" src="imagens/whatsapp.png" alt=""></a>
        <a href="#"><img class="img-redes" src="imagens/instagra.png" alt=""></a>
      </div>
  </footer>
</body>
</html>