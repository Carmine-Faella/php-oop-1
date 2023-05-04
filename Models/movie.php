<?php

    class Movie {

        public $titles;
        public $durations;
        public $years;
        public $vote;
        public $genres;

        
        public function __construct(array $titles, array $durations, array $years,array $genres)
        {
            $this->titles = $titles;
            $this->durations = $durations;
            $this->years = $years;
            $this->genres = $genres;
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

        public function getTitle() {

            $titles = '';

            foreach( $this->titles as $title) {
                $titles .= $title->title.' ';
            }

            return $titles;

        }

        public function getDuration() {

            $durations = '';

            foreach( $this->durations as $duration) {
                $durations .= $duration->duration.' ';
            }

            return $durations;

        }

        public function getYear() {

            $years = '';

            foreach( $this->years as $year) {
                $years .= $year->year.' ';
            }

            return $years;

        }

    }

?>