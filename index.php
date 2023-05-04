<?php

require __DIR__ . '/models/movie.php';
require __DIR__ . '/models/genres.php';
require __DIR__ . '/models/db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand">Cerca film per genere</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Fantasy" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
           
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Lingua Originale</th>
                        <th scope="col">Generi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($moviesList as $movie) { ?>
                    <tr>
                        <td><?php echo $movie->title; ?></td>
                        <td><?php echo $movie->rate; ?></td>
                        <td><?php echo $movie->originalLanguage; ?></td>
                        <td><?php echo $movie->getGenres(); ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
            </div>
        </div>
    </main>       
</body>
</html>