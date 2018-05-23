<?php

$origin = isset($_GET['o']) ? $_GET['o'] : "all";

if ($origin == "all") {
    $titleh1 = "Ingrédients Naturels";
    $explIngr = '<p>Les cosmétiques industriels nous imposent des substances inadaptées qui sont agressives pour la peau et polluent les eaux.</p>
                            <p>Les <strong>huiles végétales vierges</strong> et les <strong>huiles essentiels</strong> des savons <strong id="bettersoap">better soap</strong> sont naturels et le plus souvent <strong>bio</strong>. Les ingrédients sont choisis pour leurs <strong>bienfaits</strong>. La <strong>qualité</strong> et la <strong>traçabilité</strong> des ingrédients guident leur sélection. Ils sont une source de <strong>bien-être</strong> lors de chaque douche.</p>
                            <p>Ci-dessous, la liste des ingrédients utilisés.</p>';
    $sliderIngredient = '<li>
                                    <img src="upload/ingredientNaturel (4).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (5).JPG" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (3).jpg" alt="ingredientNaturel"/>
                                </li> 
                                <li>
                                    <img src="upload/ingredientNaturel (6).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (1).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (2).jpg" alt="ingredientNaturel"/>
                                </li>';
    foreach ($huileVegALL as $result){
        $huileVeg += "<p>" + $result + "</p>" ;
    }
    foreach ($huileEssALL as $result){
        $huileEss += "<p>" + $result + "</p>" ;
    }
    foreach ($ajoutALL as $result){
        $ajout += "<p>" + $result + "</p>" ;
    }
    
    
    
} else {
    $titleh1 = $data[$origin]["titleh1"] + " - INGREDIENTS1111";
    $explIngr = '';
    $sliderIngredient = '<li><img src="' + $data[$origin]["imgSrcXXXxXXX"] + '" alt="' + $data[$origin]["titleh1"] + '"/></li>';
    $huileVeg = $data[$origin]["huileVeg"];
    $huileEss = $data[$origin]["huileEss"];
    $ajout = $data[$origin]["ajout"];
}



