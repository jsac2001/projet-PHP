<?php
function getAllRecipes() {
    $recipes = [];
    $recipeFiles = glob('/Users/juan/Desktop/RecipeApp-main/data/recettes/*.json');

    foreach ($recipeFiles as $recipeFile){
        $content = file_get_contents($recipeFile);
        $recipes[] = json_decode($content, true);       
    }
    return $recipes;
}
$recipes = getAllrecipes();



function getRecipe($id) {
    $filePath = '/Users/juan/Desktop/RecipeApp-main/data/recettes/' . $id . '.json';
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        return json_decode($content, true);
    } else {
        return null;
    }
}

?>