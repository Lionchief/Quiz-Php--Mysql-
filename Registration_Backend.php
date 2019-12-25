<?php
  session_start();
if($_REQUEST['Register']){
   
    $Name =$_REQUEST['Name'];
    $Password =$_REQUEST['Password'];
    $Confirm_Password =$_REQUEST['Confirm_Password'];
    $Email =$_REQUEST['Email'];
    $Mobile =$_REQUEST['Mobile'];
    $Gender =$_REQUEST['Gender'];
    $Country =$_REQUEST['Country'];

    if($Password != $Confirm_Password){
      $_SESSION['PM'] = 'Password do not match:';
      header('location:index.php');    
    }


 $Driver_name ='mysql:host=localhost;dbname=quizdatabase';
 $Username='root';
 $Pass_word='';
   
   try{
   $Conn =  new PDO($Driver_name,$Username,$Pass_word);
   }catch(PDOException $Error){
    
     die("Something Went Wrong:");

   }
   
   if($Conn){
       
       
      $Query = 'select * from User where Email =:email || Mobile =:mobile';

      $Stmt =  $Conn->prepare($Query);
        $Stmt->bindParam(':email',$Email);
        $Stmt->bindParam(':mobile',$Mobile);
        $Stmt->execute();

        if($Stmt->rowCount()){

            

           $_SESSION['UM'] = 'Ops ! User Exist.Please change Email & Mobile :';
           header('location:index.php'); 
        }else{

           
          
            $Query = "INSERT INTO User(Name,Email,Password,Mobile,Gender,Country) values(:name,:email,:password,:mobile,:gender,:country)";
           
            $Stmt = $Conn->Prepare($Query);
            $Stmt->execute([":name"=>$Name,":email"=>$Email,":password"=>$Password,":mobile"=>$Mobile,":gender"=>$Gender,":country"=>$Country]);
          
            
             if($Stmt->rowCount()){
               $_SESSION['SM'] ='Registration is Successful. Please Login';
               header('location:index.php');   
             


             }




        }
   



   }

}



?>