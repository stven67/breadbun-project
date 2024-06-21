<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <link rel="stylesheet" href="path/to/fontawesome.css">
    <style>
        .mt-custom {
            margin-top: 50px; /* Adjust the value as needed */
        }
    </style>
</head>
<body>
    @extends('layouts.template')

    @section('title')
        Home content
    @endSection

    @section('content')
 
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-custom">Order Now</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-bread-slice"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/breadbuncart.png" alt="..." />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Bun</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <button class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/roti2.png" alt="..." />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Polo Bun</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <button class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/roti3.png" alt="..." />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Cheese Corn</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <button class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endSection

    <!-- Include Bootstrap JS -->
    <script src="path/to/jquery.js"></script>
    <script src="path/to/bootstrap.bundle.js"></script>
</body>
</html>
