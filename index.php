<?php

class Movie {
    public $title;
    public $rate;
    public $originalLanguage;
    public $genres;

    public function __construct($title, $rate, $originalLanguage, $genres) {
        $this->title = $title;
        $this->rate = $rate;
        $this->originalLanguage = $originalLanguage;
        $this->genres = $genres;
    }

    public function getFilmInfo() {
        $genres = '';

        foreach ($this->genres as $genre) {
            $genres .= $genre . ' ' ;
        }

        return '<br/><br/>Titolo: ' . $this->title . '<br/>Voto: ' . $this->rate . '<br/>Lingua originale: ' . $this->originalLanguage . '<br/>Generi: ' . $genres;
    }



}

$genresList = ['fantascienza', 'fantsy', 'avventura'];

$starWars = new Movie('Guerre Stellari', 5, 'Inglese', $genresList);
echo $starWars->getFilmInfo();

$backToTheFuture = new Movie('Ritorno al futuro', 4, 'Inglese', $genresList);
echo $backToTheFuture->getFilmInfo();

