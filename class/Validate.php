<?php

class Validate{
   
    private $error;
   
    public $liczError;
   
    function __construct() {
        $this->error='';
        $this->liczError=0;
    }
   
   
    function puste($ciag,$pole){
       
        if(empty(trim($ciag))){
           
            $this->AddError("Pole $pole nie może być puste.");
            $this->liczError++;
           
        }
    }
   
   
    function znakiOK($ciag,$pole){
        //sprawdzic
        if(!preg_match('/[a-z_.]/i', $ciag)){
            $this->AddError("Pole $pole nie może zawierać cyfr i znaków specjalnych");
            $this->liczError++;
           
        }
       
    }
   
    function minIloscZnakow($ciag, $pole, $min){
        if(strlen(trim($ciag)) < $min){
            $this->AddError("Pole $pole nie może być za krótkie, minimalna iość znaków to : $min");
            $this->liczError++;
        }
    }
   
    function maxIloscZnakow($ciag, $pole, $max){
        if(strlen(trim($ciag)) >= $max){
            $this->AddError("Pole $pole nie może być dłuższe niż $max znaków");
            $this->liczError++;
        }
    }
   
    function weryfikacjaMaila($ciag,$pole){
        if(!filter_var($ciag,FILTER_VALIDATE_EMAIL)){
           
            $this->AddError("Pole $pole nie zawiera poprawnego maila");
            $this->liczError++;
        }
    }
   
    function isChecked($pole){
        $this->AddError("Pole $pole musi być zaznaczone");
            $this->liczError++;
    }
   
    function AddError($text){
       
        $this->error.=$text.'<br>';
           
    }
   
    function __destruct() {
        if(!empty($this->error)){
            echo '<div class="error">'.$this->error.'</div>';
    }
   
    }
   
   
   
}