<h1> listar usuarios</h1>

<?php

$sql = "SELECT * FROM usuario";

$resul=mysqli_query($conn, $sql);

$quant = $resul->num_rows;

if($quant > 0){

    print"<table class='table table-hover table-striped table-bordered'>";
        print("<tr class='text-center'>");
        print("<th> ID </th>");
        print("<th> Nome </th>");
        print("<th> e-mail </th>");
        print("<th> Data de Nascimento </th>");
        print("<th> Ações </th>");
        print("<tr>");
        
    while($row = $resul -> fetch_object()){
    print("<tr class='text-center'>");
    print("<td>" .$row->id_usuario."</td>");
    print("<td>" .$row->nome."</td>");
    print("<td>" .$row->email."</td>");
    print("<td>".date("d/m/y",strtotime($row->data_nasc))."</td>");
    print("<td> <button onclick=\"location.href='?page=editar&id=".$row->id_usuario."';
    \"class='btn btn-success me-3'> Editar </button>");
  
    print("<button onclick=\"if(confirm('Deseja Excluir?'))
    {location.href='?page=salvar&acao=excluir&id=".$row->id_usuario."';}else{false}
    \" class='btn btn-danger'> Excluir </button> </td>");
    print("</tr>");
    }
print "</table>";
} else {
print "<p class='alert alert-danger'>Não há resultados para exibir</p>";
}
?>