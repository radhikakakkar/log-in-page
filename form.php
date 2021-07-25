<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome | Register or Login</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--custom stylesheet-->
    <link rel="stylesheet" href="form.css">
   
</head>


<body>
    <!--jumbotron-->
            <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid p-15">

            <h1 class="display-3 fw-bold">WELCOME</h1>
            <p class="col-md-8 fs-5"><i>Registration/Login page</i></p>
            </div>   
            </div>    
            <br>
   
        

    <div class="row container">
         <!--typing-->
        <div class="rounded-3" id="output"><b>Kindly start filling the form accordingly</b></div>

        <!--registration form-->
        <div class="register col-md-6 col-xs-6 p-5 text-white bg-dark rounded-3">
        
        <!-- empty fields error-->
            <?php if(isset($_GET['regerror'])): ?>
                
                <div>
                 <p class="error"><?php echo $_GET['regerror']; ?></p>
                </div> 
            
            <?php endif; ?>
           
            <form action= "includes/register.inc.php" method="POST" enctype="multipart/form-data">
                <h3><b> Register down here for free <i class="bi bi-arrow-down"></i></b></h3>
                <br>
                <h5>if you haven't Registered yet, kindly proceed with your credentials here </h5>
                <br>
                <h4> 1.Enter your first name:</h4>
                <input ID="txt1" name="first" placeholder="first name" required> 
                <br>
                <br>
                <h4> 2.Enter your last name: </h4>
                <input ID= "txt2" name="last" placeholder="last name" required> 
                <br> 
                <br>
                <h4>3.Enter your Email: </h4>
                      
            <!-- email validation  error-->
                    <?php if(isset($_GET['mailerror'])): ?>
                    <div>
                    <i class="bi bi-x" style="color: red"><span><?php echo $_GET['mailerror']; ?></span></i>

                    </div>
                    <?php endif; ?>
                    <input ID= "txt3" name="email" placeholder="email" required>
                <br> 
                <br>
                <h4> 5. Upload your profile image: </h4><br>
                <p> (only passport size images allowed) </p>
                <label for="img">SELECT IMAGE:</label>
                <input type="file" ID="img" name="img" accept="image/*" required>
                <br>
                <br>
                <h4> 6. Create a strong password: </h4>
                <p> (not more than 6 letters) </p>
                <input type="password" name="password" id="password" placeholder="password" required>
                <br>
                <br>
                <button class="btn btn-primary" type="submit" name="submit">REGISTER</button>
            </form>
            
        </div>

    <div class="login col-md-6 col-xs-6 p-5 bg-light border rounded-3">

        <?php if(isset($_GET['logerror'])): ?>
            <div>
            <p class="error"><?php echo $_GET['logerror']; ?></p>
            </div> 
        <?php endif; ?>

        <?php if(isset($_GET['again'])): ?>
            <div>
            <p class="again"><?php echo $_GET['again']; ?></p>
            <p class="again"> Enter Again or try registering </p>
            </div> 
        <?php endif; ?>
        
        <h3><b>Log-in here <i class="bi bi-arrow-down"></i></b></h3>
        <br>
        <h5> if you've Registered already, kindly proceed with your registered credentials here</h5>
        <br>
        <form action="includes/login.inc.php" method="POST">
            <h4>Enter your registered Email: </h4>
            <input ID="lemail" name="lemail" placeholder="registered email">
            <br> 
            <br>
            <h4>Enter your Password: </h4>
            <input ID="lpass" type= "password" name="lpass" placeholder="password">
            <br> 
            <br>
            <button class="btn btn-primary" type="submit" name="login">LOG IN</button>
        </form>
    
    </div>
    </div>

        <footer class="page-footer">
            <ul>
                
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="form.php">Home</a></li>
            </ul>
        </footer>
        
       
</body>
<script src="form.js"></script>
</html>
