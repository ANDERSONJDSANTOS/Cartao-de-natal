<?php
    include "config.php";

    $email = $_POST["email"];
    $texto = $_POST["texto"];
    $cartao = $_POST["cartao"];
    
    $sql = "INSERT INTO cartao (email, texto, card_id) values('$email', '$texto', '$cartao')";
    $query = $mysqli->query($sql);
    if ($query) {
        $sql = "SELECT * FROM cartao";
        $query = $mysqli->query($sql);
        while ($dados = $query->fetch_array()){ /* PEGAR id */
            if ($dados["email"] == $email and $dados["texto"] == $texto and $dados["card_id"] == $cartao) {
                header("Location: ../template/painel.php?rota=pegar_link.php&id={$dados['id']}"); 
            }
        }
    } else {
        echo "erro";
    }
?>