<?php

    require_once 'config/Config.php';
    
    ?>

<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
</head>

<style>
    fieldset {
    width: 500px;
    display: block;
    background-color: aquamarine;
    border-radius: 10px;
/*    margin: 2em auto;*/
}



    </style>
    <?php
     if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birth_date = $_POST['birth_date'];
            $sexs = $_POST['sex'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
           
           
            $walidacja = new Validate();
$walidacja->puste($surname, 'surname');
$walidacja->puste($birth_date, 'birth_date');
$walidacja->puste($sex, 'sex');
$walidacja->puste($email, 'email');
$walidacja->puste($phone, 'phone');
$walidacja->puste($address, 'address');
$walidacja->maxIloscZnakowIloscZnakow($name, 'name', 25);
$walidacja->maxIloscZnakowIloscZnakow($surname, 'surname', 40);
$walidacja->maxIloscZnakowIloscZnakow($phone, 'phone', 16);
$walidacja->weryfikacjaMaila($email, 'email');
$walidacja->znakiOK($name, 'name');
$walidacja->znakiOK($surname, 'surname');


//if(!isset($_POST['regulamin'])){
//   
//    $walidacja->isChecked('Regulamin');
//}

if($walidacja->liczError == 0){
     $addDane = new Dane();
            $addDane->addDane(NULL,$name, $surname, $birth_date, $sex, $email, $phone, $address);
        
//    $now = date('Y-m-d');  
    
}
}
    
    ?>
   
<body>
    <form method="post">
 <div class="container">
  <div class="row">
  <div id="form" class="col-md-offset-3 col-sm-offset-2 col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Your Name</label>
  <div class="col-10">
    <input class="form-control" type="Name" name="name" value="Artisanal kale" id="name">
  </div>
</div>


<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Your surname</label>
  <div class="col-10">
    <input class="form-control" type="search" name="surname" value="How do I shoot web" id="surname">
  </div>
</div>

<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date of birth</label>
  <div class="col-10">
    <input class="form-control" type="datetime-local" name="date_birth" value="2011-08-19T13:45:00" id="birth_date">
  </div>
</div>



<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Sex</label>
  <div class="col-10">
    <input class="form-control" type="radio"  value="male" id="sex" name="sex">
    <input class="form-control" type="radio"  value="female" id="sex" name="sex">
  </div>
</div>

<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Your email</label>
  <div class="col-10">
    <input class="form-control" type="email" name="email" value="bootstrap@example.com" id="email">
  </div>
</div>



<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" name="phone" value="1-(555)-555-5555" id="phone">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Adres line</label>
  <div class="col-10">
    <input class="form-control" type="text" name="address" value="Street address" id="address">
  </div>
</div>

   <input type="submit" class="btn btn-info" name="submit" value="Submit Button">


  </div>
</div>

   </div>
    </form>




</body>
</html>