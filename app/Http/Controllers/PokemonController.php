<?php

require(ROOT_DIR . "config/database.php");

/**
* Display a listing of the resource.
*
*/
function index()
{
    $conn = sql_connect();
    
    $stmt = $conn->prepare("select possede.id, dresseur.nom_dresseur, pokemon.nom_pokemon, pokemon.image_pokemon, type.type_value, team.team_value from possede INNER JOIN dresseur ON dresseur.id = possede.dresseur_id INNER JOIN pokemon ON pokemon.id = possede.pokemon_id INNER JOIN type ON type.id = pokemon.type_id INNER JOIN team ON team.id = dresseur.team_id ");
    $stmt->execute();
    $resultat = $stmt->fetchall();
    return $resultat;
}

/**
* Show the form for creating a new resource.
*
*/
function create()
{
    //
}

/**
* Display the specified resource.
*
*/
function show($id)
{
    //
}


/**
* Update the specified resource in storage.
*
*/
function update(Request $request, $id)
{
    //
}

/**
* Remove the specified resource from storage.
*
*/
function destroy($id)
{
    //
}
