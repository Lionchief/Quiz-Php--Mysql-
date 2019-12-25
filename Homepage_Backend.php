<?php
session_start();

 if($_REQUEST['Next']){

    $_SESSION['Total_Question']= 18;
    $_SESSION['Total_Attempted']=0;
    $_SESSION['Total_Correct']=0; 
    $Count = 0;
    $Correct= 0;


$Driver_Name='mysql:host=localhost;dbname=quizdatabase';
$User= 'root';
$Pass_word ='';
     
   try{
     $Conn  = new PDO($Driver_Name,$User,$Pass_word);
   }catch(PDOException $Error){
     die("Ops  ! Something Went Wrong.");
   }

    if($Conn){
   
 
        $Query = 'Select * from Question';
         
         $Result = $Conn->query($Query);
       
      if($Result->rowCount()){
            
            if(empty($_REQUEST['Quiz'])){
        
          
       
            }else{
                
                 $Count = count($_REQUEST['Quiz']);
               $_SESSION['Total_Attempted'] = $Count;

                     for($i=1 ; $i <=6 ;$i++ ){

                       $Record = $Result->fetch(PDO::FETCH_ASSOC);
                         
                   if(isset($_REQUEST['Quiz'][$i])){
                     
                    if($_REQUEST['Quiz'][$i] == $Record['A_id'])
                       $Correct++;
             
             }
         }
        }
        $_SESSION['Total_Correct'] = $Correct;
         echo "<br/>Total Attempted".$_SESSION['Total_Attempted'];
         echo "<br/>Total Correct ".$_SESSION['Total_Correct'];
         echo "<br/>Total Question ".$_SESSION['Total_Question'];
         header('location:Page2.php');
       
      }        
    }
}

?>