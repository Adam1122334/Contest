<?php

    require_once 'config/Config.php';
    
    ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
</head>

<style>
    
    body {
        background-image: url(img/warsaw0.jpg);
         
 }
    
    .ask {
      margin-top: 50px;  
    }
    
#reg {
    margin-top: 30px;
    margin-bottom: 30px;
    max-width: 500px;
    border-radius: 10px;
    padding-left: 0;
    padding-right: 0;
    padding-top: 10px;
    padding-bottom: 30px;
    border: 1px solid grey;
    background-color: aliceblue;
}

    h3 {
        text-align: center;
        font-weight: 600;
    }
    

    img {
        max-height: 150px;
        padding-top: 20px;
        margin-right: 30px;
    }
    #title {
        display: inline-block;
    }
    

    .btn {
        margin-top: 30px;
    }
    
    .ask2 {
        display: none
    }
    

    
    /* xs < 768 
    
    @media screen and (max-width: 767px) {
        

    </style>

    <?php
     if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birth_date = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $addDane = new Dane();
            $addDane->addDane(NULL,$name,$surname,$birth_date, $sex, $email, $phone, $address);
          
     }
           
//            $walidacja = new Validate();
//$walidacja->puste($surname, 'surname');
//$walidacja->puste($birth_date, 'birth_date');
//$walidacja->puste($sex, 'sex');
//$walidacja->puste($email, 'email');
//$walidacja->puste($phone, 'phone');
//$walidacja->puste($address, 'address');
//$walidacja->maxIloscIloscZnakow($name, 'name', 25);
//$walidacja->maxIloscZnakowIloscZnakow($surname, 'surname', 40);
//$walidacja->maxIloscZnakowIloscZnakow($phone, 'phone', 16);
//$walidacja->weryfikacjaMaila($email, 'email');
//$walidacja->znakiOK($name, 'name');
//$walidacja->znakiOK($surname, 'surname');
//

//if(!isset($_POST['regulamin'])){
//   
//    $walidacja->isChecked('Regulamin');
//}

//if($walidacja->liczError == 0){}
    
        
//    $now = date('Y-m-d');  
    


    
    ?>
   
<body>
    <form method="post"> 

 <div id="reg" class="container" class="form-group row">
  <div class="row">
   <div class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2" ><h3><p>KONKURS O WARSZAWIE</p></h3></div> 
<!-- <div class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2" ><img src="img/logo-facebook.png" alt=""></div> -->


 
  <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Your Name</label>
  <div class="col-10">
    <input class="form-control" type="Name" value="" name="name" id="name">
  </div>
</div>


<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Your surname</label>
  <div class="col-10">
    <input class="form-control" type="search" value="" name="surname" id="surname">
  </div>
</div>
<!--

<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date of birth</label>
  <div class="col-10">
    <input class="form-control" type="date" value=""  id="birth">
  </div>
</div>
-->

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Day of your birth</label>
  <div class="col-10">
    <select class="form-control"  id="day" name="day" class="input-xlarge">
                            <option value="" selected="selected">Day</option>
                            <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="09">09</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                           <option value="13">13</option>
                           <option value="14">14</option>
                           <option value="15">15</option>
                           <option value="16">16</option>
                           <option value="17">17</option>
                           <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="31">31</option>
    </select>
  </div>
</div>


<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Month of your birth</label>
  <div class="col-10">
    <select class="form-control"  id="month" name="month" class="input-xlarge">
                            <option value="" selected="selected">Month</option>
                              <option value="1">1980</option>
                           <option value="2">1981</option>
                           <option value="3">1982</option>
                           <option value="4">1983</option>
                           <option value="5">1984</option>
                           <option value="6">1985</option>
                           <option value="7">1986</option>
                           <option value="8">1987</option>
                           <option value="9">1988</option>
                           <option value="10">1989</option>
                           <option value="11">1990</option>
                           <option value="12">1991</option>
                           <option value="13">1992</option>
                           <option value="14">1993</option>
                           <option value="15">1994</option>
                           <option value="16">1995</option>
                           <option value="17">1996</option>
                           <option value="18">1997</option>
                           <option value="19">1998</option>
                           <option value="20">1999</option>

    </select>
  </div>
</div>

<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Sex</label>
  <div class="text-center">
    <input class="col-2" class="radio" class="form-control" type="radio" value="male" id="sex" name="sex"> Male
    <input  class="col-2" class="pull-right" class="radio" class="form-control" type="radio" value="male" id="sex" name="sex"> Female
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Your email</label>
  <div class="col-10">
    <input class="form-control" type="email" value=""  name="email" id="email">
  </div>
</div>



<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="" name="phone" id="phone">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Adres line</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="address" id="address">
    
  </div>
</div>



  <fieldset class="ask" class="form-group">
    <legend>Odpowiedź na kilka pytań!</legend>
    <p>1. Lorem ipsum dolor sit ament?</p>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Lorem ipsum dolor.
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Ipsum dolor lorem ipsum
      </label>
    </div>

  </fieldset>
  
  
    <fieldset class="ask2" class="form-group">
    <legend>Odpowiedź na kilka pytań!</legend>
    <p>1. Lorem ipsum dolor sit ament?</p>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Lorem ipsum dolor.
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Ipsum dolor lorem ipsum
      </label>
    </div>

  </fieldset>
  
  
<div class="form-group row">
 <input  type="submit" class="btn btn-info" name="submit" value="Submit Button">
</div>





  </div>
</div>
       
   </div>  
   
<link rel="stylesheet" href="js/jquery-3.1.1.min.js">   
<script>

    
    </script>
    


    </form>




</body>
</html>