<?php

/*Warrior */

function getHitPoints($level, $staminaMod)
{
    $baseHP = rand(1, 4);
    $baseHP += $staminaMod;
    
    if($baseHP < 1)
    {
        $baseHP = 1;
    }

    $hitPoints = $baseHP;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(2, 6);
        $levelHP += $staminaMod;

        if($levelHP < 2)
        {
            $levelHP = 2;
        }

        $hitPoints += $levelHP ;

    }

    return $hitPoints;

}


function savingThrowReflex($level)
{
    $reflex = 0;
    
    if($level >= 1 && $level <= 2)
    {
        $reflex = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $reflex = 2;
    }
    
    if($level == 5)
    {
        $reflex = 3;
    }

    if($level >= 6 && $level <= 7)
    {
        $reflex = 4;
    }

    if($level >= 8 && $level <= 9)
    {
        $reflex = 5;
    }

    if($level >= 10)
    {
        $reflex = 6;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    $fort = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $fort = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level >= 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 0;

    if($level >= 3 && $level <= 5)
    {
        $will = 1;
    }
    
    if($level >= 6 && $level <= 8)
    {
        $will = 2;
    }

    if($level >= 9)
    {
        $will = 3;
    }

    return $will;

}

function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d10/II";
    }

    if($level == 2)
    {
        $critical = "1d12/II";
    }

    if($level == 3)
    {
        $critical = "1d14/II";
    }

    if($level == 4)
    {
        $critical = "1d16/II";
    }

    if($level == 5)
    {
        $critical = "1d20/II";
    }

    if($level == 6)
    {
        $critical = "1d24/II";
    }

    if($level == 7)
    {
        $critical = "1d30/II";
    }

    if($level == 8)
    {
        $critical = "1d30+2/II";
    }

    if($level == 9)
    {
        $critical = "1d30+4/II";
    }

    if($level == 10)
    {
        $critical = "1d30+6/II";
    }

    return $critical;

}

function luckDie($level)
{
    $luckDie = "";

    switch($level)
    {
        case 1:
            $luckDie = "d3";
        break;
        
        case 2:
            $luckDie = "d4";
        break;
        
        case 3:
            $luckDie = "d5";
        break;
        
        case 4:
            $luckDie = "d6";
        break;
        
        case 5:
            $luckDie = "d7";
        break;
        
        case 6:
            $luckDie = "d8";
        break;
        
        case 7:
            $luckDie = "d10";
        break;

        case 8:
            $luckDie = "d12";
        break;
        
        case 9:
            $luckDie = "d14";
        break;
        
        case 10:
            $luckDie = "d16";
        break;

        default:
        $luckDie = "";
    }

    return $luckDie;
}

function actionDice($level)
{
    $actionDice = "";

    if($level <= 5)
    {
        $actionDice = "1d20";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 7)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 8)
    {
        $actionDice = "1d20+1d20";
    }

    return $actionDice;
}


function attackBonus ($level)
{
    $attackBonus = 0;

    if($level == 2)
    {
        $attackBonus = 1;
    }

    if($level >= 3 && $level <=4)
    {
        $attackBonus = 2;
    }

    if($level == 5)
    {
        $attackBonus = 3;
    }

    if($level == 6)
    {
        $attackBonus = 4;
    }

    if($level >= 7 && $level <= 8)
    {
        $attackBonus = 5;
    }

    if($level == 9)
    {
        $attackBonus = 6;
    }

    if($level == 10)
    {
        $attackBonus = 7;
    }

    return $attackBonus;
}


function title($level)
{
    $title = "";

    if($level == 1)
    {
        $title = "Rascal";
    }
    else if($level == 2)
    {
        $title = "Trickster";
    }
    else if($level == 3)
    {
        $title = "Mischief-maker";
    }
    else if($level == 4)
    {
        $title = "Sneak";
    }
    else
    {
        $title = "Rogue";
    }


return $title;

}

function luckRecoveredDaily($level)
{
    if($level == 1 || $level == 2)
    {
        return 1;
    }
    else if($level == 3 || $level == 4)
    {
        return 2;
    }
    else if($level == 5 || $level == 6)
    {
        return 3;
    }
    else if($level == 7 || $level == 8)
    {
        return 4;
    }
    else
    {
        return 5;
    }

}

?>