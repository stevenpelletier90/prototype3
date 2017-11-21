    <nav class="navbar navbar-expand-md navbar-light" id="nav" style="background-color: #00bcd4">
        
        <a class="navbar-brand" href="index.php"><img alt="SeaAngels Green Beach Clean Logo" class="d-inline-block align-top animated fadeInLeft" height="75" src="images/logohead2.png"></a>
        <button aria-controls="expanded_nav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#expanded_nav" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="expanded_nav">
            <ul class="navbar-nav mr-auto animated fadeIn" id="nav_anim">
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='schedule'){echo 'active';}?>" href="schedule.php">SCHEDULE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='education'){echo 'active';}?>" href="education.php">EDUCATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='wildlife'){echo 'active';}?>" href="wildlife.php">WILDLIFE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='contact'){echo 'active';}?>" href="contact.php">CONTACT US</a>
                </li>
            </ul>
            <div class="nav-items-right animated fadeInRight">
                <a href="https://www.facebook.com/SeaAngelsBeachClean/" target="_blank"><i aria-hidden="true" class="fa fa-facebook-official fa-2x sm-icon"></i></a>
                <a href="https://twitter.com/" target="_blank"><i aria-hidden="true" class="fa fa-twitter fa-2x sm-icon"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i aria-hidden="true" class="fa fa-instagram fa-2x sm-icon"></i></a>
                <a href="#" class="btn btn-info mx-5 mb-2" role="button">Donate</a>
            </div>
        </div>
    </nav>