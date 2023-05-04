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

    public function getGenres() {
        $genres = '';

        foreach ($this->genres as $genre) {
            $genres .= $genre . ' ' ;
        }
        return $genres;
    }
}