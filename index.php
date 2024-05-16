<?php
class Movie {
    public $name;
    public $year;
    public $type;

    public function __construct($name, $year, $type) {
        $this->name = $name;
        $this->year = $year;
        $this->type = $type;
    }

    public function getInfoFilm() {
        return $this->name . ' (' . $this->year . ') - ' . $this->type;
    }
}


?>