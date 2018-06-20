<!DOCTYPE html>

<html>
    <head>
        <title>PRODUCTS</title>
         <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="newcss.css"  rel="stylesheet"  type="text/css" />
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container"><div class="jumbotron"><h1>WELCOME TO LIFESTYLE STORE</h1><p>"We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.”</p></div></div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                
                <div class="thumbnail"><img src="cams/1.jpg" alt="Responsive image"/><div class="caption">Cannon EOS <br>Price:Rs.36000<br>
                    <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                   
                    </div>
                </div>
                <div class="thumbnail"><img src="cams/5.jpg" alt="Responsive image"/><div class="caption">Pentax ZX-60<br>Price:Rs16300
                        <br>
                        <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div> </div>
                <div class="thumbnail"><img src="shirts/23.jpg" alt="Responsive Image"/><div class="caption">Arrow<br>Price: Rs.2099<br>
                        <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div></div>
                <div class="thumbnail">
                    <img src="watches/18.jpg" alt="Responsive image"/><div class="caption">Casio Edifive<br>Price: Rs.6495<br>
                    <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div></div>
            </div>
                
            
            
            
            <div class="col-md-3 col-sm-6">
                 <div class="thumbnail"><img src="cams/2.jpg" alt="Responsiv image"/><div class="caption">NIkon Coolpix<br>Price: Rs42000<br>
                         <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?></div></div>
            
                         <div class="thumbnail"><img src="cams/6.jpg" alt="Responsive image"/><div class="caption">Fujifilms XT10<br>Price:Rs84000<br>
                                 <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                 
                             </div></div>
                <div class="thumbnail"><img src="shirts/24.jpg" alt="Responsive image"/><div class="caption">X-Calliber<br>Price:Rs. 800<br>
                    <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div></div>
                  <div class="thumbnail">  
                      <img src="watches/19.jpg" alt="Responsive image"/><div class="caption">Curren Analogue Watch<br>Price: Rs8000.<br> <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?> </div></div>
                         
            
            
            
            
            </div>
                         
                         <div class="col-md-3 col-sm-6"><div class="thumbnail"> <img src="cams/3.jpg" alt="Responsive image"/>
                                 <div class="caption">Sony IS-20<br>Price:Rs.40000<br>
                                     <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                 </div></div>
                                     <div class="thumbnail"><img src="shirts/13.jpg" alt="Responsive image"/><div class="caption">
                                             Pool pals<br>Price:Rs 800<br><?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                 </div></div>
                                     <div class="thumbnail"><img src="shirts/25.jpg" alt="Responsive image"/><div class="caption">
                                            Swisscott <br>Price: Rs. 1250<br><?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?> </div></div>
                                            <div class="thumbnail">
                                                <img src="watches/20.jpg" alt="Responsive iamge"/><div class='caption'>Citizen Unisex Watch<br>Price:Rs.78220<br>
                                                    <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                                </div>
                             
                         
                         
                                            </div></div>
                        <div class="col-md-3 col-sm-6"><div class="thumbnail"><img src="cams/4.jpg" alt="Responsive image"/><div class="caption">
                                    Nikon D750<br>Price:Rs150000<br><?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                </div> </div>
                        <div class="thumbnail">
                            <img src="shirts/22.jpg" alt=""/><div class="caption">Symbol<br>Price: Rs 1599<br>
                                <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                            </div></div>
                            <div class="thumbnail"> <img src="watches/10.jpg" alt="Responsive image"/><div class="caption">Laurel's Matrix Silver<br>Price:Rs1500<br>
                                <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                                </div> </div>
                           <div class='thumbnail'>    
                               <img src="watches/21.jpg" alt="Responsive image"/><div class="caption">Fedric Constant<br>Price:Rs.191165<br>
                               <?php if (!isset($_SESSION['email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else
                            { 
//We have created a function to check whether this particular product is added to cart or not. if (check_if_added_to_cart(1)) 
//{ //This is same as if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
 { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                               </div></div>
                        
                        </div></div>
         <?php include 'footer.php';?>
            
       
            
                            
                                            
           
    </body>
</html>