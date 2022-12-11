<h1>EDITAR USUARIO</h1>
<?php
    $sql = "SELECT * FROM cadastrados WHERE cpf=".$_REQUEST["cpf"];
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="cpf" value="<?php print $row -> cpf; ?>">
    
    <div class="mb-3">
        <label>NOME</label>
        <input type="text" name="nome" value="<?php print $row -> nome; ?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="<?php print $row -> cpf; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>EMAIL</label>
        <input type="email" name="email" value="<?php print $row -> email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">ENVIAR</button>
    </div>
</form>