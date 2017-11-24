<?php
$page='home';
$PageTitle="SeaAngels Home";

function customPageHeader() { ?>
    <?php } include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <header>
        <div class="carousel slide" data-ride="carousel" id="carouselHome">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselHome">
                </li>
                <li data-slide-to="1" data-target="#carouselHome">
                </li>
                <li data-slide-to="2" data-target="#carouselHome">
                </li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/download.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>EXAMPLE</h1>
                        <h3 class="slider-captions">EXAMPLE</h3>
                        <p>EXAMPLE</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/header2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>EXAMPLE</h1>
                        <h3 class="slider-captions">EXAMPLE</h3>
                        <p>EXAMPLE</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/turtle.jpg')" alt="Header Image Turtle" title="Header Image Turtle">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>EXAMPLE</h1>
                        <h3 class="slider-captions">EXAMPLE</h3>
                        <p>EXAMPLE</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" data-slide="prev" href="#carouselHome" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselHome" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mt-4">What We Do</h1>
                <p>We are the Sea Angels! A 501(c)(3) nonprofit environmental conservation organization located in Palm Beach County, Florida. Our main goal is simple: to provide education and awareness to the seriousness of litter and its effects on our environment. We put our mission to action by organizing beach clean ups along Florida's coasts.</p>
                <p>Our cleanups place an emphasis on sustainability. Therefore, we use only sustainable cleaning materials such as reusable buckets, litter grabbers and reusable gloves. Water bottles? Nope, not at our events. We only use reusable coolers as well as provide you with a snack. Wait, before that ends up in the trash, we are going to recycle that wrapper. We recycle, upcycle, provide education and most of all we are getting involved and we are making a change. We are eco-minded and committed to not only cleaning our beaches and oceans, but cleaning them smart!</p>
                <p>We are passionate about our commitment to the environment and encourage anyone who shares this passion to come and join us!</p>
                <p><a class="btn btn-primary btn-lg" href="#">Get Involved! &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2 class="mt-4">Contact Us</h2>
                <address>
                    <strong>Sea Angels "Green" Beach Clean, Inc.</strong>
                    <br> 3481 Melrose Place
                    <br> Boca Raton, Fl 33427
                    <br>
                </address>
                <address>
                    <abbr title="Phone"><i aria-hidden="true" class="fa fa-phone"></i></abbr> (123) 456-7890
                    <br>
                    <abbr title="Email"><i aria-hidden="true" class="fa fa-envelope-o"></i></abbr> <a href="mailto:#">info@seaangels.org</a>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 my-4">
                <div class="card">
                    <img class="card-img-top" src="images/heart.jpg" alt="Heart Hands Over Sunset">
                    <div class="card-body">
                        <h4 class="card-title">Give Thanks To Our Beaches!  </h4>
                        <p class="card-text"> Join us on Saturday, November 25th at Ocean Inlet Park, from 8-10:30 for our monthly beach cleanup. We provide everything you need & give community service hours. No pre-registration is necessary. For more cleanup dates and address</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Join Us &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-4">
                <div class="card" style="">
                    <img alt="" class="card-img-top" src="images/amazonsmile.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Help Support Our Cause!</h4>
                        <p class="card-text">Supporting the Sea Angels has never been easier. When you shop on Amazon, you could be donating a portion of that sale to us. Simply click on the logo below when you shop, purchase what you need and voila!!! You just donated to a great cause.</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="#">Find Out More &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-4">
                <div class="card" style="">
                    <img alt="" class="card-img-top" src="images/terra.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Terracycle</h4>
                        <p class="card-text">We will be participating in Terracycle's Beach Plastic Cleanup Program. Certain plastic that we were unable to recycle such as plastic utensils can now be sent to Terracycle and eventually be made into other products. To learn more about this project CLICK HERE</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="#">Learn More About This Project &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>