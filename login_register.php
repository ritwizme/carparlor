<?php

require 'common.php';

?>




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css"/>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <div id="wrapper">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="container">
               
                <div class="row">
                    <div class="col-xs-12 col-md-4"></div>
                    <div class="col-xs-12 col-md-4">
                        
                                   <div class="panel-group">
     <div class="panel panel-primary">
         <div class="panel-heading">Login</div>
         <div class="panel-body">
             <p class="text-warning">Login to make a purchase</p>
             
             <form action="login_script.php" method="POST">
             <div class="form-group">
             <input class="form-control" type="email" placeholder="Enter Email">
             </div>
             
                          <div class="form-group">
             <input class="form-control" type="password" placeholder="Enter Password">
             </div>
             <button class="btn btn-primary">Login</button>
             </form>
             
            
         </div>
         <div class="panel-footer">
             <p>Don't have an account? <span class="register"><a href="signup.php">Register</a></span></p>
              </div>
         
     </div>
     
        </div>
             
                        
                    </div>
                    <div class="col-xs-12 col-md-4"></div>
                </div>
                
                
                
            </div>
            
            
            
            
            
            
        </div>
            
            
            
            
            
            
            
            
       
        
        
    </body>
    
    
    
    
</html>