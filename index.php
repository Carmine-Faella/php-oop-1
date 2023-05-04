<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<?php

class Movie {

    public $title;
    public $duration;
    public $year;
    public $vote;

    
    public function __construct($title, $duration, $year)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->year = $year;

    }

    public function getVote($vote) {
        return $this->vote = $vote;
    }
}

$newMovie = new Movie('Star Wars', '2h 00m','1985');

$newMovie2 = new Movie('The Avanger', '2h 20m','2012');



?>

    <ul>
        <li>Title: <?php echo $newMovie->title?></li>
        <li>Duration: <?php echo $newMovie->duration?></li>
        <li>Year: <?php echo $newMovie->year?></li>
        <li>Vote: <?php echo $newMovie->getVote(5)?></li>
    </ul>

    <ul>
        <?php 
        
            echo "
                <li>Title: ".$newMovie2->title."</li>
                <li>Duration: ".$newMovie2->duration."</li>
                <li>Year: ".$newMovie2->year."</li>
                <li>Vote: ".$newMovie2 -> getVote(4)."</li>
            ";
        
        
        ?>
    </ul>


    
</body>
</html>