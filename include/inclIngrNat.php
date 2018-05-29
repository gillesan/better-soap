<?php

$huileVeg = "";
$huileEss = "";
$ajout = "";
if ($origin == "all") {
    $titleh1 = "Ingrédients Naturels";
    $explIngr = '<p>Les cosmétiques industriels nous imposent des substances inadaptées qui sont agressives pour la peau et polluent les eaux.</p>
                            <p>Les <strong>huiles végétales vierges</strong> et les <strong>huiles essentiels</strong> des savons <strong id="bettersoap">better soap</strong> sont naturels et le plus souvent <strong>bio</strong>. Les ingrédients sont choisis pour leurs <strong>bienfaits</strong>. La <strong>qualité</strong> et la <strong>traçabilité</strong> des ingrédients guident leur sélection. Ils sont une source de <strong>bien-être</strong> lors de chaque douche.</p>
                            <p>Ci-dessous, la liste des ingrédients utilisés.</p>';
    $sliderIngredient = '<div class="flexslider">
                            <ul class="slides">
                                <li>
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
                                </li>
                            </ul>
                        </div>';
    foreach ($huileVegALL as $result) {

        $huileVeg .= "<p>" . $result . "</p>";
    }
    foreach ($huileEssALL as $result) {
        $huileEss .= "<p>" . $result . "</p>";
    }
    foreach ($ajoutALL as $result) {
        $ajout .= "<p>" . $result . "</p>";
    }
    
    
    
} else {
    
    
    
    
    $titleh1 =  "INGREDIENTS : ".$data[$origin]["titleh1"];
    $explIngr = '';
    $sliderIngredient = '<a href="produit.php?p='.$origin.'"><div class="flexslider">
                            <ul class="slides">
                                <li><img src="' . $data[$origin]["imgSrc780x396"] . '" alt="' . $data[$origin]["titleh1"] . '"/></li>
                            </ul>
                        </div></a>';

    if ($data[$origin]["huileVeg"] == "") {
        $huileVeg = "<p>Aucun.</p>";
    } else {
        foreach ($data[$origin]["huileVeg"] as $result) {

            $huileVeg .= "<p>" . $result . "</p>";
        }
    }

    if ($data[$origin]["huileEss"] == "") {
        $huileEss = "<p>Aucun.</p>";
    } else {
        foreach ($data[$origin]["huileEss"] as $result) {
            $huileEss .= "<p>" . $result . "</p>";
        }
    }

    if ($data[$origin]["ajout"] == "") {
        $ajout = "<p>Aucun.</p>";
    } else {
        foreach ($data[$origin]["ajout"] as $result) {
            $ajout .= "<p>" . $result . "</p>";
        }
    }
}



