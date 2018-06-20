<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="newcss.css"  rel="stylesheet"  type="text/css" />
    <style>
            .row-style{
                margin-top: 60px;
            }
        </style>
    </head>
    <body>
       <?php include 'header.php';?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">CHANGE PASSWORD</div>
                        <div class="panel-body"><p class="text-warning">Change Password</p>
                            <form method="post" action="changepass.php">
                                <div class="form-group"><input type="password" class="form-control" name="old_password" placeholder="old_password"></div>
                                <div class="form-group"><input type="password" class="form-control" name="new_password" placeholder="new_password"></div>
                                <button class="btn btn-primary">Login</button></div>
                            </form>
                            
                            <div class="panel-footer"><p>Login to Continue <a href="login.php">login</a></div>
                    </div>
                </div>
            </div>
                
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
