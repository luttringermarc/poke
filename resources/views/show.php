<?php  $resultat = index() ?>

<div class="col-12">

<table class="table table-striped">
    <th>       
        <td>ID</td>
        <td>Nom du dresseur</td>
        <td>Nom du pokemon</td>
        <td>Type du pokémon</td>
        <td>Team</td>
        <td>Action</td>
    </th>

    <?php 
    
    foreach ($resultat as $key => $value) {
    ?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['nom_dresseur'] ?></td>
        <td><img class="img-fluid" src="img/<?= $value['image_pokemon'] ?> " alt=""><br> <?= $value['nom_pokemon'] ?></td>
        <td><?= $value['type_value'] ?></td>
        <td><?= $value['team_value'] ?></td>
        <td></td>
    </tr>
    <?php
    }
    ?>

</table>

</div>