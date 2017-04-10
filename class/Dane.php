<?php
class Dane extends DbConnect{


function addDane($id_user,$name,$surname,$birth_date,$sex,$email,$phone,$address){
         
            $zapytanie = "insert into contest (`id_user`,`name`,`surname`,`birth_date`,`sex`,`email`,`phone`,`address`) values (NULL,'$name','$surname','$birth_date','$sex','$email','$phone','$address')";
            $wyslanie = $this->db->query($zapytanie);
            header('Location:index.php');
            exit ();
 }
 
}

           