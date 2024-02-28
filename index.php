<?php

$form_sent = !empty($_GET);

if ($form_sent) {
  // var_dump($_GET);

  $password_length = $_GET['password-length'];


  //lettere minuscole
  $letters = 'abcdefghijklmnopqrstuvwxyz';
  //lettere maiuscole
  $up_letters = strtoupper($letters);
  //simboli
  $symbols = '!"#$%&\'()*+<=>?@[\\]^_`{|}~';
  //numeri
  $numbers = '0123456789';

  $generated_password = '';


  while (strlen($generated_password) < $password_length) {
    //concatenazione di tutte le stringhe
    $all_characters = $letters . $up_letters . $symbols . $numbers;
    // echo $all_characters;

    //prendo un carattere random da 0 all'ultimo indice valido
    $random_character = $all_characters[rand(0, strlen($all_characters) - 1)];

    $generated_password .= $random_character;;
  }


  echo $generated_password;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Luca Polzone" />
  <meta name="description" content="Esercizio - PHP Strong Password Generator" />
  <title>Esercizio - PHP Strong Password Generator</title>
  <!-- Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS link -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="fw-bold text-center">Strong Password Generator</h1>
    <h2 class="text-center">Genera una password sicura</h2>
    <div class="row mt-3">
      <div class="col-12">
        <div class="alert alert-success opacity-0">
          <p>&nbsp;</p>
        </div>
      </div>
      <div class="col-12">
        <div class="card mt-1">
          <div class="p-4">
            <form method="GET">
              <div class="mb-4">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="number" min="3" value="3" name="password-length" class="form-control" id="inputPassword">
              </div>
              <button type="submit" class="btn btn-primary">INVIA</button>
              <button type="reset" class="btn btn-warning">RESET</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>