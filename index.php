<?php

require __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Pets Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header>
        <img src="./img/logo.png" alt="logo">
    </header>
    <main> 
        <div class="d-flex">
            <?php foreach($products as $key => $product) { ?>
            <div class="card m-3 ms_flip_card" style="width: 20rem;">
                <div class="card-body ms_flip_card_inner">
                    <div class="ms_flip_card_front">
                        <img src="<?php echo $product->image; ?>" class="card-img-top ms_img" alt="">
                        <h5 class="card-title"><?php echo $product->name; ?></h5>
                        <i class="fas <?php echo $product->category->icon; ?>"></i>
                        <div> Prezzo: <?php echo $product->getPrice(); ?>€</div>

                    </div>
                    <div class="ms_flip_card_back">
                        <h6><?php echo $product->description; ?></h6>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>

