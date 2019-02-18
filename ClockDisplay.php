<?php 
  require_once "./NumberDisplay.php";

  class ClockDisplay {
    private $hours;
    private $minutes;

    function __construct($h, $m) {
        
      $this->hours = new NumberDisplay(24);
      $this->minutes = new NumberDisplay(60);
    }

    function setTime($hour, $minute) {
      $this->hours->setValue($hour);
      $this->minutes->setValue($minute);
      
    }

    function timeTick() {
      $min = $this->minutes->getValue();
      $h = $this->hours->getValue();
        if($min < 59)
        {
            $this->minutes->increment();
        }
        if($min == 59)
        {
            $this->hours->increment();
            $this->minutes->increment();
        }
        
    }

    function getTime() {
        $m = $this->minutes->getValue();
        if($m < 10)
        {
            if($m == 0)
            {
                $this->time = $this->hours->getValue().":".$this->minutes->getValue();
                return $this->time;
            }
            $this->time = $this->hours->getValue().":0".$this->minutes->getValue();
            return $this->time;
        }
        $this->time = $this->hours->getValue().":".$this->minutes->getValue();
        return $this->time;
    }
  }
?>
