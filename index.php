<?php

class Movie
{
    public $title;
    public $length;
    public $duration;
    public $type;

    /**
     * @param String $title Name of movie
     * @param Number $lenght Time of movie
     * @param Array $type Type of movie
     * 
     */
    public function __construct($title, $length, $type)
    {
        $this->title = $title;
        $this->length = $length;
        $this->type = $type;
    }

    public function setDuration($length)
    {
        if ($length < 120) {
            $this->duration = 'Breve';
        } elseif ($length > 300) {
            $this->duration = 'Lungo';
        } else {
            $this->duration = 'Normale';
        }
    }
};

$avatar = new Movie('Avatar', 200, ['Drama', 'Action']);
$avatar->setDuration($avatar->length);
var_dump($avatar);

$iAmLegend = new Movie('I Am Legend', 100, 'Drama');
$iAmLegend->setDuration($iAmLegend->length);
var_dump($iAmLegend);
