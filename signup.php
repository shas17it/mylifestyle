<!DOCTYPE html>

<html>
    <head>
        <title>Sign up</title>
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
                <div class="col-xs-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">SIGN UP</div>
                        <div class="panel-body"><p class="text-warning">Sign up to Login</p>
                            <form method="POST" action="user_registration_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="First_Name" placeholder="First_Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Last_Name" placeholder="Last_Name">
                                </div>
                                <div class="form-group"><input type="text" class="form-control" name="email" placeholder="email"></div>
                                <div class="form-group"><input type="number" class="form-control" name="Contact_Number" placeholder="Contact_Number"></div>
                                <div class="form-group"><input type="password" class="form-control" name="Password" placeholder="Password"></div>
                                <div class="radio">
                                    <label class="gap"><input type="radio" name="gender" value="male">male</label>
                                    <lable class="gap"><input type="radio" name="gender" value="female">female</lable>
                                    <lable class="gap"><input type="radio" name="gender" value="other">other</lable>
                                </div>
                                <div class="form-group"><input type="text" class="form-control" name="Address" placeholder="Address"></div>
                                <div class="form-group"><input type="text" class="form-control" name="city" placeholder="city"></div>
                                <br>
                                <button class="btn btn-primary">Submit</button></div>
                            </form>
                         
                            <?php include 'footer.php';?>
    </body>
</html>
