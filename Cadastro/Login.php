<?php
// conexão
require_once 'conexao.php';
//sessão 
session_start();

if(isset($_POST['entrar'])){
    $erros = array();
    $login = mysqli_escape_string($con, $_POST['email']);   
    $senha = mysqli_escape_string($con, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = print "<script type='text/javascript'>alert('O campo Login/Senha Precisa ser preenchido corretamente');";
        print "javascript:window.location='Login.php';</script>";
    }else{
        $sql = "SELECT email from usuario WHERE email = '$login'";
        $resultado = mysqli_query($con, $sql);

        if(mysqli_num_rows($resultado) > 0){
            $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($con, $sql);
                if(mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($con);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: ./usuario.php');
                }else{
                    $erros[] = print "<script type='text/javascript'>alert('Email/Senha Não Conferem!');";
            print "javascript:window.location='Login.php';</script>";
                }
        } 
        else{
            $erros[] = print "<script type='text/javascript'>alert('Usuario Não Cadastrado!');";
            print "javascript:window.location='Login.php';</script>";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="Styles-usuario/login-style.css">
    <link rel="shortcut icon" href="imagens/2953logo-1 2.ico" type="image/x-icon">
</head>
<body>
    <?php
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    ?>
    <section class="c-principal">
        <img class="img-1" src="imagens/login-2.png" alt="">
        <form class="c-forms" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="c-text-0">
            <h1 class="c-text">Iniciar Sessão</h1>
            </div>
            <input class="i-forms" type="email" name="email" placeholder="E-mail">
            <input class="i-forms" name="senha" type="password" placeholder="Senha">
            <button class="btn" name="entrar">Entrar</button>
            <a class="btn-cadastro" href="Cadastro.php">Cadastra-se</a>
        </form>
    </section>
</body>
</html>