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


      <div class="carousel-item active" style="background-image: url('images/header1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>SeaAngels</h1>


          <h3 class="slider-captions">First Slide</h3>


          <p>This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->


      <div class="carousel-item" style="background-image: url('images/header2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2>CHYEAH</h2>


          <h3 class="slider-captions">Second Slide</h3>


          <p>This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->


      <div class="carousel-item" style="background-image: url('images/pelican.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>Hey Im Mr Poopy Butthole</h1>


          <h3 class="slider-captions">Third Slide</h3>


          <p>This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="#carouselHome" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselHome" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
  </div>
</header>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mt-4">What We Do</h2>


      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>


      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>


      <p><a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
      </p>
    </div>


    <div class="col-sm-4">
      <h2 class="mt-4">Contact Us</h2>


      <address>
        <strong>Start Bootstrap</strong><br>
        3481 Melrose Place<br>
        Beverly Hills, CA 90210<br>
      </address>


      <address>
        <abbr title="Phone"><i aria-hidden="true" class="fa fa-phone"></i></abbr> (123) 456-7890<br>
        <abbr title="Email"><i aria-hidden="true" class="fa fa-envelope-o"></i></abbr> <a href="mailto:#">name@example.com</a>
      </address>
    </div>
  </div>
  <!-- /.row -->


  <div class="row">
    <div class="col-sm-4 my-4">
      <div class="card">
        <img alt="" class="card-img-top" src="http://placehold.it/300x200">

        <div class="card-body">
          <h4 class="card-title">Card title</h4>


          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
        </div>


        <div class="card-footer">
          <a class="btn btn-primary" href="#">Find Out More!</a>
        </div>
      </div>
    </div>


    <div class="col-sm-4 my-4">
      <div class="card">
        <img alt="" class="card-img-top" src="http://placehold.it/300x200">

        <div class="card-body">
          <h4 class="card-title">Card title</h4>


          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
        </div>


        <div class="card-footer">
          <a class="btn btn-primary" href="#">Find Out More!</a>
        </div>
      </div>
    </div>


    <div class="col-sm-4 my-4">
      <div class="card">
        <img alt="" class="card-img-top" src="http://placehold.it/300x200">

        <div class="card-body">
          <h4 class="card-title">Card title</h4>


          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>


        <div class="card-footer">
          <a class="btn btn-primary" href="#">Find Out More!</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- Page Content -->


<section class="py-5">
  <div class="container">
    <h2>This is header 2</h2>

    <hr>


    <h3>This is header 3</h3>


    <h4>This is header 4</h4>

    <hr>


    <h5>This is header 5</h5>


    <h6>This is header 6</h6>


    <p>This is regular text</p>
  </div>
</section>

<?php include("includes/footer.php"); ?>