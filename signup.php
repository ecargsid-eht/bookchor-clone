<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">




    <style>
        .foc:focus {
            box-shadow: none;
        }

        .selection:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 5pc;">
        <div class="card mx-auto col-9 shadow-lg border-0" style="border-radius: 10px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-5 p-0">
                        <img src="https://i.pinimg.com/originals/ec/46/18/ec4618758c77926352712c01d7e7855e.jpg" class="card-img" width="370" style="border-bottom-right-radius:50pc; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                    </div>


                    <div class="col-7">

                        <p class="lead display-6 mt-3 mx-3" style="text-decoration: underline green; text-underline-offset:3px; padding-left:38px">Signup Here..</p>


                        <form action="" style="padding:10%" method="POST">
                            <!-- <div class="row"> -->
                            <div class="mb-3 ">
                                <label for="" class="lead">Name</label>
                                <input type="text" name="username" class="form-control foc p-0 fs-5 fw-normal" style="border: 0;border-radius:0; border-bottom: 1px solid grey; ">
                            </div>
                            <div class="mb-3 col">
                                <label for="" class="lead">Email</label>
                                <input type="email" name="email" class="form-control foc p-0 p-0 fs-5 fw-normal" style="border: 0;border-radius:0 ; border-bottom: 1px solid grey">
                            </div>
                    <!-- </div> -->
                    <div class="mb-3">
                        <label for="" class="lead">Password</label>
                        <input type="password" name="password" class="form-control foc p-0 p-0 fs-5 fw-normal" style="border: 0;border-radius:0 ; border-bottom: 1px solid grey">
                    </div>

                    <div class="mt-4 d-flex justify-content-end">
                        <button name="signup" class="btn btn-success rounded-pill py-2 ps-1"><span class="fs-4 fw-light ps-2">SIGN UP </span><i class="bi bi-box-arrow-in-right fs-4 fw-light"></i></button>
                    </div>
                    </form>
                    <?php 
                        if(isset($_POST['signup'])){
                            $array = [
                                "name" => $_POST['username'],
                                "email" => $_POST['email'],
                                "password" => md5($_POST['password'])
                            ];

                            insertData("user",$array);
                        }
                    ?>

                    <div class="mb-3">
                        <a href="login.php" class="btn btn-link float-end text-success foc pb-4" style="font-size:16px">Already a user? Log In.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>