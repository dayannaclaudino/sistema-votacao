<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>


<div class="container py-3 d-flex justify-content-center">
<div class="table-wrapper col-md-9">   
      <h2>Chapas</h2>
      <p>Lista de chapas cadastradas.</p>
      
      <div class="table-responsive py-3 ">         
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Código</th>
            <th>Código da Chapa</th>
            <th>Nome da Chapa</th>
            <th>Líder</th>
            <th>Vice-Líder</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM chapas";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs) ){

      
        ?>
          <tr>
            <td><?=$dados["id"] ?></td>
            <td><?=$dados["nome_chapa"] ?></td>
            <td><?=$dados["codigo_chapa"] ?></td>
            <td><?=$dados["nome_lider"] ?></td>
            <td><?=$dados["nome_vice_lider"] ?></td>
          </tr>
    <?php
      }
      ?>

        </tbody>
      </table>
      </div>
</div>
</div>
</body>

</html>