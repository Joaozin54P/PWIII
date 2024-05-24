<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Agendamento - Consultar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
  <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <nav class="navbar navbar-expand-lg bg-primary mb-4" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#" >Sistema Web</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="Cadastrar.blade.php">Cadastrar</a>
                                        </li>
                                          <a class="nav-link" href="Consulta.blade.php">Consultar</a>
                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
    <div class="row">
<div class="col">
<div class="shadow-none p-3 mb-5 bg-light rounded"><p class="mb-3 fs-5">Cadastrar - Agendamento de Potenciais Clientes</p>
<p class="mb-3">Sistema Utilizado para agendamento de serviços.</p></div>
</div>
</div>
  <div class="container text-center table-responsive">
    <div class="row">
      <div class="col">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereco</th>
                <th scope="col">Bairro</th>
                <th scope="col">CEP</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ação</th>
            </thead>
            
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Rua São José,425</td>
                <td>Distrito Industrial</td>
                <td>69920-217</td>
                <td>Rio Branco</td>
                <td>AC</td>
                <td>Nenhuma</td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>Jéssica</td>
                <td>Travessa Dois,793</td>
                <td>Vila Embratel</td>
                <td>65081-304</td>
                <td>São Luís</td>
                <td>MA</td>
                <td>Nenhuma</td>
              </tr>
            </tbody>
        </table>
    </div>
      </div>
        </div>
  
  </body>
</html>