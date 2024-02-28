<?php

  function random_password($password_length) {

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

  return $generated_password;

  }


?>