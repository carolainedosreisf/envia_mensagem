<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projeto de PHP 01</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>



<?php require "conexao.php"; ?>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="bs-example" data-example-id="table-within-panel">
            <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Mensagens</div>
            

            <!-- Table -->
            <table class="table">
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM mensagens ORDER BY id DESC";
                    $con = mysqli_query($conexao, $sql);
                    if(mysqli_num_rows($con) == ''){
                        echo "No momento não existe mensagens!";
                    }else{
                ?>
                <?php while($res_1 = mysqli_fetch_assoc($con)){
                    
                ?>

                <tr>
                
                    <td><?php echo $res_1['datas']; ?></td>
                    <td><?php echo $res_1['nome']; ?></td>
                    <td><?php echo $res_1['telefone']; ?></td>
                    <td><?php echo $res_1['email']; ?></td>
                    <td><?php echo $res_1['assunto']; ?></td>
                    <td>
                        <a href="mostra_mensagem.php?func=pega_id&id=<?php echo $res_1['id'];?>" class="mensagem"><button class=" btn-abrir"><i class="fa fa-envelope" aria-hidden="true"></i></button></a>
                    </td>
                </tr>
                

                
                <?php
                    }
                        }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>



<?php
 if(@$_GET['func'] == 'pega_id'){
    $id = $_GET['id'];
    $sql2 = "SELECT * FROM mensagens WHERE id = '$id'";
    $con2 = mysqli_query($conexao, $sql2);
    while ($res_2 = mysqli_fetch_assoc($con2)){
        
?>
        <div class="modal-fora">
        <div class="modal-dentro">
            <p><?php echo $res_2['mensagem']; ?></p>
            <button class="btn btn-default fechar" type="submit">Fechar</button>
        
        </div>
    </div>
<?php
    }

 }
?>

<script>
    var modal_mensagem = document.querySelector('.modal-fora');
    
    $(document).ready(function(){
        $(".fechar").click(function(){
            window.location = "mostra_mensagem.php";
        });
    });
</script>

</body>
</html>