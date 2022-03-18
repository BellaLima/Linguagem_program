<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 2</title>
  </head>
  <body class="container">
    <h1>Exercicio 2</h1>
    <form action="resposta.php" method="POST">
    <div class="row">
        <div class="col-3">
            <label for="quilo" class="label-control">Informe o valor do quilo: </label>
            <input type="number" name="quilo" id="quilo" class="form-control"/>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <label for="consumo" class="label-control">Informe a quantidade consumida: </label>
            <input type="double" name="consumo" id="consumo" class="form-control"/>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </div>

    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>