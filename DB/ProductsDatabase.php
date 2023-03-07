<?php 
    require_once __DIR__ . '/../Classes/Product.php';
    require_once __DIR__ . '/../Classes/Food.php';
    require_once __DIR__ . '/../Classes/Toy.php';
    require_once __DIR__ . '/../Classes/PetHouse.php';
    require_once __DIR__ . '/../Classes/Category.php';

    
    // Food Products
    $foodProducts = [];

    $foodProduct1 =  new Food(
        "Cat Treats",
        "These tasty cat treats are made with real chicken and are perfect for training or as a reward!",
        5.99,
        "https://www.shutterstock.com/image-vector/funky-cat-food-bag-pet-600w-622567142.jpg",
        new Category('cat'),
        75,
        50,
        1.5,
        "Treats"
    );

    $foodProduct2 = new Food(
        "Salmon Dog Food",
        "This dog food is made with real salmon and is rich in omega-3 fatty acids and protein that can improve your dog's skin and coat health.",
        19.99,
        "https://www.shutterstock.com/image-vector/pet-food-cats-dogs-bowl-600w-699689020.jpg",
        new Category('dog'),
        25,
        450,
        2.5,
        "Dry Food"
    );

    $foodProduct3 = new Food(
        "Chicken Jerky Dog Treats",
        "These lean chicken breast treats are made without any added preservatives, perfect for dogs with allergies.",
        12.99,
        "https://www.shutterstock.com/image-vector/funky-dog-food-bag-pet-600w-622567109.jpg",
        new Category('dog'),
        50,
        200,
        0.5,
        "Treats"
    );

    $foodProduct4 = new Food(
        "Wet Cat Food",
        "This cat food is made with real tuna, chicken, and vegetables, enriched with vitamins and minerals that can support your cat's overall health.",
        3.99,
        "https://www.shutterstock.com/image-vector/opened-cat-food-can-pet-600w-622567160.jpg",
        new Category('cat'),
        100,
        100,
        0.2,
        "Wet Food"
    );

    $foodProduct5 = new Food(
        "Grain-Free Dog Food",
        "This dog food is made without grains that can trigger food sensitivities in some dogs and often contains alternative sources of carbohydrates such as sweet potatoes or peas.",
        22.99,
        "https://www.shutterstock.com/image-vector/pet-shop-paper-bag-dish-600w-1070631557.jpg",
        new Category('dog'),
        30,
        350,
        1.5,
        "Dry Food"
    );

    $foodProduct6 = new Food(
        "Dental Cat Treats",
        "These specially designed treats can help clean your cat's teeth and freshen their breath, often made with ingredients like catnip and parsley.",
        8.99,
        "https://www.shutterstock.com/image-vector/cat-food-bag-icon-600w-610477841.jpg",
        new Category('cat'),
        50,
        50,
        0.2,
        "Treats"
    );

    $foodProduct7 = new Food(
        "Freeze-Dried Dog Food",
        "This dog food is made by removing moisture from high-quality ingredients like meat, fruits, and vegetables, which preserves nutrients and flavor.",
        27.99,
        "https://www.shutterstock.com/image-vector/pet-food-cats-dogs-set-600w-2176423815.jpg",
        new Category('dog'),
        20,
        400,
        1.0,
        "Dry Food"
    );

    $foodProduct8 = new Food(
        "Senior Cat Food",
        "This cat food is formulated with reduced calories, increased fiber, and joint support ingredients to meet the changing needs of older cats.",
        7.99,
        "https://www.shutterstock.com/image-vector/bag-can-food-cat-isolated-600w-1651418257.jpg",
        new Category('cat'),
        60,
        80,
        0.3,
        "Dry Food"
    );

    array_push($foodProducts, $foodProduct1, $foodProduct2, $foodProduct3, $foodProduct4, $foodProduct5, $foodProduct6, $foodProduct7, $foodProduct8 );


    // Toy products
    $toyProducts = [];

    $toyProduct1 = new Toy(
        "Interactive Dog Toy",
        "This interactive dog toy is designed to keep your dog entertained for hours. It features a treat dispenser and a maze that your dog has to navigate to get to the treats!",
        19.99,
        "https://thumbs.dreamstime.com/z/shetland-sheepdog-dog-toy-shetland-sheepdog-dog-toy-104449745.jpg",
        new Category('dog'),
        50,
        "10x10x10 cm",
        "Blue",
        "Plastic",
        "Interactive"
    );
    
    $toyProduct2 = new Toy(
        "Catnip Toy",
        "This catnip toy is perfect for cats who love to play. It's filled with high-quality catnip and features a feather on top to simulate prey!",
        8.99,
        "https://thumbs.dreamstime.com/z/100-catnip-bag-380636.jpg",
        new Category('cat'),
        100,
        "5x5x10 cm",
        "Pink",
        "Fabric",
        "Interactive"
    );
    
    $toyProduct3 = new Toy(
        "Dog Chew Toy",
        "This durable dog chew toy is made from non-toxic rubber and is perfect for aggressive chewers. It features a textured surface to massage your dog's gums and promote healthy teeth!",
        12.99,
        "https://www.shutterstock.com/image-vector/bone-dog-pet-toy-isometric-600w-2030488154.jpg",
        new Category('dog'),
        75,
        "15x10x10 cm",
        "Red",
        "Rubber",
        "Chew"
    );

    $toyProduct4 = new Toy(
        "Feather Wand Toy",
        "This feather wand toy is perfect for interactive play with your cat. The wand is made from lightweight materials and the feather on top is designed to simulate prey!",
        6.99,
        "https://thumbs.dreamstime.com/z/feathered-pole-cat-toy-18093769.jpg",
        new Category('cat'),
        150,
        "50 cm",
        "Green",
        "Plastic",
        "Interactive"
    );

    $toyProduct5 = new Toy(
        "Squeaky Dog Toy",
        "This squeaky dog toy is perfect for dogs who love to play fetch. It's made from durable materials and features a built-in squeaker for added entertainment!",
        9.99,
        "https://www.shutterstock.com/shutterstock/photos/2122733954/display_1500/stock-photo-purple-rubber-massage-ball-with-spikes-isolated-on-white-background-2122733954.jpg",
        new Category('dog'),
        100,
        "20x20x5 cm",
        "Yellow",
        "Plush",
        "Fetch"
    );

    array_push($toyProducts, $toyProduct1, $toyProduct2, $toyProduct3, $toyProduct4, $toyProduct5);


    // PetHouse products

    $petHouseProducts = [];

    $petHouseProduct1 = new PetHouse(
        "Dog House",
        "This dog house provides a comfortable and safe outdoor shelter for your furry friend.",
        99.99,
        "https://www.shutterstock.com/image-vector/dog-house-cartoon-vector-isolated-600w-683340760.jpg",
        new Category('dog'),
        10,
        "Brown",
        "Wooden",
        "Outdoor"
    );

    $petHouseProduct2 = new PetHouse(
        "Cat Bed",
        "This cozy cat bed is perfect for your feline friend to curl up and relax in.",
        29.99,
        "https://www.shutterstock.com/image-vector/cat-inside-house-pet-toys-600w-622567145.jpg",
        new Category('cat'),
        20,
        "Gray",
        "Plush",
        "Indoor"
    );

    $petHouseProduct3 = new PetHouse(
        "Dog Crate",
        "This durable dog crate is perfect for training and transport.",
        79.99,
        "https://www.shutterstock.com/image-vector/metal-wire-cage-crate-pet-600w-658854457.jpg",
        new Category('dog'),
        5,
        "Black",
        "Metal",
        "Portable"
    );

    $petHouseProduct4 = new PetHouse(
        "Cat Tree",
        "This cat tree provides your feline friend with hours of entertainment and a comfortable place to rest.",
        149.99,
        "https://www.shutterstock.com/image-vector/cat-tree-house-scratching-posts-600w-2012469461.jpg",
        new Category('cat'),
        3,
        "Beige",
        "Wooden",
        "Multi-level"
    );

    array_push($petHouseProducts, $petHouseProduct1, $petHouseProduct2, $petHouseProduct3, $petHouseProduct4);
?>