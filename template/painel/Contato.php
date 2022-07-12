
<form method="post" action="_scripts/salvar_contato.php">
    <div class="container-fluid">
        <h1 class="topomenu">Enviar mensagem</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome_user" required placeholder="Digite seu nome">
            </div>
            <div class="col-md-6" style="padding:10px">
                <select class="form-control" name="Assunto" required>
                   <option value="" disabled selected>Assunto...</option>
                    <option value="Reclamacao">Reclamacao</option>
                    <option value="Elogio">Elogio</option>
                    <option value="Duvida">Duvida</option>
                    <option value="Sugestao">Sugestao</option>
                </select>
            </div>
            <div class="col-md-6" style="padding:10px">
                <input type="text" class="form-control" name="Telefone" required placeholder="Telefone">
            </div>
            <div class="col-md-4" style="padding:10px">
                <input type="text" class="form-control" name="idade" required placeholder="Digite a idade">
            </div>
            <div class="col-md-4" style="padding:10px">
                <select class="form-control" name="sexo" placeholder="sexo" required>
                    <option value="" disabled selected>Sexo...</option>
                    <option value="F">FEMININO</option>
                    <option value="M">MASCULINO</option>
                </select>
            </div>
            <div class="col-md-4" style="padding:10px">
            <input type="text" class="form-control" name="email" required placeholder="Informe seu e-mail">
            </div>
            <div class="col-md-12 "  style="padding:10px">
            <input type="text" class="form-control" name="Mensagem" required placeholder="Mensagem">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </div>
</form>