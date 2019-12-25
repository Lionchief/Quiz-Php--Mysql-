<?php
 session_start();
 if($_REQUEST['Submit']){

    $Email =$_REQUEST['Email'];
    $Password =$_REQUEST['Password'];
     
     
    $Driver_Name='mysql:host=localhost;dbname=quizdatabase';
     $User='root';
     $Pass_word='';

       try{
      $Conn  = new PDO($Driver_Name,$User,$Pass_word);
       }catch(PDOException $Error){
          
         die("Ops ! Better Luck Next Time:");

       }


    if($Conn){
        
        $Query = "Select * from User WHERE Email = :email && Password = :password";
         
        $Stmt =  $Conn->prepare($Query);
        $Stmt->bindParam(":email",$Email);
        $Stmt->bindParam(":password",$Password);
        $Stmt->execute();

        if($Stmt->rowCount()){

              $Record = $Stmt->fetch(PDO::FETCH_ASSOC);
              $_SESSION['Name']= $Record['Name'];
        
         header('location:Homepage.php');

        }
        else{

        $_SESSION['IU'] = "Invalid User & Password.";
        header('location:index.php');
              
        }
      } 
 }
?>