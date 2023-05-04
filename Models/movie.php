<?php

    class Movie {

        public $title;
        public $duration;
        public $year;
        public $vote;
        public $genres;

        
        public function __construct($title, $duration, $year,array $genres)
        {
            $this->title = $title;
            $this->duration = $duration;
            $this->year = $year;
            $this->genres = $genres;

            foreach ($genres as $genre) {
                if (!$genre instanceof GenreMovie) {
                    echo 'Ogni genere deve essere una instanza della classe GenreMovie!';
                    die();
                }
            }

        }

        public function getVote($vote) {
            return $this->vote = $vote;
        }

        public function getGenre() {

            $generes = '';

            foreach( $this->genres as $genre) {
                $generes .= $genre->type.' ';
            }

            return $generes;

        }

    }

?>