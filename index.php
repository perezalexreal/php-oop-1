<?php 

class Movie {
    public $name;
    public $publishedDate;
    public $director;
    public $actors;
    public $genre;



    function __construct($_name, $_publishedDate, $_director, $_actors , $_genre)
    {
        $this->name = $_name;
        $this->publishedDate = $_publishedDate;
        $this->director = $_director;
        $this->actors = $_actors;
        $this->genre = $_genre;
    }

    function getActors() {
         foreach ($this->actors as $key => $value) {
            echo $key + 1 . " " . $value . "<br>"; 
         }
    }
    
   
}

$filmFirst = new Movie("Mission impossible", '20-02-2010', 'Chuck norris', [ 'Pinco pallino', 'Fulano', 'Mengano'], 'Thriller');
$filmSecond = new Movie("Titanic", '20-12-1990', 'Pinco norris', [ 'Rondososa', 'Morad', 'BabyBang'], 'Sacky');

var_dump($filmFirst); // Visualizziamo i dati dell'istanza creata; 
echo $filmFirst->getActors(); // Stampa gli attori

var_dump($filmSecond); // Visualizziamo i dati dell'istanza creata; 
echo $filmSecond->getActors(); // Stampa gli attori

?>