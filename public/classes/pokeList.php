<?php

/**
 * Class for pokemon list
 *
 * @author fscamilo@gmail.com
 */

require_once('curlClass.php');

class pokeList {
    
    private $list;
    private $pokemons;
    
    function __construct() {
        
        $this->list = new curlClass;
        $this->list->exec('https://pokeapi.co/api/v2/pokemon/?limit=999');
        $this->pokemons = $this->list->getResult()['results'];
    }
    
    function getList() {
        return $this->pokemons;
    }
}