<?php

class Movie {
    public $title;
    public $rate;
    public $originalLanguage;

    public function __construct($title, $rate, $originalLanguage) {
        $this->title = $title;
        $this->rate = $rate;
        $this->originalLanguage = $originalLanguage;
    }

    public function getFilmInfo() {
        return '<br/><br/>Titolo: ' . $this->title . '<br/>Voto: ' . $this->rate . '<br/>Lingua originale: ' . $this->originalLanguage;
    }

}

$starWars = new Movie('Guerre Stellari', 5, 'Inglese');
echo $starWars->getFilmInfo();

$backToTheFuture = new Movie('Ritorno al futuro', 4, 'Inglese');
echo $backToTheFuture->getFilmInfo();

