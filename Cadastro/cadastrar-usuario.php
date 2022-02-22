<?php
    include('conexao.php');
    
    if($con){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $sql = "INSERT INTO usuario (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";

        if(isset($_POST['enviar'])){
            $erros = array(); 
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $message = "E-mail Inválido!!";
                $erros[] = print "<script type='text/javascript'>alert('$message');";
                print "javascript:window.location='index.php';</script>";
            endif;
        
            if($name = is_numeric($nome)):
                $message = "Preenchar o campo Nome Corretamente";
                $erros[] = print "<script type='text/javascript'>alert('$message');";
                print "javascript:window.location='Cadastro.php';</script>";
            endif;
        
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo "$erro";
                endforeach;
            elseif($con->query($sql) === true):
                print "<script type='text/javascript'>alert('Cadastro Realizado');";
                print "javascript:window.location='Login.php';</script>";
            endif;
        }

    }
?>