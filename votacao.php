<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
</br>
<div class="container d-flex justify-content-center col-md-5">
  <div class="card ">
    <h5 class="card-header">Votação</h5>
    <div class="card-body">
        <p class="card-text">Insira sua matrícula e escolha uma chapa para votar.</p>

        <form class="row g-2 d-flex justify-content-center" action="index.php?menuop=processarVoto" method="post">
          <div class="row">
          <div class="mb-3">
                <label for="matricula_aluno" class="form-label">Matrícula do Aluno</label>
                <input type="text" class="form-control" name="matricula_aluno" id="matricula_aluno">
          </div>
          <div class="mb-3">
            <label for="chapa" class="form-label">Selecione a Chapa</label><br>   
                <?php
                    include 'funcoes.php';
                    $chapas = listarChapas();
                    foreach ($chapas as $chapa) {
                        echo "<input type='radio' name='chapa_id' value='{$chapa['id']}'> {$chapa['nome_chapa']}<br>";
                    }
                ?>
          </div>
          </div>

            <div class="d-grid gap-2 col-8 mx-auto">
                <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>
    </div>
    </div>
</div>

</body>
</html>