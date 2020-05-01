<?php
session_start();

$error=array();

// connecting to the database.
$conn=mysqli_connect('localhost', 'root','',"system");

if(!$conn){
    die("connection failed".mysqli_connect_error());
 }
 if (isset($_POST['Register'])){
     $username= mysqli_real_escape_string( $conn,$_POST['username']);
      $email= mysqli_real_escape_string($conn, $_POST['email']);
      $password1= mysqli_real_escape_string($conn, $_POST['password1']);
      $password2=mysqli_real_escape_string($conn, $_POST['password2']);

      /* checking if the comfirm password is equal to the password.*/
      if($password2 != $password1){
          array_push($error,"The two passwords do not match");
      }
      else{
      //if there is no error, save registered data to the database
      if(count($error)==0){
          $password=md5($password1); //encrypt password before storing in the database(security)
          $sql="INSERT INTO Register (username,email,password) VALUES('$username','$email','$password')";
          $resultmode=mysqli_store_result($conn);
            $query= mysqli_query($conn,$sql,$resultmode);
      }
      if(!$query){
          die("submission failed".mysqli_connect_error());
      }
      else{
          echo "successfully submitted";

      }
      

     


    }


     
    
 }

 //Allowing the user to log into the account.
      if(isset($_POST['login'])){
         $username= mysqli_real_escape_string( $conn,$_POST['username']);
         $password= mysqli_real_escape_string($conn, $_POST['password']); 
         
         if(count($error)==0){
            $password=md5($password);
            $fetch="SELECT * FROM register WHERE username='$username' AND password='$password'";
            $result=mysqli_query($conn,$fetch);
            if(mysqli_num_rows($result)){
                $_SESSION['username']=$username;
                $_SESSION['success']="You have successfully logged in ";
                header('location:index.php'); //redirect to the profile page
            }
            else{
                array_push($error,"invalid username/password");
            }

         }
      }

 //logout

if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
    }

?>