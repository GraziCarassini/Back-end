<h1> editar usuários</h1>

<?php
    $sql = "SELECT * FROM usuario WHERE id_usuario = ".$_REQUEST['id'];

    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

  <form action="?page-salvar" method="post">
      <input Type="hidden" name="acao" value="editar">

      <input type="hidden" name="id" value="<?php print $row->id_usuario?>">
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
          