<!-- 
    Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
        - è definita una classe ‘Movie’
            => all'interno della classe sono dichiarate delle variabili d'istanza
            => all'interno della classe è definito un costruttore
            => all'interno della classe è definito almeno un metodo
        - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

    /* define a class Movie */

    class Movie{

        /* instance variable declaration */
        public $title;
        public $movie_directory;
        public $duration;
        public $production_year;
        public $description;
        public $rating;

        /* /**
         * @param string $title
         * @param string $movie_directory
         * @param float $duration
         * @param float $production_year
         * @param string $description
         * @param float $rating
         * */ 

         /* constructor definition */
        public function __construct(string $title, string $movie_directory, float $duration, float $production_year, string $description, float $rating ){
            
            $this->title = $title;
            $this->movie_directory = $movie_directory;
            $this->duration = $duration;
            $this->production_year = $production_year;
            $this->description = $description;
            $this->rating = $rating;

        }
         public function getFilms() {

            $films= [
                $this->title,
                $this->movie_directory,
                $this->duration,
                $this->production_year,
                $this->description,
                $this->rating,
            ];
            return $films;
        }

    };
    $star_wars = new Movie('Star Wars', 'George Lucas', 120, 2000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatem earum provident sequi laboriosam sed adipisci dolore. Sapiente tenetur illum maxime! Sapiente illum vitae blanditiis ipsa laboriosam a voluptatum impedit.', 10 );


    echo '<pre>';
    var_dump($star_wars);
    echo '</pre>';
    
    echo '<br>';

    echo '<pre>';
    var_dump($star_wars -> getFilms());
    echo '</pre>';


?>
