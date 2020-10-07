<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class SavareenPlayers
 * @package Hackathon\PlayerIA
 * @author FLORENT LE FRANCOIS
 */
class SavareenPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;
    
    public function getChoice()
    {
        $ennemy = $this->result->getLastChoiceFor($this->opponentSide);
        if ($this->result->getNbRound() % 2 == 1){
            if ($ennemy == "scissors"){
                return parent::paperChoice();
            }
            if ($ennemy == "rock"){
                return parent::scissorsChoice();
            }
            return parent::rockChoice();
    }
    if ($this->result->getNbRound() % 2 == 0)
    {
        if ($ennemy == "scissors"){
            return parent::rockChoice();
        }
        if ($ennemy == "rock"){
            return parent::paperChoice();
        }
        return parent::scissorsChoice();
    }
    return parent::scissorsChoice();
}

};