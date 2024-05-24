<DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Sistema Web</title>
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
                        <p class="mb-3">Sistema Utilizado para agendamento de serviços.</p> </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="exampleInputName">
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputTel" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="exampleInputTel">
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputOrigem" class="form-label">Origem:</label>
                        <select class="form-select">
                             <option value="1">Residencial</option>
                             <option value="2">Celular</option>
                             <option value="3">Fixo</option>
                        </select>
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputData" class="form-label">Data do Contato</label>
                        <input type="date" class="form-control" id="exampleFormData">
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputOb" class="form-label">Observação</label>
                        <textarea class="form-control" id="exampleInputIb" rows="3"></textarea>
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col">
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                    </div>          
                </div>
            </div>
       </section>
    </body>
</html>