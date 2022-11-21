<?php 

require_once './Vehicle.php';
require_once './LightableInterface.php';

class Bicyle extends Vehicle implements LightableInterface
{
    function switchOn(): bool
    {
        return $this->getCurrentSpeed() > 10 ? true : false;
    }

    function switchOff(): bool
    {
        return false;
    }

} 

