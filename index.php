<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP object oriented programming 2</title>

    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark text-white">

    <header class="px-5 py-3 d-flex justify-content-between sticky-top bg-dark">
        <div>
            <h4>
            <a href="#" class="text-decoration-none text-white">Animal Products shop</a>
            </h4>
        </div>
        <div>
            <a href="#food-products" class="text-decoration-none">Food Products</a>
            <a href="#toy-products" class="mx-4 text-decoration-none">Toy Products</a>
            <a href="#pet-houses" class="text-decoration-none">Pet Houses</a>
        </div>
    </header>

    <?php
    require_once __DIR__ . '/DB/ProductsDatabase.php';

    // var_dump($foodProducts);
    // var_dump($toyProducts);
    // var_dump($petHouseProducts);
    ?>

    <h1 class="text-center py-4 my-4">
        Welcome to "animal products" shop
    </h1>

    <!-- FOOD PRODUCTS  -->
    <h2 id="food-products" class="container">
        Food Products:
    </h2>

    <div class="container d-flex flex-wrap justify-content-center">

        <?php foreach ($foodProducts as $product) : ?>

            <div class="card w-25 m-4" style="width: 18rem;">
                <img src="<?= $product->imgUrl ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body text-dark">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">
                        <?php 
                            if ($product->category->category ==='dog'): ?>
                                <i class="fa-solid fa-dog fs-1 text-primary"></i>
                            <?php elseif ($product->category->category === 'cat'): ?>
                                <i class="fa-solid fa-cat fs-1 text-danger"></i>
                        <?php endif; ?>
                    </li>
                    <li class="list-group-item"><?= $product->type ?></li>
                    <li class="list-group-item"><?= $product->kiloCalories ?> Kilocalories per 100g</li>
                    <li class="list-group-item">Weight: <?= $product->weight ?> Kg</li>
                </ul>
                <div class="card-body">
                    <a href="#nogo" class="card-link"><?= $product->price ?> &#8364;</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <!-- TOY PRODUCTS -->
    <h2 id="toy-products" class="container">
        Toy Products:
    </h2>

    <div class="container d-flex flex-wrap justify-content-center">

        <?php foreach ($toyProducts as $product) : ?>

            <div class="card w-25 m-4" style="width: 18rem;">
                <img src="<?= $product->imgUrl ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body text-dark">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">
                        <?php 
                            if ($product->category->category ==='dog'): ?>
                                <i class="fa-solid fa-dog fs-1 text-primary"></i>
                            <?php elseif ($product->category->category === 'cat'): ?>
                                <i class="fa-solid fa-cat fs-1 text-danger"></i>
                        <?php endif; ?>
                    </li>
                    <li class="list-group-item">Toy type: <?= $product->type ?></li>
                    <li class="list-group-item">Dimensions: <?= $product->dimensions ?></li>
                    <li class="list-group-item">Toy color: <?= $product->color ?></li>
                    <li class="list-group-item">Toy material:  <?= $product->material ?></li>
                </ul>
                <div class="card-body">
                    <a href="#nogo" class="card-link"><?= $product->price ?> &#8364;</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <!-- PETHOUSE PRODUCTS -->
    <h2 id="pet-houses" class="container">
        Pet House Products:
    </h2>

    <div class="container d-flex flex-wrap justify-content-center">

        <?php foreach ($petHouseProducts as $product) : ?>

            <div class="card w-25 m-4" style="width: 18rem;">
                <img src="<?= $product->imgUrl ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body text-dark">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">
                        <?php 
                            if ($product->category->category ==='dog'): ?>
                                <i class="fa-solid fa-dog fs-1 text-primary"></i>
                            <?php elseif ($product->category->category === 'cat'): ?>
                                <i class="fa-solid fa-cat fs-1 text-danger"></i>
                        <?php endif; ?>
                    </li>
                    <li class="list-group-item">Product type: <?= $product->type ?></li>
                    <li class="list-group-item">Color: <?= $product->color ?></li>
                    <li class="list-group-item">Material:  <?= $product->material ?></li>
                </ul>
                <div class="card-body">
                    <a href="#nogo" class="card-link"><?= $product->price ?> &#8364;</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</body>

</html>