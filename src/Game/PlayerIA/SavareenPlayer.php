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
    
    private function playopposite(string $ennemy)
    {
        if ($ennemy == "scissors")
            return parent::rockChoice();
        if ($ennemy == "rock")
            return parent::paperChoice();
        return parent::scissorsChoice();
    }
    public function getChoice()
    {
        if ($this->result->getNbRound() <= 1)
        {
            if ($this->result->getLastChoiceFor($this->opponentSide) == 0){
                return parent::rockChoice();
            }
            else{
                return playopposite($this->result->getLastChoiceFor($this->opponentSide));
            }
        }
        return playopposite($this->result->getLastChoiceFor($this->opponentSide));
    }
};