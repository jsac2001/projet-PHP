<?php
require 'app/functions.php';
include 'templates/header.php';
$recipes = getAllRecipes();
?>
<h1>Liste des Recettes</h1>
<ul>
    <?php
    foreach ($recipes as $recipe) {
        echo "<li><a href='recipe.php?id=" . $recipe['id'] . "'>" . $recipe['titre'] . "</a></li>";
    }
    ?>
</ul>
<?php
include 'templates/footer.php';
?>
