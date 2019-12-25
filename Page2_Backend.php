<?php
 session_start();
 if(!isset($_SESSION['Name']))
  header('location:index.php');

if(isset($_REQUEST['NEXT'])){
   
  
      if(empty($_REQUEST['Quiz'])){
          
        // echo "<br/>Total Question:".$_SESSION['Total_Question'];
        // echo "<br/>Total Attempted:".$_SESSION['Total_Attempted'];
        // echo "<br/>Total Correct:".$_SESSION['Total_Correct'];

      }else{
            
        $Driver_name ='mysql:host=localhost;dbname=quizdatabase';
    $User='root';
    $Pass_word ='';
            try{
           $Conn =  new PDO($Driver_name,$User,$Pass_word);
            }catch(PDOException $Error){
                  die("Ops Something Went Wrong:");
            }

           if($Conn){
               $Correct = 0;
               $Count = 0;
             $Quiz = $_REQUEST['Quiz'];

                 $Count = count($Quiz);
                 $_SESSION['Total_Attempted'] = $_SESSION['Total_Attempted'] + $Count;

             $Query = 'select * from Question Where Id > 6';
              
               $Result  = $Conn->query($Query);

               if($Result->rowCount()){
                 
                   for($i =7 ;$i <=11 ; $i++ ){
                                
                        $Record = $Result->fetch(PDO::FETCH_ASSOC);
                     print_r($Record['A_id']);
                      if(isset($Quiz[$i])){
                          
                        if($Quiz[$i] == $Record['A_id'])
                          $Correct++; 


                      }


                  }
                 $_SESSION['Total_Correct'] = $_SESSION['Total_Correct']+ $Correct;  
           
        }



           }

           header('location:Page3.php');

      }
      $_SESSION['Next'] = 'Next';
      header('location:Page3.php');


}





?>