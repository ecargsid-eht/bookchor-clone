<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top " style="border-bottom: 1px solid #eee;">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <img src="web images/bookchor-logo.png" alt="" width="128px">
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item ps-3"><a href="" class="nav-link"><i class="bi bi-telephone-fill"></i> 9050111218</a></li>
            <li class="nav-item ps-3"><a href="" class="nav-link"><i class="bi bi-archive-fill"></i> Wholesale</a></li>
            <li class="nav-item ps-3"><a href="" class="nav-link"><i class="bi bi-book-fill"></i> Sell Book</a></li>
            <li class="nav-item ps-3"><a href="" class="nav-link"><i class="bi bi-person-fill"></i> Influencer Program</a></li>

            <form action="search.php" class="d-flex ms-5" method="get">
            <div class="input-group">
                <input type="text" name="search" class="form-control rounded-pill py-1" placeholder="Books/Author/ISBN" size="40">  
                <input type="submit" name="find" value="SEARCH" class="btn rounded-pill text-white py-1" style="background-color: #e94d1c; margin-left: -30px ">
            </div>
        </form> 
        <?php 
        
        ?>
        </ul>

        

        <ul class="navbar-nav">
            <li class="nav-item"><a href="cart.php" class="nav-link"><i class="bi bi-cart3 fs-5"></i><sup><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span></sup></a></li>
            <?php 
                if(!isset($_SESSION['user'])){
            ?>
            <li class="nav-item ps-2"><a href="login.php" class="nav-link">Login</a></li>
            <?php }else{ ?>
            <li class="nav-item ps-2"><a href="logout.php" class="nav-link">Logout</a></li>
            <?php } ?>
        </ul>
    </div> 
</nav>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white py-3" style="margin-top: 61px;">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="category" data-bs-toggle="dropdown">Categories</a>

                <ul class="dropdown-menu py-0" aria-labelledby="category">

                    <?php 
                        $cat = callData("category");

                        foreach ($cat as $cat) {
                    ?>

                    <a href="" class="list-group-item list-group-item-action dropdown-item text-dark"><?= $cat['cat_title']?></a>
                    <?php } ?>
                </ul>
                
            </li>

            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">59 Store</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Deals Store</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">99 Store</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Hindi Novels</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Graphic Comics</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Rare and Collectables</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Best Sellers</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Newly added Books</a></li>
            <li class="nav-item"><a href="" class="nav-link fw-bold" style="font-family: sans-serif; font-size:18px">Lock the box</a></li>
        </ul>
    </div>
</nav>