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
        if ($ennemy == "scissors"){
            return parent::paperChoice();
        }
        if ($ennemy == "rock"){
            return parent::scissorsChoice();
        }
        return parent::rockChoice();
    }
};