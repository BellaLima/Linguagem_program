<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>Exemplo</h1>
    <br>

   <form method="POST" action="\exemplo-resultado"> 
    <div class="row">
        <div class="col-3">
            <label class="label-control">Valor 1</label>
            <input class="form_control" name="valor1" type="text"/>
        </div>

        <div class="col-3">
            <label class="label-control">Valor 2</label>
            <input class="form_control" name="valor2" type="text"/>
        </div>
    </div>

    <br>
   
    <div class="row">
          <div class="col-4">
            <button class="btn btn-danger text-center" type="submit">enviar</button>
          </div>
        </div>
    </form>
    <br>

    <?php
    if (isset($soma))
        echo "O valor da soma é $soma"
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>