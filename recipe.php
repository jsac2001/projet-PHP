<?php
require 'app/functions.php';
include 'templates/header.php';
$recipeId = isset($_GET['id']) ? $_GET['id'] : die('ID de la recette non spécifié.');
$recipe = getRecipe($recipeId);
if ($recipe) {
    
    echo '<h1>' . $recipe['titre'] . '</h1>';
    
    echo '<p>' . $recipe['description'] . '</p>';
    echo '<h2> Ingrédients </h2>';
    echo '<ul>';
    foreach ($recipe['ingredients'] as $ingredients) {
        echo "<li>" . htmlspecialchars($ingredients) . "</li>";
    }
    
    echo '</ul>';
        echo "<h2>Étapes de préparation</h2>";
        echo "<iframe width=\"560\" height=\"315\" src=\"". $recipe['link'] ."\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>";
    echo "<ul>";
    foreach ($recipe['etapes'] as $step) {
        echo "<li>" . htmlspecialchars($step) . "</li>";
    }
    echo "</ul>";
    
} else {
    echo "<p>Recette introuvable.</p>";
}

// 👩‍💻 Incluez le footer
include 'templates/footer.php';
?>