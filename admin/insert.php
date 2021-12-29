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
                <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group shadow-lg">
                    <a href="insert.php" class="list-group-item list-group-item-action">INSERT A BOOK</a>
                    <a href="cat.php" class="list-group-item list-group-item-action">INSERT A CATEGORY</a>
                    <a href="../logout.php" class="list-group-item list-group-item-action">LOGOUT</a>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header bg-white">INSERT A BOOK</div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="lead">Book Title</label>
                                <input type="text" name="title" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="lead">Author</label>
                                <input type="text" name="author" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="lead">Language</label>
                                <input type="text" name="language" id="language" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="lead">Publication</label>
                                <input type="text" name="publication" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="lead">Category</label>
                                <select name="category" class="form-select">
                                    <option value="0" disabled selected>Select Category</option>
                                    <?php 
                                        $cat = callData("category");
                                        foreach ($cat as $cat) {
                                    ?>
                                    <option value="<?= $cat['cat_id'] ?>"><?= $cat['cat_title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="lead">Binding</label>
                                <input type="text" name="binding" class="form-control">
                            </div>

                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="lead">Pages</label>
                                    <input type="number" name="pages" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label class="lead">ISBN</label>
                                    <input type="number" name="isbn" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="lead">Price</label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label class="lead">Cover</label>
                                    <input type="file" name="cover" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="insertbook" value="INSERT" class="btn w-100 text-white" style="background-color: #e94d1c;">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['insertbook'])){
                                // file work here

                                $cover = $_FILES['cover']['name'];
                                $tmp_cover = $_FILES['cover']['tmp_name'];

                                move_uploaded_file($tmp_cover,"../products/$cover");

                                $array = [
                                    "title" => $_POST['title'],
                                    "author" => $_POST['author'],
                                    "language" => $_POST['language'],
                                    "publication" => $_POST['publication'],
                                    "category" => $_POST['category'],
                                    "nop" => $_POST['pages'],
                                    "isbn" => $_POST['isbn'],
                                    "cost" => $_POST['price'],
                                    "cover" => $cover,
                                    "binding" => $_POST['binding']
                                ];

                                insertAdminData("books",$array);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>