<?php

include_once 'dbh.inc.php';
session_start();


$email =$_POST['lemail'];
$password=$_POST['lpass'];

    if($email == '' || $password == ''){

        header("Location: ../form.php?logerror=Please%20Fill%20In%20All%20Fields");
    }

    else{

        
        $query = "SELECT * FROM `register` WHERE email='$email'
        AND password='$password'";

        $result = mysqli_query($conn, $query);

            if(!mysqli_query($conn, $query)){

                die(mysqli_error($conn));
    
            }

        $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                
                $_SESSION['username'] = $email;
                
                }
            

            else{

                header("Location: ../form.php?again=Wrong%20Username%20or%20Password");
        
            }
        }
?>
        
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>User profile</title>

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
        <h4 class="display-6"> &quot;WELCOME, <span style="color: #0d6efd;"> LOGIN SUCCESSFUL&quot;</span></h4>
    </div>
    </div>
    
    <!--details-->
    <div class="user container">
        <?php while ($rows = $result->fetch_assoc()) { ?>
            <h5 class="display-7"> YOUR DASHBOARD: </h5><br>

            <ul>
        

                <!-- <li><?php echo '<img id="image-style" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" />'; ?></li><br> -->

                <!-- <li><img src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></li> -->


                <li><?php echo $rows['image']; ?></li>
                
                <li><span> It's a pleasure to have you back,  </span><span style="color:pink; text-transform: capitalize; font-weight: bold;"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?> </span></li>

                <li>City :<span style="color:pink; text-transform: capitalize; font-weight: bold;"> <?php echo $rows['city']; ?></span></li>

            </ul>
        <?php } ?>

    </div>

    </div>

    <footer class="page-footer">
            <ul>
            
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="../form.php">Home</a></li>
            </ul>
        </footer>
</body>
</html>

