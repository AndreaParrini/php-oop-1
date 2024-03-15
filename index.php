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
        foreach ($this->genres as $genre) {
            echo $genre;
        }
    }

    /**
     * Function to get languege of movie
     */
    public static function getLanguageMovie()
    {
        return self::$language;
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
    $movie->getAllGenre();
    echo Movie::getLanguageMovie();
    /* Movie::getPosterOfMovie(); */
}

var_dump($movies);
