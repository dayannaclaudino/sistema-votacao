<?php
// Arquivo de conexão com o banco de dados
$host = "localhost";
$dbname = "db_votacao";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


// Função para listar todas as chapas - Relatório de Votação
function listarChapas() {
    global $conn;
    $sql = "SELECT * FROM chapas";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para registrar o voto de um aluno
function votar($matricula_aluno, $chapa_id) {
    global $conn;
    $sql = "INSERT INTO votos (matricula_aluno, chapa_votada_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$matricula_aluno, $chapa_id]);
}

// Função para obter o resultado da votação
function relatorioVotacao() {
    global $conn;
    $sql = "SELECT chapas.*, COUNT(votos.id) as total_votos, 
            (COUNT(votos.id) / (SELECT COUNT(*) FROM votos) * 100) as percentual_votos
            FROM chapas
            LEFT JOIN votos ON chapas.id = votos.chapa_votada_id
            GROUP BY chapas.id";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>