<?php 

include __DIR__ . ('/book.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prova Programmazione ad oggetti</title>
</head>
<body>

<!-- CON QUESTO FORMO PRELEVO I DATI DALL'UTENTE, ALLA PRESSIONE DEL SUBMIT I DATI VENGONO ELABORATI IN UN NUOVO OGGETTO CHE PASSO PASSO AD UN'ALTRA PAGINA -->
<form action="newbook.php" method="get">
  <input type="text" placeholder="Inserisci titolo" name="titleForm">
  <input type="text" placeholder="Inserisci autore" name="authorForm">
  <input type="date" name="dateForm">
  <input type="number" placeholder="Inserisci prezzo" name="priceForm">
  <select name="genreForm">
    <option value="">Seleziona Genere</option>
    <option value="horror">Horror</option>
    <option value="avventura">Avventura</option>
    <option value="giallo">Giallo</option>
  </select>
  <input type="submit">
</form>

</body>
</html>

