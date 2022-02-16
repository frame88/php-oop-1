
<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file Movie.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle 
relative proprietà -->



<?php
class Movie {
    public $title;
    public $durata;
    public $language;
    public $director;
    public $year;


    //creazione di un costruttote che necessita 3 attributi
    public function __construct($title, $year, $language)
    {
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
    }

    //creazione di un metodo
    public function getInfo() 
    {
        return $this -> $title . $this -> $director . $this -> $language;
    }

}

//creazione di tre oggetti Movie con relativi attributi
$film = new Movie('Titanic','1829','scandinavo');

//creazione delle successive skill (non incluse nel construct)
$film -> title = 'titanic';
// var_dump($film);
// var_dump($film);

$film_2 = new Movie('Jurassic Park','1997','inglese(USA)');

//creazione delle successive skill (non incluse nel construct)
$film_2 -> title = 'jurassic park';
$film_2 -> durata = '120';
$film_2 -> language = 'english';
// var_dump($film_2);

$film_3 = new Movie('Narnia','2003','elfico');

//creazione delle successive skill (non incluse nel construct)
$film_3 -> title = 'narnia';
$film_3 -> durata = '116';
// var_dump($film_3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container">
        <h1>I film che ti consigliamo questa settimana sono:</h1>
        <p><?php echo $film -> getInfo() ?></p>
        <hr>
        <p><?php echo $film_2 -> getInfo() ?></p>
        <hr>
        <p><?php echo $film_3 -> getInfo() ?></p>
    </div>
</body>
</html>
