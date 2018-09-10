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

if(isset($_GET['whoisthatpokemon'])) {
    $buscado = $_GET['whoisthatpokemon'];
    echo $buscado;
}

echo '<br><br>';
echo '<a href="index.php">Volver a la pagina anterior</a>';

?>