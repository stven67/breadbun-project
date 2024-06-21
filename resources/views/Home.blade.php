@extends('layouts.template')

@section('title')
    Home content
@endSection

@section('content')
        <!--Masthead-->
        <header class="masthead bg-primary text-white text-center" style="background-image: url('/assets/img/background11.png'); background-size: cover;">
    <div class="container d-flex align-items-left flex-column">
        <!-- Masthead Heading-->
        <p class="masthead-heading text-uppercase text-start w-100 mb-0">Welcome to breadBun</p><br>
        <p class="masthead-heading text-uppercase text-start w-100 mb-0">Enjoy our bread</p><br>

        <!-- Masthead Button (Leads to About Page) -->
        <div class="text-start">
            <a href="/about" class="btn btn-light btn-lg" style="color: #c79850;">Learn More</a>
        </div>
    </div>
</header>


<section class="page-section AboutUs" id="about" style="background-image: url('/assets/img/background.png'); background-size: cover; background-position: center;">
    <div class="container">
        <!-- About Us Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About Us</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-bread-slice"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Us Content -->
        <div class="row justify-content-left">
            <div class="col-lg-8">
                <p class="lead text-left" style="font-weight: bold;">
                    BreadBun, sebuah platform yang mempersembahkan beragam roti berkualitas tinggi langsung ke tangan Anda. Diluncurkan dengan visi untuk menghadirkan kelezatan roti terbaik ke dalam kehidupan sehari-hari, kami menawarkan pengalaman belanja yang nyaman dan memuaskan bagi pelanggan kami.
                </p>
                <p class="lead text-left" style="font-weight: italic;">
                    memberikan kualitas terbaik dalam setiap roti yang kami hadirkan. Setiap produk kami dibuat dengan cinta dan dedikasi, dengan bahan-bahan terbaik yang dipilih dengan teliti. Dengan memberikan pilihan yang beragam dan inovatif, kami berusaha untuk memenuhi berbagai selera dan kebutuhan pelanggan kami.
                </p>
            </div>
        </div>
    </div>
</section>

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
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-bread-slice"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-lg" style="background-color: #c79850; color: white;">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endSection