<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 5</title>
  </head>
  <body class="container">
    <h1>Exercicio 5</h1>
    <form method="post" action="resposta.php">
        <div class="row">
            <div class="col-3">
                <label class="control-label" for="nota1" >Informe a nota 1: </label>
                <input type="double" name="nota1" id="nota1" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="control-label" for="nota2" >Informe a nota 2: </label>
                <input type="double" name="nota2" id="nota2" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="control-label" for="nota3" >Informe a nota 3: </label>
                <input type="double" name="nota3" id="nota3" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="control-label" for="nota4" >Informe a nota 4: </label>
                <input type="double" name="nota4" id="nota4" class="form-control">
            </div>
        </div>
    </form>

    <div class="row mt-5">
        <div class="col">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>