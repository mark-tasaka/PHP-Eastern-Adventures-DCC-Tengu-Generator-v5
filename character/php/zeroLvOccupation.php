<?php
//Zero Levo Occupation


function getOccupation()
{
	$a20 = array("Tengu fisherman", "Tengu", "Knife (as dagger)", "1d4", "Fishing rod");
	$a21 = array("Tengu gambler", "Tengu", "Dagger", "1d4", "Playing cards");
	$a22 = array("Tengu potter", "Tengu", "Staff", "1d4", "Clay pot");
	$a23 = array("Tengu puppet maker", "Tengu", "Staff", "1d4", "3 puppets");
	$a24 = array("Tengu sake taster", "Tengu", "Short sword", "1d6", "3 bottles of sake");
	$a25 = array("Tengu silk merchant", "Tengu", "Short sword", "1d6", "Silk, 3 yards");
	$a26 = array("Tengu tea maker", "Tengu", "Knife (as dagger)", "1d4", "Pouch of fine tea leaves");
	$a27 = array("Tengu tea merchant", "Tengu", "Dagger", "1d4", "Bag filled with tea leaves");
	$a28 = array("Tengu urchin", "Tengu", "Stick (as club)", "1d4", "Begging bowl");
	$a29 = array("Tengu vagabond", "Tengu", "Stick (as club)", "1d4", "Bundle of ratty clothes");

        $array1 = array($a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29);

        shuffle($array1);
        
        return $array1[0];
        
}

function tradeGoodsAddition($occupation, $weapon)
{
	if($weapon === "Pitchfork (as Spear)")
	{
		$animalArray = array(" (sheep)", " (goat)", " (cow)", " (duck)", " (goose)", " (mule)");
		shuffle($animalArray);
		return $animalArray[0];
	}
	else if($occupation === "Wainwright")
	{
		$cartArray = array(" containing tomatoes", " containing nothing", " containing straw", " containing your dead", " containing dirt", " containing rocks");
		shuffle($cartArray);
		return $cartArray[0];
	}
	else if($occupation === "Mercenary")
	{
		return "Hide Armour";
	}
	else if($occupation === "Outlaw")
	{
		return "Leather Armour";
	}
	else if($occupation === "Soldier")
	{
		return "Shield";
	}
	else
	{
		return "";
	}


}


?>