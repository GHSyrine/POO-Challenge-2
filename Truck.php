<?php

require_once 'Vehicle.php';
class Truck extends Vehicle{
    private int $storageCapacity; 
    private string $energy;
   private int $charge = 0;

    
    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    
    }
    
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }
  
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }
 
   public function getCharge()
   {
      return $this->charge;
   }

 
   public function setCharge($charge)
   {
      $this->charge = $charge;

      return $this;
   }

   public function addToCharge(int $amount)
   {
        if ($this->charge + $amount > $this->storageCapacity){
         return "exceeds storage capacity";
    }
    $this->charge += $amount;
    return "Cargo loaded successfully.";
   }
     
    public function unloadCargo(int $amount): string {
        if ($amount > $this->charge) {
            return "Cannot unload cargo: not enough load.";
        }
        $this->charge -= $amount;
        return "Cargo unloaded successfully.";
    }
   public function isFull(): string {
    if ($this->charge < $this->storageCapacity) {
        return "in filling";
    }
    return "full";
}
}