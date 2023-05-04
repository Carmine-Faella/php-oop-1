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
    
        require __DIR__.'/Models/movie.php';
        require __DIR__.'/Models/genre.php';
        require __DIR__.'/Models/title.php';
        require __DIR__.'/Models/duration.php';
        require __DIR__.'/Models/year.php';

        $genre = [
            new GenreMovie('Azione'),
            new GenreMovie('Avventura')
        ];

        $title = [
            new TitleMovie('Star Wars'),
            new TitleMovie('The Avanger')
        ];

        $duration = [
            new DurationMovie('2h 20m'),
            new DurationMovie('2h 00m')
        ];

        $year = [
            new YearMovie('1985'),
            new YearMovie('2012')
        ];
    
        $newMovie = new Movie($title, $duration, $year, $genre);    
    
    ?>

    <ul>
        <li>Title: <?php echo $newMovie->getTitle()?></li>
        <li>Duration: <?php echo $newMovie->getDuration()?></li>
        <li>Year: <?php echo $newMovie->getYear()?></li>
        <li>Genre: <?php echo $newMovie->getGenre()?></li>
        <li>Vote: <?php echo $newMovie->getVote(5)?></li>
    </ul>
    
</body>
</html>