<?php

class Movie
{
    public static $language = 'Italian';
    public static $type = 'Movie';

    /**
     * @param String $title Name of movie
     * @param Number $lenght Time of movie
     * @param Array $genres Genres of movie
     * 
     */
    public function __construct(public string $title, public int $length, public array $genres, public string $poster, public string $duration = '')
    {
        $this->title = $title;
        $this->length = $length;
        $this->genres = $genres;
        $this->poster = $poster;
    }

    /**
     * Function to set duration of movie
     */
    public function setDuration($length)
    {
        if ($length < 120) {
            $this->duration = 'Breve';
        } elseif ($length > 180) {
            $this->duration = 'Lungo';
        } else {
            $this->duration = 'Medio';
        }
    }

    /**
     * Function to stamp all genre of movie
     */
    public function getAllGenre()
    {
        // creo una costante per inserire tutti i generi
        $allGenre = '';

        // ciclo all'interno dell'array dei generi
        foreach ($this->genres as $genre) {

            // aggiungo alla variabile generata prima il genere più una virgola
            $allGenre .= $genre . ', ';
        }

        //restituisco la stringa con tutti i generi
        return $allGenre;
    }

    /**
     * Function to get type
     */
    public function getType()
    {
        return self::$type;
    }
};

// crep l'array richiamando la class e passandogli tutti i valori definiti nel costruttore.
$movies = [
    new Movie('Avatar 2', 192, ['Sci-fi', 'Action'], 'https://picsum.photos/200/300'),
    new Movie('I Am Legend', 101, ['Action', 'Sci-fi'], 'https://picsum.photos/200/300'),
    new Movie('Dune - Parte Due', 186, ['Sci-fi', 'Adventure'], 'https://picsum.photos/200/300'),
    new Movie('Povere creature!', 141, ['Comedy', 'Sci-fi'], 'https://picsum.photos/200/300'),
    new Movie('Argylle - La super spia', 139, ['Action', 'Comedy'], 'https://picsum.photos/200/300'),
    new Movie('Fast & Furious 10', 141, ['Drama', 'Action'], 'https://picsum.photos/200/300'),
    new Movie('Aquaman e il regno perduto', 115, ['Action', 'Fantasy'], 'https://picsum.photos/200/300'),
    new Movie('Creed III', 113, ['Sport', 'Action'], 'https://picsum.photos/200/300'),
    new Movie('Oppenheimer', 180, ['Thriller', 'Mistery'], 'https://picsum.photos/200/300'),
    new Movie('Deadpool 2', 120, ['Comedy', 'Action'], 'https://picsum.photos/200/300'),
    new Movie('Avengers: Endgame', 182, ['Sci-fi', 'Action'], 'https://picsum.photos/200/300'),
    new Movie('Natale a Miami', 100, ['Comedy', 'Romantic'], 'https://picsum.photos/200/300'),
    new Movie('I soliti idioti 3 - Il ritorno', 90, ['Comedy'], 'https://picsum.photos/200/300'),
];



// ciclo all'interno dell'array per stampare tutti i generi di quel film.
foreach ($movies as $movie) {
    $movie->setDuration($movie->length);
}
//var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movie</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="text-center">
        <h1>List of Movie - PHP OOP-1</h1>
    </header>

    <main>
        <section class="container">
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col mb-3">
                        <div class="card" style="width:18rem;">
                            <img src="<?php echo $movie->poster; ?>" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">
                                    <?php echo $movie->title; ?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted ">
                                    <!-- Richiamo la funzione per la visualizzazione di tutti i generi e con trim cancello l'ultima virgola -->
                                    <?php echo rtrim($movie->getAllGenre(), ', '); ?>
                                </h6>
                                <p class="card-text mb-1">
                                    Lingua:
                                    <?php echo ' ' . Movie::$language;  ?>
                                </p>
                                <p class="card-text mb-1">
                                    Durata:
                                    <?php echo ' ' . $movie->length . 'min';  ?>
                                </p>
                                <p class="card-text mb-1">
                                    Lunghezza:
                                    <?php echo ' ' . $movie->duration;  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>

</html>