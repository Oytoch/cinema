<?php


class Movie{
    private $name='test';
    private $duaration = '180';
    private $releaseDate ;
    private $description;
    
    public function getName(){
        return $this->name;
    }
    public function setName($name=""){
        $this->name = $name;
    } 
    function __construct($name){
        $this->name = $name;
    }
}
$m = new Movie("oui");
echo $m->getName();
