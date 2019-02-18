<?php 	
  class NumberDisplay {
    private $limit;
    private $value;
    private $digits;

    function __construct($rollOverLimit) {
      $this->limit = $rollOverLimit;
      $this->value = 0;

      $maxValue = $rollOverLimit - 1;
      $maxString = strval($maxValue);
      $this->digits = strlen($maxString);
    }

    function getValue() {
      return $this->value;
    }

    function getDisplayValue() {
      $strValue = strval($this->value);
      while(strlen($strValue) < $this->digits) {
        $strValue = "0" . $strValue;
      }
      return $strValue;
    }

    function setValue($replacementValue) {
      $this->value = $replacementValue;
    }

    function increment() {
      $this->value = ($this->value + 1) % $this->limit;
    }
  }
?>
