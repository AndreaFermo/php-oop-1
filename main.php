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