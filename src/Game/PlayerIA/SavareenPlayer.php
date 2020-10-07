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
    
    private function playopposite($ennemy)
    {
        if ($ennemy == "scissors")
            return parent::rockChoice();
        if ($ennemy == "rock")
            return parent::paperChoice();
        return parent::scissorsChoice();
    }
    private function minduck($ennemy)
    {
        if ($ennemy == "scissors")
            return parent::paperChoice();
        if ($ennemy == "rock")
            return parent::scissorsChoice();
        return parent::rockChoice();
    }
    public function getChoice()
    {
        return playopposite($this->result->getLastChoiceFor($this->opponentSide));
    }
};