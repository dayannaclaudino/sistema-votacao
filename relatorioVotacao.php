<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

<div class="container py-3 d-flex justify-content-center">
<div class="table-wrapper col-md-9">   
      <h2>Relatório de Votação</h2>
      <p>Resultado da votação, incluindo o número de votos para cada chapa e seu percentual de representatividade.</p>
      <div class="table-responsive py-3">         
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Código</th>
            <th>Código da Chapa</th>
            <th>Nome da Chapa</th>
            <th>Total de Votos</th>
            <th>Percentual de Votos</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include 'funcoes.php';
        $relatorio = relatorioVotacao();
        foreach ($relatorio as $chapa) {
            echo "<tr>";
            echo "<td>{$chapa['id']}</td>";
            echo "<td>{$chapa['codigo_chapa']}</td>";
            echo "<td>{$chapa['nome_chapa']}</td>";
            echo "<td>{$chapa['total_votos']}</td>";
            echo "<td>{$chapa['percentual_votos']}%</td>";
            echo "</tr>";
        }
        ?> 
  </tbody>
      </table>
      </div>
</div>
</div>
</body>

</html>