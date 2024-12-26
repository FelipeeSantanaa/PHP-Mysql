<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <title>Form PHP</title>

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro-script.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="">Nome completo</label>
                        <input type="text" class="form-control" placeholder="Digite seu Nome" name="nome" Required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="">Endereço</label>
                        <input type="text" class="form-control" placeholder="Digite seu endereço" name="endereco">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="">Telefone</label>
                        <input type="text" class="form-control" placeholder="Digite seu telefone" name="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="">Email</label>
                        <input type="email" class="form-control" placeholder="Digite seu E-mail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="data-nascimento" class="">Data de Nascimento</label>
                        <input type="date" class="form-control" placeholder="Qual sua data de nascimento?" name="data-nascimemto">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-seccess" name="Telefone">
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>