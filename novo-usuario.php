<h1> novo usuários<h1>
<div class="container col-5">
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <lable for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class = "mb-3">
        <lable for=""> E-mail</lable>
        <input type="text" name="email" class="form-control">

    </div>
    <div class = "mb-3">
        <lable for="">Senha</lable>
        <input type="password" name="senha" class="form-control">

    </div>
    <div class = "mb-3">
        <lable for="">Data de Nascimento</lable>
        <input type="date" name="data_nasc" class="form-control">

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>