<?php 

require('../env.php');
require(ROOT_DIR.'app/Http/Controllers/PokemonController.php');

?>

<!DOCTYPE html>
<html lang="fr">


<?php require(ROOT_DIR . TEMPLATE . 'head.php'); ?>

<body>

    <!-- CONTENT START -->

    <div class="container">
        <div class="row">

            <?php include(ROOT_DIR . TEMPLATE . 'show.php') ?>

        </div>
    </div>

    <!-- CONTENT END -->

<?php require(ROOT_DIR . TEMPLATE . 'footer.php'); ?>

</body>
</html>