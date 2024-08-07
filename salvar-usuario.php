<?php 

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO usuario(nome,email,senha,data_nasc)
        VALUES
        ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$_POST['data_nasc']}')";

        $result = $conn->query($sql);

        if($result==true){
            print("<script>alert('Cadastrado com sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        }

        else{
            print("<script>alert('Não foi possível cadastar!')</script>");
        }
        break;

    case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];
        $id_usuario = $_REQUEST["id"];
    

        $sql = "UPDATE usuario SET
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                    WHERE id_usuario={$id_usuario}";

         $result = $conn->query($sql);

         if ($result === true) {
            echo "<script>alert('Usuário atualizado com sucesso!')</script>";
            echo "<script>location.href='?page=listar'</script>";
        } else {
            echo "<script>alert('Não foi possível atualizar o usuário!')</script>";
        }
        break;

    case "excluir":
        $id_usuario = $_REQUEST["id"];
        
        $sql = "DELETE FROM usuario WHERE id_usuario={$id_usuario}";
        
        $result = $conn->query($sql);
        
        if ($result === true) {
            echo "<script>alert('Usuário excluído com sucesso!')</script>";
            echo "<script>location.href='?page=listar'</script>";
        } else {
            echo "<script>alert('Não foi possível excluir o usuário!')</script>";
        }
        break;
        
    default:
        echo "<script>alert('Ação não reconhecida!')</script>";
        break;
        }
    
    ?>


}