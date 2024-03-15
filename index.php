<?php

class Movie
{
    public static $language = 'Italian';

    /**
     * @param String $title Name of movie
     * @param Number $lenght Time of movie
     * @param Array $genres Genres of movie
     * 
     */
    public function __construct(public string $title, public int $length, public array $genres)
    {
        $this->title = $title;
        $this->length = $length;
        $this->genres = $genres;
    }

    /**
     * Function to stamp all genre of movie
     */
    public function getAllGenre()
    {
        foreach ($this->genres as $genre) {
            echo $genre;
        }
    }

    /**
     * Function to get langue of movie
     */
    function getLanguageMovie()
    {
        return self::$language;
    }
};

// crep l'array richiamando la class e passandogli tutti i valori definiti nel costruttore.
$movies = [
    new Movie('Avatar 2', 192, ['Sci-fi', 'Action']),
    new Movie('I Am Legend', 101, ['Action', 'Sci-fi']),
    new Movie('Dune - Parte Due', 186, ['Sci-fi', 'Adventure']),
    new Movie('Povere creature!', 141, ['Comedy', 'Sci-fi']),
    new Movie('Argylle - La super spia', 139, ['Action', 'Comedy']),
    new Movie('Fast & Furious 10', 141, ['Drama', 'Action']),
    new Movie('Aquaman e il regno perduto', 115, ['Action', 'Fantasy']),
    new Movie('Creed III', 113, ['Sport', 'Action']),
    new Movie('Oppenheimer', 180, ['Thriller', 'Mistery']),
    new Movie('Deadpool 2', 120, ['Comedy', 'Action']),
    new Movie('Avengers: Endgame', 182, ['Sci-fi', 'Action']),
    new Movie('Natale a Miami', 100, ['Comedy', 'Romantic']),
    new Movie('I soliti idioti 3 - Il ritorno', 90, ['Comedy']),
];

// ciclo all'interno dell'array per stampare tutti i generi di quel film.
foreach ($movies as $movie) {
    $movie->getAllGenre();
    $lang = $movie->getLanguageMovie();
    var_dump($lang);
}

var_dump($movies);
