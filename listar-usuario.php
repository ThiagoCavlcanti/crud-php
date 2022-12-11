<h1>LISTA DE CADASTRADOS</h1>

<?php
    $sql = "SELECT * FROM cadastrados";
    
    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped'>";
        print "<tr>";
            print "<th>NOME</th>";
            print "<th>CPF</th>";
            print "<th>EMAIL</th>";
            print "<th>OPÇÕES</th>";
            print "</tr>";
        while($row = $res -> fetch_object()){
            print "<tr>";
            print "<td>".$row -> nome. "</td>";
            print "<td>".$row -> cpf. "</td>";
            print "<td>".$row -> email. "</td>";
            print "<td>  <button onclick=\"location.href='?page=editar&cpf=".$row->cpf."';\"class='btn-secondary'>EDITAR</button> 
                         
                         <button  <button onclick=\"if(confirm('DESEJA APAGAR ESTE USUÁRIO?')){location.href='?page=salvar&acao=excluir&cpf=".$row->cpf."';}else{false}\"class='btn-danger'>APAGAR</button>                
            </td>";
            print "</tr>";
        }
        print"</table>";
    }else {
        print "<p>NENHUM RESULTADO ENCONTRADO</p>";
    }