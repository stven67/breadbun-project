@extends('layouts.template')

@section('title', 'Pre-Order')

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5">Order Now</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-bread-slice"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                <!-- Portfolio Item 1 - Bread Bun -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/breadbuncart.png" alt="Bread Bun" />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Bun</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Bread Bun">
                                <input type="hidden" name="product_price" value="6000">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 2 - Bread Polo Bun -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/roti2.png" alt="Bread Polo Bun" />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Polo Bun</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Bread Polo Bun">
                                <input type="hidden" name="product_price" value="6000">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 3 - Bread Cheese Corn -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid portfolio-img" src="/assets/img/roti3.png" alt="Bread Cheese Corn" />
                        <div class="text-center mt-2">
                            <h4 class="item-title">Bread Cheese Corn</h4>
                            <p class="item-price">Rp.6.000,-</p>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Bread Cheese Corn">
                                <input type="hidden" name="product_price" value="6000">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-lg" style="background-color: #c79850; color: white;">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
