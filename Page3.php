<?php
session_start();
if(!isset($_SESSION['Name']))
  header('location:index.php');


if(isset($_SESSION['Next'])){


    $Driver_Name = 'mysql:host=localhost;dbname=quizdatabase';
    $User= 'root';
    $Pass_word = '';
       
      try{
      $Conn =  new PDO($Driver_Name,$User,$Pass_word);
      }catch(PDOException $Error){
       
         die("Ops Something Went Wrong :");
  
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 3</title>
   
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
    
    <div class="container">
              
             <form action="Page3_Backend.php" method="POST">
                 <?php
                    
                    if($Conn){

                        for($Id =13 ; $Id <=18 ; $Id++ ){
                       
                        $Query = "select * from Question Where Id = $Id";

                        $Result =  $Conn->query($Query);

                        if($Result->rowCount()){
 
                              $Record  = $Result->fetch(PDO::FETCH_ASSOC);
     ?>
                              <h3 class='text-center my-4 col-sm-6 mx-auto'><span><?php echo $Record['Id']."-:"; ?></span> <?php echo $Record['Question']; ?> </h3>   
 <?php 

                        }
                        $Query = "select * from Answer Where Ans_id = $Id";

                        $Result =  $Conn->query($Query);

                        if($Result->rowCount()){

                   ?>
                            <div class='card-header col-sm-6 mx-auto border'>
                            <?php
                                while($Record  = $Result->fetch(PDO::FETCH_ASSOC)){
                                   ?>
                                
                                <h6><label class='mr-1' ><input type="radio" name="Quiz[<?php echo $Record['Ans_id'] ?>]" id="" value="<?php echo $Record['Id']  ?>" > </label> <span><?php echo $Record['Alphabet']."-" ?></span><?php echo $Record['Answer'] ?> </h6></>
                                        
            <?php
                         }
                      ?>
                      </div>  
              <?php
            
                     }
                          
                            


                        }


                    }


                 ?>
             
             <div class="my-4 text-center">

             <a href="Page2.php" class="btn btn-outline-primary">PREVIOUS</a>

          <button type='submit' Name="Submit" value="Submit" class="btn btn-outline-danger ml-2 px-3">Submit</button>
          

             </div>

             </form>  
     
    
    </>


</body>
</html>