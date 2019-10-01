<?php
/**
 * Class to get pokemon details
 *
 * @author fscamilo@gmail.com
 */

require_once('curlClass.php');

class pokeDetail {

    private $detail;
    private $pokemon;
    private $fullDetail;
    
    function __construct($url) {
        $this->detail = new curlClass;
        $this->detail->exec($url);
        $this->fullDetail = $this->detail->getResult();
    }
    
    function getDetail() {

        $this->pokemon = array(
            "name" => $this->fullDetail['name'],
            "species" => $this->fullDetail['species']['name'],
            "height" => $this->fullDetail['height'],
            "weight" => $this->fullDetail['weight'],
            "abilities" => $this->fullDetail['abilities'],
            "picture" => $this->fullDetail['sprites']['front_default']
        );
               
        return $this->pokemon;
    }
    
    
}
