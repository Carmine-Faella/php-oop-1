<?php

$genre = new GenreMovie('Azione,Avventura');

    
        $newMovie = [
            new Movie('Star Wars', '145m', '1985', $genre),
            new Movie('The Avengers', '190m', '2012', $genre),
            new Movie('Star Wars', '145m', '1985', $genre),
            new Movie('The Avengers', '190m', '2012', $genre),
        ];