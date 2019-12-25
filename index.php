<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Registration page</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/d1c6620a63.js" crossorigin="anonymous"></script>
   
   <style type='text/css'>
   *{
      color:white; 
   }
     body{
         background-image:url('images/4.jpeg');
         background-repeat:no-repeat;
         background-size:cover;
     }       
   .form-control{
       background:transparent;
       border:none;
       border-bottom:1px solid white;
       border-radius:0px;
       margin-top:18px;
       height:44px;
   }
   .col-sm-6{
      background:rgba(0,0,0,0.7);
      box-shadow:3px -4px 19px 16px black;
   }
   .col-md-6{
      background:rgba(0,0,0,0.4); 
      box-shadow: 3px -9px 19px 16px  white;
   }
   label{
       font-size:20px;
       margin-top:19px;
   }
   
  
   </style>

</head>
<body>
    <div class="container">

        <h1 class='text-center display-4'>Welcome to Quiz World</h1>
        <hr class='w-50 mx-auto bg-white mb-5'>

          <?php 
           if(isset($_SESSION['PM'])){
              echo"<h1 class='text-danger font-weight-bold text-center mb-5'>"; 
              echo $_SESSION['PM'];
              echo"</h1>";
              unset($_SESSION['PM']); 
           }

           if(isset($_SESSION['UM'])){
             
            echo"<h1 class='text-danger font-weight-bold text-center mb-5'>"; 
              echo $_SESSION['UM'];
              echo"</h1>";
              unset($_SESSION['UM']);
            
           }
           if(isset($_SESSION['SM'])){
             
            echo"<h1 class='text-danger font-weight-bold text-center mb-5'>"; 
              echo $_SESSION['SM'];
              echo"</h1>";
              unset($_SESSION['SM']);
            
           }
           if(isset($_SESSION['IU'])){
             
              echo"<h1 class='text-danger font-weight-bold text-center mb-5'>"; 
              echo $_SESSION['IU'];
              echo"</h1>";
              unset($_SESSION['IU']);
            
           }
          
          ?>  

        <div class="row mb-5">
             
             <div class="col-sm-6 col-md-6">
                 <h1 class='text-center'>Sign In</h1>
                 <hr class='w-25 mx-auto bg-white'>
              <form action="Login_Backend.php" method="POST">
                   
                   <div class='form-group'>
                       <label for="Email">Email:</label>
                       <input type="email" Name='Email' id='' class='form-control' placeholder='Enter Email:' required='required' />
                   </div >
                   <div class='form-group'>
                       <label for="Password">Password:</label>
                       <input type="password" Name='Password' id='' class='form-control' placeholder='Enter Password:' required='required' />
                   </div>

                   <div class='text-center'>
                     <button type='submit' class='btn btn-danger mt-3' Name='Submit' value='Submit' />Sign In</button>
                   </div>


              </form>

             </div>
             <div class="col-sm-6">
                    
                    <h2 class='text-center'>Registration Form:</h2>
                    <hr class='w-50 mx-auto bg-white'>

                  <form action="Registration_Backend.php" method="POST">
                     
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Name">Name:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="text" Name='Name' id='' class='form-control' placeholder='Enter Name:' required='required' />
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Email">Email:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="email" Name='Email' id='' class='form-control' placeholder='Enter Email:' required='required' />
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Password">Password:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="password" Name='Password' id='' class='form-control' placeholder='Enter Password:' required='required' />
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Confirm_Password">Confirm Password:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="password" Name='Confirm_Password' id='' class='form-control' placeholder='Re-Enter Password' required='required' />
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Mobile">Mobile:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="tel" Name='Mobile' id='' class='form-control' placeholder='Enter Mobile' required='required' />
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Gender">Gender:</label>
                          </div>
                          <div class='col-sm-10'>
                            <input type="radio" Name="Gender" value='Male'  ><label for="Male">Male</label>
                            <input type="radio" Name="Gender" value='Female' ><label for='Female'>Female</label>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm-2'>
                             <label for="Country">Country:</label>
                          </div>
                          <div class='col-sm-10'>
                            
                             <select name="Country" id="" class='form-control'>
                              <option value="America">America</option>
                              <option value="London">London</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Russia">Russia</option>
                              <option value="India">India</option>
                              <option value="China">China</option> 
                             </select>

                          </div>
                      </div>
                      
                     <div class='text-center'>
                      
                      <button type='submit' class='btn btn-outline-primary mt-5' Name='Register' value='Register'>Register</button>
                      <button type='reset' class='btn btn-danger mt-5 ml-2' Name='Cancel' value='Register'>Cancel</button>
                     </div>

                  </form>


             </div>

        </div> 

     </div>

</body>
</html>