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
