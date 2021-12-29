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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body style="background-color: #f9f9f9;">
    <?php include "header.php" ?>
    
    <div class="container bg-white shadow-sm mt-5">
        <?php 
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $book = singleDataView("books JOIN category ON books.category=category.cat_id","id=$id");
        ?>

        <div class="row pt-4 ps-3">
            <div class="col-lg-3">
                <img src='<?= "products/".$book['cover'].""?>' alt="" class="img-fluid">
            </div>

            <div class="col-lg-5">
                <h2 class="fs-2 fw-normal "><?= $book['title'] ?></h2>

                <div class="d-flex justify-content-between">
                    <p class="fs-5 pt-2 fw-light">Author: <span class="text-uppercase" style="color:#e94d1c"><?= $book['author'] ?></span></p>
                    <p class="fs-5 pt-2 fw-light">Binding: <span class="text-uppercase" style="color:#e94d1c"><?= $book['binding'] ?></span></p>
                </div>
                <hr>
                <p class="fs-4 py-0">DESCRIPTION</p>
                <hr>

                <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio nobis alias ipsam laborum vitae et eligendi veniam sequi temporibus mollitia consequatur, magni numquam illo facere est excepturi omnis! Dolorum tenetur placeat tempore laudantium soluta commodi delectus quibusdam officiis facere cupiditate, deleniti ab odit unde ipsa consectetur quisquam illum quam sed ut pariatur magnam illo magni consequuntur est. Possimus labore id ex perspiciatis iusto sit quam eligendi, pariatur optio quaerat numquam! Rerum est alias similique delectus ad odit impedit pariatur, consequatur cum assumenda eaque. Adipisci, consectetur eligendi? Ratione, fugit repellendus assumenda asperiores et ut magni eius temporibus sunt tempore, numquam perspiciatis! Laboriosam delectus maiores, labore minus aliquid odio porro quam corporis eius aspernatur ea, natus mollitia illo magni ipsam alias a. Et, molestias voluptates quae quos modi ducimus pariatur eligendi cupiditate deleniti doloribus sequi aut! Animi nostrum, debitis aperiam numquam aliquid rerum nemo unde eaque repudiandae, accusantium nisi quia doloribus necessitatibus commodi nobis illo aut id tenetur suscipit aliquam dicta reprehenderit optio? Dolor deleniti mollitia illo excepturi esse. Non voluptatem odio a consequuntur ab nesciunt aliquam animi! Sed dignissimos perspiciatis voluptates recusandae provident! Omnis facere nostrum ipsum, ex ratione labore corrupti amet distinctio necessitatibus nesciunt, magnam modi! Voluptatibus incidunt facere mollitia, repellat molestias beatae id non dolorem voluptates eum magni. Obcaecati cum enim consequatur minus blanditiis, amet aliquam nesciunt, vel, impedit quisquam aut. Nemo quo deleniti dolor autem eum voluptates numquam placeat sapiente asperiores minima! </p>

                <div class="d-flex flex-wrap justify-content-between">
                    <p class="small text-secondary" >ISBN: <span class="fw-bold"><?= $book['isbn'] ?></span></p>
                    <p class="small text-secondary" >Language: <span class="fw-bold"><?= $book['language'] ?></span></p>
                    <p class="small text-secondary" >Binding: <span class="fw-bold"><?= $book['binding'] ?></span></p>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="card" >
                    <div class="card-header pb-0" style="background-color: #67809f;">
                        <p class="fs-5 fw-bold text-white d-inline">BUY</p>
                        <p class="fs-5 fw-bold text-white float-end">RS. <?= $book['cost'] ?></p>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <a href="" class="btn" style="width: 10pc;" style="background-color: #e94d1c;">ADD TO WISHLIST</a>
                            <a href="cart.php?id=<?= $book['id'] ?>" class="btn ms-auto" style="background-color: #e94d1c; width:9pc">BUY NOW</a>
                        </div>
                        <img src="web images/download-app-min.jpg" alt="" class=" card-img img-fluid pt-5 ">

                    </div>
                </div>
                
                <div class="card mt-3">
                    <div class="card-body bg-light">
                        <p class="small text-secondary">Seller: <span class="fw-bold text-dark">BookChor</span></p>
                        <p class="small text-secondary mb-0">Dispatch Time: 1-3 working days</p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>