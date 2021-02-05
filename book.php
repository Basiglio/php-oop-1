<!-- Creare una classe Book per modellare il concetto di libro, 
pensando a quali proprietà e metodi potrebbero essere utili.
Poi provare a creare istanze di quella classe, 
ad accedere alle proprietà e metodi degli oggetti creati, a stampare gli oggetti con var_dump. -->
<?php  

// PRELEVO I DATI DALL'UTENTE
$titleForm = $_GET["titleForm"];
$authorForm = $_GET["authorForm"];
$dateForm = $_GET["dateForm"];
$priceForm = $_GET["priceForm"];
$genreForm = $_GET["genreForm"];

// CREO NUOVA CLASSE DI OGGETT
class Book {
  public $title;
  public $author;
  public $date;
  public $price;
  public $genre;
  // DEFINISCO I DATI CHE MI SERVONO PER LA CREAZIONE
  function __construct($title,$author,$date,$price,$genre) {
    $this->title = $title;
    $this->author = $author;
    $this->date = $date;
    $this->price = $price;
    $this->genre = $genre;
  }
}



// CREO NUOVO OGGETTO
$libro = new Book(
  $titleForm, 
  $authorForm, 
  $dateForm, 
  $priceForm, 
  $genreForm
);


