<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Film</title>
</head>
<body>

  <h1>Lista dei Film</h1>
  <!-- foreach ($array as $key => $value) {
    Ciclo
  } -->
  <?php foreach ($listMovies as $key => $movie) { ?>
    <div>
        <h2>Film <?= $key + 1 ?>:</h2>
        <!-- getMovieInfo => metodo dell'oggetto $movie  -->
        <?= $movie->getMovieInfo() ?>
    </div>
  <?php } ?>
    
</body>
</html>
