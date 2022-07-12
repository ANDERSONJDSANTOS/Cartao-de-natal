<script src="../assets/js/script.js"></script>


<?php
    if(isset($_GET['id'])){
        switch($_GET['id']){
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
    }
?>

<style>
.template #texto {
    position: absolute;
    top: 300px;
    left: 50px;
}
.template img {
    width: 100%;
}
#texto {
    font-family: 'Parisienne', cursive;
    font-size: 50px;
    width: 500px;
    height: 300px;

    color: #000080;
    font-weight: bold;
    word-wrap: break-word; 
}
.h1-templates {
    font-family: 'Parisienne', cursive;
    text-align: center;
    color: white;
    font-size: 80px;
}
#mensagem {
    height: 300px;
}
</style>

<div class="container-fluid">
    <h1 class="h1-templates">seu cartão</h1>
    <div class="row">
        <div class="col-md-6 template">
            <img src="<?php echo $src_cartao ?>" class="img-fluid"  alt="template" />
            <div id="texto"></div>
        </div>
        <div class="col-md-6">
            <form action="../banco/salvar_dados.php" method="POST">
                <input type="text" class="form-control" placeholder="digite sua mensagem" name="texto" id="mensagem" oninput="escrever()" maxlength="150" required />
                <input type="email" class="form-control" placeholder="email" name="email" required>
                <input type="hidden" name="cartao" value="<?php echo $_GET["id"] ?>" /> <!-- passando qual cartão-->
                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
<script>
    function escrever () {
        var digitado = window.document.getElementById('mensagem').value
        var texto = window.document.getElementById('texto')
        texto.innerHTML = digitado
    }
</script>

 

