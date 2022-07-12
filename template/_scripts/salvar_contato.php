<?php include "../header.php"; ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

if(!empty($_POST)){
    include "config.php";
    $nome = $_POST['nome_user'];
    $Assunto = $_POST['Assunto'];
    $Telefone = $_POST['Telefone'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $Mensagem= $_POST['Mensagem'];

    $sql = "INSERT INTO cad_mensagem (nome,Assunto,Telefone,idade,sexo,email,Mensagem) 
    values ('$nome','$Assunto','$Telefone','$idade','$sexo','$email','$Mensagem')";
    $query = $mysqli->query($sql);

    if($query){
?>
    <script type="text/javascript">
        Swal.fire({
        title: 'Salvo',
        text: 'Mensagem enviada com sucesso',
        icon: 'success',
        confirmButtonText: 'Ok'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.href="../painel.php?rota=painel";
        } 
        })
    </script>


<?php
    }else{
?>
        <script type="text/javascript">
        Swal.fire({
        title: 'Erro ( ͡° ͜ʖ ͡°)',
        text: 'Houve um erro. Por favor, entre em contato com os desenvolvedores pelo e-mail xmas@gmail.com',
        icon: 'error',
        confirmButtonText: 'Ok'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.href="../painel.php?rota=painel";
        } 
        })
    </script>

<?php
    }

}else{

    echo "Página sem registros";
}




?>