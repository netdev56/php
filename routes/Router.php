<?php

// On le retrouve dans le fichier composer.json
namespace Router; 

class Router{

    public $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function show(){
        echo $this->url;
    }

}