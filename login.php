<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <div class="panel-heading">LOGIN</div>
                        <div class="panel-body"><p class="text-warning">Login to purchase</p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group"><input type="text" class="form-control" name="email" placeholder="email" 
                                                               required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                                <div class="form-group"><input type="password" class="form-control" name="password" placeholder="password" required="true"
                                                               pattern=".{6,}"></div>
                                <button class="btn btn-primary">Login</button></div>
                                </form>
                            <div class="panel-footer"><p>Don't have a account??? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
                
        </div>
       <?php include 'footer.php';?>
    </body>
</html>
