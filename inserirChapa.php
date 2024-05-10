
<header class="py-3 d-flex justify-content-center">
    <h3>Cadastro de Chapa</h3>
</header>

<div class="container py-3 d-flex justify-content-center">
<?php
// Função para sanitizar entrada
function limpar_entrada($conexao, $entrada) {
    return mysqli_real_escape_string($conexao, $entrada);
}

// Verifica se todos os campos estão preenchidos
if (!empty($_POST["nome_chapa"]) && !empty($_POST["codigo_chapa"]) &&
    !empty($_POST["matricula_lider"]) && !empty($_POST["nome_lider"]) &&
    !empty($_POST["matricula_vice_lider"]) && !empty($_POST["nome_vice_lider"])) {

    // Limpa e valida as entradas
    $nome_chapa = limpar_entrada($conexao, $_POST["nome_chapa"]);
    $codigo_chapa = limpar_entrada($conexao, $_POST["codigo_chapa"]);
    $matricula_lider = limpar_entrada($conexao, $_POST["matricula_lider"]);
    $nome_lider = limpar_entrada($conexao, $_POST["nome_lider"]);
    $matricula_vice_lider = limpar_entrada($conexao, $_POST["matricula_vice_lider"]);
    $nome_vice_lider = limpar_entrada($conexao, $_POST["nome_vice_lider"]);

    // Consulta preparada para inserção
    $sql = "INSERT INTO chapas (nome_chapa, codigo_chapa, matricula_lider, nome_lider, matricula_vice_lider, nome_vice_lider)
            VALUES (?, ?, ?, ?, ?, ?)";
    
    // Preparar e executar a consulta
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $nome_chapa, $codigo_chapa, $matricula_lider, $nome_lider, $matricula_vice_lider, $nome_vice_lider);
    
    if (mysqli_stmt_execute($stmt)) {
        echo  '<div class="alert alert-success" role="alert">
        O registro foi inserido com sucesso!  </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Erro ao inserir o registro: 
              </div>' . mysqli_stmt_error($stmt);

    }
    
    // Fechar a declaração e conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

} else {
    echo  '<div class="alert alert-warning" role="alert">
            Por favor, preencha todos os campos!  </div>';
}
?>

</div>