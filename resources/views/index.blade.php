<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Website </title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawsome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- using slick slider for slidings  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <!-- custome css link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Miniture</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="shop-icon">
                        <ul>
                            <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner-sec">
        <div class="container-fluid">
            <img src="{{ asset('images/banner1.jpg') }}" alt="Banner">
            <div class="header-main">
                <h4>Sale Upto 30% Off/-</h4>
                <h1>Furniture Collection <span>ca be a creative marketing</span></h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum atque iste libero. Doloribus vero
                    distinctio, accusantium fugiat dolorum rerum quod!</p>
                <button type="button" class="btn btn-nav ">Shop All </button>
                <button type="button" class="btn btn-nav bg-dark ">View More</button>
            </div>
        </div>
    </section>

    <div class=" icon-boxes mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="icon-box">
                        <img src="{{ asset('images/free-delivery.png') }}" alt="">
                        <h6>Free Shipping & Returning</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <img src="{{ asset('images/payment-protection.png') }}" alt="">
                        <h6>Secure Payments</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <img src="{{ asset('images/headphone.png') }}" alt="">
                        <h6>Customer Services</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <img src="{{ asset('images/cashback.png') }}" alt="">
                        <h6>Maney Back Guarentee</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 product-sec">
        <div class="container">
            <div class="title text-center w-75 mx-auto">
                <h6>Products</h6>
                <h2>Exclusive <span>Products</span></h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="product-box">
                        <div class="pr-img"><img src="{{ asset('images/service-1.jpg') }}" alt="">
                        </div>
                        <div class="pr-icon">
                            <ul>
                                <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-txt">
                            <h5>Gather Sofa</h5>
                            <span class="price">$35.90</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-box">
                        <div class="pr-img"><img src="{{ asset('images/service-2.jpg') }}" alt=""></div>
                        <div class="pr-icon">
                            <ul>
                                <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-txt">
                            <h5>Commodo Furniture</h5>
                            <span class="price">$35.90</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-box">
                        <div class="pr-img"><img src="{{ asset('images/service-3.jpg') }}" alt=""></div>
                        <div class="pr-icon">
                            <ul>
                                <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-txt">
                            <h5>Dining Chair</h5>
                            <span class="price">$35.90</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-box">
                        <div class="pr-img"><img src="{{ asset('images/service-4.jpg') }}" alt=""></div>
                        <div class="pr-icon">
                            <ul>
                                <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                                <li><a href=""><i class="fa-solid fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-txt">
                            <h5>Natural wood</h5>
                            <span class="price">$35.90</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="demo-sec py-5">
        <div class="container">
            <div class="title text-center w-75 mx-auto">
                <h2>Hand Picked <span>Models</span></h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus delectus dicta quod iusto
                    necessitatibus quos!</p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="demo-area">
                        <div class="demo-img"><img src="{{ asset('images/instgram-1.jpg') }}" alt=""></div>
                        <div class="demo-text">
                            <p>Get 70% Off/-</p>
                            <h3>Chair Collections</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="demo-area">
                        <div class="demo-img"><img src="{{ asset('images/instgram-2.jpg') }}" alt=""></div>
                        <div class="demo-text">
                            <p>Get 90% Off/-</p>
                            <h3>Wood Materials</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="demo-area">
                        <div class="demo-img"><img src="{{ asset('images/instgram-3.jpg') }}" alt=""></div>
                        <div class="demo-text">
                            <p>Get 50% Off/-</p>
                            <h3>Furniture Collections</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="demo-area">
                        <div class="demo-img"><img src="{{ asset('images/instgram-4.jpg') }}" alt=""></div>
                        <div class="demo-text">
                            <p>Get 20% Off/-</p>
                            <h3>Sofa Collections</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-img w-75">
                        <a class="navbar-brand text-white" href="#">Miniture</a>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nemo ex
                            consequuntur. Praesentium, rerum dolorum!</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="f-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="f-links">
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">About Us</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Blogs</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Products</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Review</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="f-title">
                        <h3>Categories</h3>
                    </div>
                    <ul class="f-links">
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Wooden</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Plywood</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Plastic</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Foam</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Luxury</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Comfy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="f-title">
                        <h3>My Account</h3>
                    </div>
                    <ul class="f-links">
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">My Account</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Discount</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Returns</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Order History</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Privacy Ploicy</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i><a href="">Shipments</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="f-title">
                        <h3>Contact Info</h3>
                    </div>
                    <ul class="f-list">
                        <li><i class="fa-solid fa-location-dot"></i><a href="">1234 Lorem ipsum dolor sit.</a>
                        </li>
                        <li><i class="fa-solid fa-phone"></i><a href="tel:12345 67890">12345 67890</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a
                                href="mailto:codingwing@gmail.com">codingwing@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyrights">
        <a href="">Copyrights Reserved @2024 Coding wing: </a>
    </div>


</body>

</html>
