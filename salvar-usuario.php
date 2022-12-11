<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];

        $sql = "INSERT INTO cadastrados (nome, cpf, email) 
                VALUES ('{$nome}', '{$cpf}', '{$email}')";

        $res = $conn -> query($sql);

        if($res == true){
            print "<script>alert('CADASTRADO COM SUCESSO');</script>";
            print "<script>location.href='?page=listar'</script>";
        }else{
            print "<script>alert('CADASTRADO NÃO CONCLUIDO');</script>";
            print "<script>location.href='?page=novo'</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        
        $sql = "UPDATE cadastrados SET 
                        nome = '{$nome}',
                        cpf = '{$cpf}',
                        email = '{$email}'
                        WHERE
                         cpf=".$_REQUEST["cpf"];
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('ALTERADO COM SUCESSO');</script>";
            print "<script>location.href='?page=listar'</script>";
        }else{
            print "<script>alert('CADASTRADO NÃO ALTERADO');</script>";
            print "<script>location.href='?page=novo'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM cadastrados WHERE cpf=".$_REQUEST["cpf"];
        
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('APAGADO COM SUCESSO');</script>";
            print "<script>location.href='?page=listar'</script>";
        }else{
            print "<script>alert('CADASTRADO NÃO APAGADO');</script>";
            print "<script>location.href='?page=novo'</script>";
        }
        break;    
    }