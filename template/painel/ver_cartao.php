<?php
    $card_id = "";
    $msg = "";

    include "../banco/config.php";
    $sql = "SELECT * FROM cartao";
    $query = $mysqli->query($sql);
    while($dados = $query->fetch_array()) {
        if ($dados['id'] == $_GET['id']) { // $_GET['id'] -> id banco
            $card_id = $dados['card_id'];
            $msg = $dados["texto"];
        }
    }

    switch($card_id){
        case '1':
            $src_cartao = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4kzVAzewV0sRbISE6LWaxHMhj-W9PBMJw8A&usqp=CAU";
        break;

        case '2':
            $src_cartao = "https://st2.depositphotos.com/1043073/5673/i/600/depositphotos_56732483-stock-photo-christmas-card.jpg";
        break;

        case '3':
            $src_cartao = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlirU_1SQDTBbY_7VOlPaTtnW3t7heVbeZJw&usqp=CAU";
        break;
    }
?>



<style>
    body { 
        background-image: url("<?php echo $src_cartao ?>");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        color: #000080;
    }
</style>>
<h1 style="text-align:center;"><?php echo $msg ?></h1>

