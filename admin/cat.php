<?php include "../config.php";
        include "infunc.php";
    if(!isset($_SESSION['admin'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light text-dark shadow">
        <div class="container-fluid">
            <a href="" class="navbar-brand">
                <img src="../web images/bookchor-logo.png" alt="BookChor" width="128px">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="..//logout.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group shadow-lg">
                    <a href="insert.php" class="list-group-item list-group-item-action">INSERT A BOOK</a>
                    <a href="cat.php" class="list-group-item list-group-item-action">INSERT A CATEGORY</a>
                    <a href="../logout.php" class="list-group-item list-group-item-action">LOGOUt</a>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header bg-white">INSERT A BOOK</div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                            <label for="">Category Name</label>
                            <input type="text" name="category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="INSERT" name="insertcat" class="btn w-100 text-white fs-4" style="background-color: #e94d1c;">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['insertcat'])){
                                $array = [
                                    "cat_title" => $_POST['category']
                                ];

                                insertAdminData("category",$array);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>