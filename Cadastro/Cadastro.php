<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Styles-usuario/cadastro-style.css">
    <link rel="shortcut icon" href="imagens/2953logo-1 2.ico" type="image/x-icon">
</head>
<body>
    <section class="c-principal">
    <img  class="img-1" src="imagens/img-cadastro-1.png" alt="">

    <form class="c-forms" method="POST" action="cadastrar-usuario.php">
        <div class="c-text-0">
            <h1 class="c-text">Cadastre-se</h1>
        </div>
        <input class="i-forms" name="nome" type="text" placeholder="Nome">
        <input class="i-forms" name="email" type="email" placeholder="E-mail">
        <input class="i-forms" name="senha" type="password" placeholder="Senha">
        <input class="i-forms" name="data_nasc" type="date" placeholder="Data de Nascimento">
        <button class="btn" name="enviar" type="submit">Cadastrar</button>
    </form>
    </section>
</body>
</html>
