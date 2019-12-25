<?php
session_start();
if(!isset($_SESSION['Name']))
  header('location:index.php');

if(isset($_REQUEST['Submit'])){
  
    $Correct = 0;
    $Count = 0;
    
     
     if(empty($_REQUEST['Quiz'])){
       


     }else{

   $Quiz = $_REQUEST['Quiz'];
         $Count = count($Quiz);

    
    $Driver_Name = "mysql:host=localhost;dbname=quizdatabase";
    $User= "root";
    $Pass_word ='';
     
    try{
     $Conn = new PDO($Driver_Name,$User,$Pass_word);
    }catch(PDOException $Error){
      
         die("Ops ! Something Went Wrong:");
  
    }
     
    $Query = "select  * from Question WHERE Id >12";

      $Result =  $Conn->query($Query);
      
      if($Result->rowCount()){
               
         for($i = 13;$i <=18 ;$i++ ){
                
              $Record =  $Result->fetch(PDO::FETCH_ASSOC);
              
              if(isset($Quiz[$i])){
      
              if($Quiz[$i] == $Record['A_id'])
                 $Correct++;
              }

        }
        $_SESSION['Total_Correct'] = $_SESSION['Total_Correct']+$Correct;
   


      }
      $_SESSION['Total_Attempted'] = $_SESSION['Total_Attempted'] + $Count;


     }

 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>

       
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
       table{
           border-color:white;
       }
       
    
  
  </style>
</head>
<body>
 
   <div class='container'>
          
          <table class='table table-border table-responsive-sm table-hover mt-5 border'>
              <thead>
                   
                     <tr>
                         <th colspan='2' class='text-center bg-white text-dark display-4'>Result</th>
                     </tr>
              </thead>
              <tbody>
                      <tr>
                          <td class="text-center text-white">Question Attempted:</td>
                          <td class="text-center text-white" ><span>Out of</span> <?php echo $_SESSION['Total_Question'] ?> <span> You Attempted :</span> <?php echo $_SESSION['Total_Attempted'] ?> </td>
                      </tr>
                      <tr>
                          <td class="text-center text-white"> Incorrect:</td>
                          <td class="text-center text-white" ><?php echo($_SESSION['Total_Attempted'] - $_SESSION['Total_Correct']); ?></td>
                      </tr>
                      <tr>
                          <td class="text-center text-white"> Correct:</td>
                          <td class="text-center text-white" ><?php echo($_SESSION['Total_Correct']); ?></td>
                      </tr>
                      <tr>
                      <td class="text-center text-white">Your total score:</td>
                          <td class="text-center text-white" ><span>Your Score is :</span> <?php echo $_SESSION['Total_Correct'] ?>  </td>                        
                     </tr> 
              </tbody>
          
          </table>

          <div class='text-center'>
           <a href="Logout.php" class='btn btn-primary px-4'>Logout</a>
          </div>
   
   </div>
    
</body>
</html>