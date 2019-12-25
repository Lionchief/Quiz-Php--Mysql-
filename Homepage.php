<?php
session_start();
if(!isset($_SESSION['Name']))
  header('location:index.php');

  $Driver_name ='mysql:host=localhost;dbname=quizdatabase';
  $User='root';
  $Pass= ''; 
      
     try{
       $Conn = new PDO($Driver_name,$User,$Pass);
     }catch(PDOException $Error){
      
         die(" Ops Something Weng Wrong .");
     } 
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/d1c6620a63.js" crossorigin="anonymous"></script>
   
   <style type="text/css">
       
        body{
          background:black;
          color:white;
        }
        
     
   
   </style>
</head>
<body>
    <div class='container'>
      <h1 class='text-center text-capitalize text-primary mt-5'>welcome <span class='badge badge-danger'><?php echo $_SESSION['Name'] ?></span> in Quiz World</h1>
       <br>
      <h2 class='text-center text-capitalize card-header col-sm-8 mx-auto border-radius'>You have to select 1 out of 4 :</h2>
   <form action="Homepage_Backend.php" method = "POST">
     <?php
       for($id =1 ;$id <=6; $id++){

        $Query = "select * from Question Where Id = $id";
        
         $Result = $Conn->query($Query);

         if($Result->rowCount()){
               
               $Record = $Result->fetch(PDO::FETCH_ASSOC);
          ?>  
           <h3 class='text-center my-4 col-sm-6 mx-auto'><span><?php echo $Record['Id']."-:"; ?></span> <?php echo $Record['Question']; ?> </h3>
<?php

         }

         $Query = "select * from Answer where Ans_id = $id";

         $Result = $Conn->query($Query);

         if($Result->rowCount()){
          ?>      
                <div class='card-header col-sm-6 mx-auto border'>
                <?php
                    while($Record  = $Result->fetch(PDO::FETCH_ASSOC)){
                       ?>
                    
                    <h6><label class='mr-1' ><input type="radio" name="Quiz[<?php echo $Record['Ans_id'] ?>]" id="" value="<?php echo $Record['Id']  ?>" > </label><span><?php echo $Record['Alphabet']."-" ?></span><?php echo $Record['Answer'] ?>  </h6></>
        
                      
<?php
          }
          ?>
          </div>  
  <?php

         }
        
        }     
    ?>  
       <div  class='text-center'>
         <button type='submit' class='btn btn-outline-primary px-3 my-5' Name='Next' value='Next'>NEXT</button>
       </div>
      </form>
    </div> 
</body>
</html>
