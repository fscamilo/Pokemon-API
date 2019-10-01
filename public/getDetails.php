<?php

require_once('classes/pokeDetail.php');

$detail = new pokeDetail('https://pokeapi.co/api/v2/pokemon/' . filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT));
$pokemon = $detail->getDetail();

echo 'Name: ' . $pokemon['name'] . '<br><br>';
echo 'Species: ' . $pokemon['species'] . '<br><br>';
echo 'Height: ' . $pokemon['height'] . '<br><br>';
echo 'Weight: ' . $pokemon['weight'] . '<br><br>';
echo 'Abilities:<ul>';
foreach($pokemon['abilities'] as $ability){
    echo '<li>' . $ability['ability']['name'] . '</li>';
}
echo '</ul>';
echo '<img src=' . $pokemon['picture'] . '>';
