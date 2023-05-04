<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
    
        require __DIR__.'/Models/movie.php';
        require __DIR__.'/Models/genre.php';
        require __DIR__.'/Models/title.php';
        require __DIR__.'/Models/duration.php';
        require __DIR__.'/Models/year.php';

        $genre = [
            new GenreMovie('Azione, Fantascienza'),
            new GenreMovie('Azione, Supereroi'),
            new GenreMovie('Commedia, Drammatico')
        ];

        $title = [
            new TitleMovie('Star Wars'),
            new TitleMovie('The Avengers'),
            new TitleMovie('Forrest Gump')
        ];

        $duration = [
            new DurationMovie('121m'),
            new DurationMovie('142m'),
            new DurationMovie('142m')
        ];

        $year = [
            new YearMovie('1977'),
            new YearMovie('2012'),
            new YearMovie('1994'),
        ];
    
        $newMovie = new Movie($title, $duration, $year, $genre);    
    
    ?>

    <div class="container text-white">
        <div class="row my-5 text-center">
            <h1 class='mb-5'>Lista Film</h1>
            <table class="table text-center">
                <thead>
                    <tr class='text-white'>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <ul>
                                <?php echo $newMovie->getTitle()?>
                            </ul>
                        </th>
                        <td>
                            <ul>
                                <?php echo $newMovie->getDuration()?>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <?php echo $newMovie->getYear()?>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <?php echo $newMovie->getGenre()?>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    

</body>
</html>