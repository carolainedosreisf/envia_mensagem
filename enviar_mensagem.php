<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projeto de PHP 01</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>


<?php require "conexao.php"; ?>

</head>

<body>


<h2>Enviar mensagem!</h2>
    <form action="" class="form_01" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Nome"><br>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone"><br>
        <input type="text" name="email" id="email" placeholder="E-mail"><br>
        <input type="text" name="assunto" id="assunto" placeholder="Assunto"><br>
        <textarea name="mensagem" cols="30" id="mensagem" rows="10" placeholder="Mensagem"></textarea><br>
        <input class="input" type="submit" name="enviar" id="enviar" class="enviar" value="Enviar">
    </form>
    <div class="alert-red">
        <div class="alert-red-dentro">
            <button type="button" class="fechar-red" aria-hidden="true">×</button>
            <span class="fa fa-times-circle erro-x-red"></span>
            <p>Por favor preencha todos os campos!</p>
        </div>
    </div>
    <div class="alert-green">
        <div class="alert-green-dentro">
            <button type="button" class="fechar-green" aria-hidden="true">×</button>
            <span class="fa fa-check-circle erro-x-green"></span>
            <p>Mensagem enviada com sucesso!</p>
        </div>
    </div>    
<?php
    if(isset($_POST['enviar'])){
        $data = date('d/m/Y H:i:s', strtotime('-3 hour'));
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
    }
?>
<script>
    var alert_red = document.querySelector('.alert-red-dentro');
    var alert_green = document.querySelector('.alert-green-dentro');
    function msg_erro(){
        alert_red.style.display = 'block';
        setTimeout(function(){ alert_red.style.display = 'none'; }, 5000);
    }
    function msg_sucesso(){
        alert_green.style.display = 'block';
        setTimeout(function(){ alert_green.style.display = 'none'; }, 5000);
        setTimeout(function(){ window.location="enviar_mensagem.php"; }, 5001);
        
    }
    
    function guarda_dados(){
        var nome = "<?php print $nome; ?>";
        var telefone = "<?php print $telefone; ?>";
        var email = "<?php print $email; ?>";
        var assunto = "<?php print $assunto; ?>";
        var mensagem = "<?php print $mensagem; ?>";
        document.querySelector('#nome').value = nome;
        document.querySelector('#telefone').value = telefone ;
        document.querySelector('#email').value =  email;
        document.querySelector('#assunto').value = assunto ;
        document.querySelector('#mensagem').value = mensagem ;      
    }
    $(document).ready(function(){
        $(".fechar-red").click(function(){
            alert_red.style.display = 'none';
        });
    });
    $(document).ready(function(){
        $(".fechar-green").click(function(){
            alert_green.style.display = 'none';
            window.location="enviar_mensagem.php";
        });
    });
    
</script>
<?php 
    if(isset($_POST['enviar'])){
        
        if ($nome != '' && $telefone != '' && $email != '' &&  $assunto != '' && $mensagem != ''){
            $sql_2 = "INSERT INTO mensagens (datas,nome, telefone, email, assunto, mensagem) VALUES ('$data','$nome','$telefone', '$email', '$assunto', '$mensagem')";
            $cad = mysqli_query($conexao, $sql_2);
            echo "<script type='text/javascript'>msg_sucesso();</script>";
           
        }else{
            echo "<script type='text/javascript'>msg_erro();</script>";
            echo "<script type='text/javascript'>guarda_dados();</script>";
            
        }
       
    }
?>


  
</body>
</html>
