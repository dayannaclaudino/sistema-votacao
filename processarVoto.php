<header class="py-3 d-flex justify-content-center">
    <h3>Votação</h3>
</header>

<div class="container py-3 d-flex justify-content-center">
<?php
include 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula_aluno = $_POST["matricula_aluno"];
    $chapa_id = $_POST["chapa_id"];
    
    // Chama a função para registrar o voto
    votar($matricula_aluno, $chapa_id);
    
    echo  '<div class="alert alert-success" role="alert">
            Voto registrado com sucesso!  </div>';
}
?>
</div>