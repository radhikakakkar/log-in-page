<?php

include_once 'dbh.inc.php';

$first =$_POST['first'];
$last =$_POST['last'];
$email =$_POST['email'];
$city =$_POST['city'];
$img =$_POST['img'];
$password=$_POST['password'];

// below two lines of code should be commented after another entry, they are only for the purpose of coreection of serial number
$sql1 = "ALTER TABLE `register` AUTO_INCREMENT = 1;";
mysqli_query($conn, $sql1);


    if($first == '' || $last == '' || $email == '' || $city == '' |$img == ''| $password == ''){

        header("Location: ../form.php?regerror=Please%20Fill%20In%20All%20Fields");
        
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../form.php?mailerror=Please%20Enter%20valid%20Email%20Address");
    }

    else{

        
        $sql = "insert into register(fname, lname, email, city, password, image) values( '$first', '$last', '$email', '$city', '$password', '$img' );";

        mysqli_query($conn, $sql);

        //header("Location: ../form.php?registration=success");
    }
?>

<html>
<head>
	<title>Success page</title>
    <link rel="stylesheet" href="form.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--custom stylesheet-->
    <link rel="stylesheet" href="../form.css">
</head>

<body>
<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid p-15">
        <h4 class="display-6"> Your Resgistration is now complete <span style="color:pink;">:)</span></h4>
    </div>
    </div>

    <!--details-->
    <div class="user container">
        
        <h2>Hello, it's a pleasure to have you here <span style="color:pink; text-transform: capitalize; "><?php echo $first; ?> <?php echo $last; ?></span></h2><br>


    </div>

    <footer class="page-footer">
            <ul>
            
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="../form.php">Home</a></li>
            </ul>
        </footer>

</div>
</body>
</html>