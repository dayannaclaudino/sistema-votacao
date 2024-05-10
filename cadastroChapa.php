
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

</br>
<div class="container col-md-7">
    <div class="card ">
    <h5 class="card-header">Cadastro Chapa</h5>
    <div class="card-body">
        <p class="card-text">Insira os dados da chapa.</p>

        <form class="row g-2 d-flex justify-content-center" action="index.php?menuop=inserirChapa" method="post">
          <div class="row">
            <div class="col">
                <label for="nome_chapa" class="form-label">Nome Chapa</label>
                <input type="text" class="form-control" name="nome_chapa">
            </div>
            <div class="col">
                <label for="codigo_chapa" class="form-label">Código da Chapa</label>
                <input type="text" class="form-control" name="codigo_chapa">
            </div>
          </div>
          <div class="row">
            <div class="col">
                <label for="nome_lider" class="form-label">Nome do Líder</label>
                <input type="text" class="form-control" name="nome_lider">
            </div>
            <div class="col">
                <label for="matricula_lider" class="form-label">Matrícula Líder</label>
                <input type="text" class="form-control" name="matricula_lider">
            </div>
          </div>
          <div class="row">  
            <div class="col">
                <label for="nome_vice_lider" class="form-label">Nome do Vice Líder</label>
                <input type="text" class="form-control" name="nome_vice_lider">
            </div>
            <div class="col">
                <label for="matricula_vice_lider" class="form-label">Matrícula Vice Líder</label>
                <input type="text" class="form-control" name="matricula_vice_lider" id="matricula_vice_lider">
            </div>    
          </div>

            <div class="d-grid py-3 col-8 mx-auto">
                <input type="submit" name="btnAdicionar" class="btn btn-success" value="Salvar">
            </div>
        </form>
    </div>
    </div>
</div>

</body>
</html>