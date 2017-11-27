<?php
$page='schedule';
$PageTitle="SeaAngels Schedule";

function customPageHeader(){?>
    <?php } include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>



    <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Upcoming Events
            <small>Everyone is welcome!</small>
        </h1>
        <hr>
        <div class="row">
            <div id='loading'>loading...</div>
            <div id='calendar'></div>
        </div>

        <hr>

        <div class="row">
            <h1>Come help us save the beach!</h1>
        </div>
        <div class="row">
            <div class="col-sm-4 my-4 calendarinfo">
                <i class="fa fa-5x fa-map-marker" aria-hidden="true"></i>
                <p>6990 N. Ocean Blvd.
                    <br> Boynton Beach, FL 33435
                </p>
            </div>
            <div class="col-sm-4 my-4 calendarinfo">
                <i class="fa fa-5x fa-calendar" aria-hidden="true"></i>
                <p>Last Saturday of Every Week
                <br>Rain or Shine</p>
            </div>
            <div class="col-sm-4 my-4 calendarinfo">
                <i class="fa fa-5x fa-clock-o" aria-hidden="true"></i>
                <p>8:00am - 10:30am
                <br>Holidays may effect time</p>
            </div>
        </div>
        <div class="row calendarinfo">
            <div class="col-sm-8" style="float: none; margin: 0 auto;">
                <p>We clean the beaches from Stuart to Boca Raton. We are individuals dedicated to implementing change and cleaning our beaches that are in desperate need of our intervention. We are the leaders in "Green" cleanups. We recycle, upcycle and only use sustainable cleaning supplies like buckets, grabbers and reusable gloves. No plastic bags, plastic water bottles or latex gloves here to add to our landfills. We also give community service hours, provide a snack, and water. Once you clean with us you will know why we are the leaders in “Green” cleanups in Florida. For more information <a href="contact.php">Contact Us</a>
                </p>
            </div>
        </div>
    </div>

    <hr>

    <?php include("includes/footer.php"); ?>
