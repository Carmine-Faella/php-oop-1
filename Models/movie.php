<?php

    class Movie {

        public $titles;
        public $durations;
        public $years;
        public $vote;
        public $genres;

        
        public function __construct($titles, $durations, $years, GenreMovie $genres)
        {
            $this->titles = $titles;
            $this->durations = $durations;
            $this->years = $years;
            $this->genres = $genres;
    
        }

        public function getDetails(){
            return "
                    <tr class='text-white'>
                        <td>".$this->titles."</td>
                        <td>".$this->durations."</td>
                        <td>".$this->years."</td>
                        <td>".$this->genres->type."</td>
                    </tr>
                    
                ";
        }

    }

?>