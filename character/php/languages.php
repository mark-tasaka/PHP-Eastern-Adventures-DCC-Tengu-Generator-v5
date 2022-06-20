<?php
/*Thief Languages */

function getLanguages($intMod, $luckMod, $luckySign, $alignment, $intelligence)
{
        $bonusLanguages = 0;
        
        $languages = array();
        array_push($languages, 'Common');
        array_push($languages, 'Tengu');

        $languagesAvailable = array("Amabie", "Bakemono", "Hibagon", "Kappa", "Karura", "Kitsune", "Komainu", "Koropokuru", "Mikoshi-nyūdō ", "Mizuchi", "Mujina", "Namahage", "Nekomata", "Ningyo", "Nue", "Ogre-magi", "Oni", "Onikuma", "Rue", "Shojo");

        $alignmentTongue = "Alignment Tongue (" . $alignment . ")";

        array_push($languagesAvailable, $alignmentTongue);

        shuffle($languagesAvailable);

        if($intMod > 0)
        {
                $bonusLanguages += $intMod;
        }
        

        if($luckySign == "28" && $luckMod > 0)
        {
            $bonusLanguages += $luckMod;
        }

        array_push($languages, $languagesAvailable[0]);

        for($i = 1; $i <= $bonusLanguages; $i++)
        {
            array_push($languages, $languagesAvailable[$i]);
        }

        return $languages;

}


?>