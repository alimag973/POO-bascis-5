<?php 

class Vehicle 
{
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->setNbSeats($nbSeats);
    }

    public function forward() : string
    {
        $this->setCurrentSpeed(15);
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=5;
            $sentence .= "Brake !!!" . '<br>';
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * Get the value of color
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color) : self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed($currentSpeed) : self
    {
        $this->currentSpeed = $currentSpeed<0 ? 0 : $currentSpeed;
        return $this;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */ 
    public function setNbSeats($nbSeats) : self
    {
        $this->nbSeats = ($nbSeats<0) ? 0 : $nbSeats;
        return $this;
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */ 
    public function setNbWheels($nbWheels) : self
    {
        $this->nbWheels = ($nbWheels<0) ? 0 : $nbWheels;
        return $this;
    }
}