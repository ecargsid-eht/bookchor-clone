<?php include "config.php";
    if(!isset($_SESSION['user'])){
        // echo "<script>window.open('login.php','_self')</script>";
        header("location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
    .nav-link:hover{
        color: #e84d1c !important;
        ;
    }

    .carousel:hover{
        cursor: pointer;
    }
</style>
</head>



<body style="background-color: #f9f9f9;">

    <?php include "header.php" ?>


    <div class="container mt-5">
        <table class="table bg-white shadow">
            <tr>
                <td>IMAGE</td>
                <td>DESCRIPTION</td>
                <td>QUANTITY</td>
                <td>TOTAL</td>
            </tr>

            <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];

                    $item = callData("books where id='$id'");
                    
                    foreach ($item as $book) {
            ?>
            <tr>
                <td><img src="<?= "products/".$book['cover']."" ?>" alt="" height="200px" style="width: 140px;"></td>
                <td>

                    <p class="lead fs-6"><?= $book['title'] ?></p>
                    <p class="fs-6">ISBN <span class="lead"><?= $book['isbn'] ?></span> </p>
                    <p class="fs-6">Order type: <span class="lead">Buy</span></p>
                </td>

                <td class="lead" id="count">1</td>
                <td>Rs.<?= $book['cost'] ?></td>

                <?php }} ?>
                </table>
            </tr>
            <a href="#confirm" data-bs-toggle="modal" class="btn btn-success">BUY</a>
        </table>
    </div>

    <div class="modal fade" id="confirm">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" onclick="window.open('index.php','_self')">
                <div class="modal-body">
                    <p class="fs-3">ORDER CONFIRMED!</p>
                </div>
            </div>
        </div>
    </div>


    <footer style="background-color: #313030; color: #c2c1c1">
        <nav class="navbar navbar-expand-lg navbar-dark pt-5" style="background-color: #313030; color:#c2c1c1">
            <div class="container col-10 ">
                <div class="col-lg-3">
                    <p class="fw-normal fs-4">ABOUT US</p>
                    <p class="small">
                        Ever wanted to buy a book but could not because it was too expensive? worry not! because Bookchor is here! Bookchor, these days in news,is being called as the Robinhood of the world of books. Bookchor team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere. Yes, we are literally giving you away a steal.
                    </p>

                    <p class="fw-normal fs-4 mt-4">SHOP ON APP</p>
                    <p class="small">Yes, We are on App. Just Search on play store/ App Store & install BookChor App. Unlock lots of shopping options</p>
                </div>

                <div class="col-lg-3 ps-5" style="padding-bottom: 70px;">
                    <p class="fw-normal fs-4">INFORMATION</p>

                    <ul style="list-style-type: none ;">
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">About Us</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Sell book</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Influencer Program</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Wholesale</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Contact Us</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Careers</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Our Coupon Partners</a></li>
                        <li class="nav-item d-flex ">&gt;<a href="" class="nav-link text-info">Terms of use and Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 mt-4">
                    <blockquote class="twitter-tweet bg-dark">
                        <p lang="und" dir="ltr"><a href="https://t.co/ofj2qV9cWn">pic.twitter.com/ofj2qV9cWn</a></p>&mdash; Bookchor (@bookchor) <a href="https://twitter.com/bookchor/status/1471745599737237507?ref_src=twsrc%5Etfw">December 17, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="col-lg-3 ps-5" style="padding-bottom: 170px;">
                    <p class="fw-normal fs-4 lh-sm">OUR CONTACTS</p>
                    <p class="fw-normal fs-5">BOOKCHOR.COM</p>
                    <p class="small">#1218, <br>
                        Sector-15, Sonepat, <br>
                        Haryana -131001 <br>
                        P:+91-9050111218 <br>
                        Email: <a href="">cs@bookchor.com</a> </p>
                </div>
            </div>

        </nav>
        <hr>
        <div class="container">
            <div class="d-flex flex-row-reverse">
                <form action="" class="d-flex">
                    <div class="input-group">
                        <input type="text" name="" id="" placeholder="youremail@mail.com" class="form-control py-1">
                        <input type="submit" value="SUBSCRIBE" class="btn text-white py-1" style="background-color:#e94d1c">
                    </div>
                </form>
                <p class="fw-normal fs-4 pe-5 pt-3">NEWSLETTER</p>

            </div>
        </div>


    </footer>

    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark pt-5" style="background-color: #313030; color:#c2c1c1">
            <div class="container">
                <hr>
                <p class="small me-auto">2021 © BookChor Literary Solutions Private Limited. ALL Rights Reserved.</p>


                <ul class="navbar-nav">
                    <li class="nav-item ps-2"><img src="web images/ficon1.jpg" alt=""></li>
                    <li class="nav-item ps-2"><img src="web images/ficon2.jpg" alt=""></li>
                    <li class="nav-item ps-2"><img src="web images/ficon3.jpg" alt=""></li>
                    <li class="nav-item ps-2"><img src="web images/ficon4.jpg" alt=""></li>
                </ul>

            </div>
        </nav>
    </footer>



    <!-- </div> -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>