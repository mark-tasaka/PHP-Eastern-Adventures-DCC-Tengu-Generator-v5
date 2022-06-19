<?php
/*
function gettenguPath()
{
    if( === "Lawful")
    {
        return "Path of the Boss";
    }
    else if( === "Neutral")
    {
        return "Path of the Swindler";
    }
    else
    {
        return "Path of the Assassin";
    }
}*/

function getBackstabArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;

}


function getSneakSilentlyArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getHideInShadowsArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getPickPocketArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getClimbArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getPickLockArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getFindTrapArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;

}


function getDisableTrapArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;

}



function getForgeDocArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;

}


function getDisguiseSelfArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}



function getReadLanguagesArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}



function getHandlePoisonArray ()
{
    $skill = array(0, 1, 3, 5, 7, 8, 9, 10, 11, 12, 13);
    return $skill;
}


function getCastSpellScrollArray ()
{
    $skill = array("", "d10", "d10", "d12", "d12", "d14", "d14", "d16", "d16", "d20", "d20");
    return $skill;

}


function tenguSpellScrollMod ($mod)
{
    if($mod == 0)
    {
        return '';
    }
    else if($mod > 0)
    {
        return '+' . $mod;
    }
    else
    {
        return $mod;
    }
}


?>