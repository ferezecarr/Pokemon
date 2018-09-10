<?php

    $pokemons = array('charmander' => array(
        'tipo' => 'fuego',
        'genero' => 'masculino',
        'ataque' => 'llamarada'
    ),
    'picachu' => array(
        'tipo' => 'electrico',
        'genero' => 'masculino',
        'ataque' => 'trueno'
    ),
    'bulbasaur' => array(
        'tipo' => 'planta',
        'genero' => 'masculino',
        'ataque' => 'latigo cepa'
    ));

    ksort($pokemons);

    echo $pokemons['charmander']['tipo'];
    echo '<br><br>';

    foreach ($pokemons as $pokemon => $pokemons) {
        echo $pokemon . '-';
    }

    echo '<br><br>';

    foreach($pokemons as $pokemon => $charmander) {
        echo $pokemon . '-';
    }

?>