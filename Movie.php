
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
    public $ titolo;
    public $ durata;
    public $ lingua;
}

$film = new Movie();
$film->name = 'titanic';
var_dump($film);

$film_2 = new Movie();
$film_2 -> name = 'jurassic park';
$film_2 -> durata = '120';
$film_2 -> lingua = 'english';
var_dump($film_2);
?>
