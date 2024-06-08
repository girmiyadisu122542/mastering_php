<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering php </title>
</head>

<body>


    <ul>
        <?php
        //   foreach($books as $book){
        //     echo "<li>".  $book. "</li>";
        //   }
        ?>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- assocaitive array -->

    <ul>
        <?php foreach ($medias as $media) : ?>

            <li>
                <a blank="" href="<?= $media['website'] ?>"> <?= $media['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($filteredMovies as $movie) : ?>
            <li><?= $movie['name'] ?> </li>
        <?php endforeach; ?>
    </ul>

    <?php
    function filterMovie($movies)
    {
        $filterMovie = [];
        foreach ($movies as $movie) {
            if ($movie['released'] <= 2000) {
                $filterMovie[] = $movie;
            }
        }
        return $filterMovie;
    }

    ?>
</body>

</html>