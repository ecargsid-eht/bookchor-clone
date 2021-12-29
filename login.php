<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


    <style>
        .foc:focus-within{
           box-shadow:none !important;
        }
    </style>

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body>

    


    <div class="container" style="margin-top: 6pc;">
        <div class="card mx-auto col-8 border-0 shadow-lg" style="border-radius: 10px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-5">
                        <img src="https://i.pinimg.com/originals/ec/46/18/ec4618758c77926352712c01d7e7855e.jpg" alt="" class="card-img" width="370" style="border-bottom-right-radius:50pc; border-top-left-radius:20px; border-bottom-left-radius: 20px; ">
                    </div>

                    <div class="col-7">
                        <p class="lead display-6 mt-3" style="text-decoration:underline green; text-underline-offset:3px; padding-left:3rem;">Login Here</p>

                        <form action="" method="post" style="padding:10%; padding-bottom:16%">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="username" id="email" class="form-control foc fw-normal" placeholder="Enter Email" style="border: 0;border-radius:0; border-bottom: 1px solid grey " required>
                                    <label for="">Enter Email</label>
                                </div>                               
                            </div>

                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" id="pass" class="form-control foc fw-normal" placeholder="Enter Password" style="border: 0;border-radius:0; border-bottom: 1px solid grey; " required>
                                    <label for="pass">Enter Password</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                            <button class="btn btn-success rounded-pill float-end" name="login"><span class="fs-4 fw-light ps-2 pe-2">LOGIN</span><i class="bi bi-box-arrow-in-right fs-4 fw-light"></i></button>
                            </div>


                            <div class="mb-3 mt-5">
                                <a href="" class="btn btn-link foc float-start" style="font-size:16px">Forgot Password?</a>
                                <a href="signup.php" class="btn btn-link foc float-end" style="font-size:16px">Not a user? Sign Up.</a>
                        </div>
                        </form>

                        <?php 
                            if(isset($_POST['login'])){
                                $username = $_POST['username'];
                                $password = md5($_POST['password']);

                                $loginQuery = mysqli_query($connect,"select * from user where email='$username' AND password='$password'");

                                if($loginQuery){
                                    $count = mysqli_num_rows($loginQuery);

                                    if($count > 0){
                                        $_SESSION['user'] = $username;
                                        echo "<script>window.open('index.php','_self')</script>";
                                    }
                                    else{
                                        echo "<script>alert('Wrong email or password')</script>";
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>