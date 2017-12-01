<?php
$page='schedule';
$PageTitle="SeaAngels Schedule";

function customPageHeader(){?>
    <?php } include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>



    <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Upcoming Events
            
        </h1>


        <hr>

                <div class="row calendarinfo container-fluid">

            <div class="col-sm-10" style="float: none; margin: 0 auto; width:100vw; background-color:#e5e5e5; border-style: solid;  border-radius: 5px; border-color:#e5e5e5; padding:10px; 15px 10px 15px; ">
            <img src="images/icons/beach.png">
            <h2>Come help us save the beach!</h2>
                <p>From Stuart to Boca Raton, we are individuals dedicated to implementing change and cleaning our beaches that are in desperate need of our intervention. As the leaders in "Green" cleanups, we are dedicated to recycling, upcycling using ONLY sustainable cleaning supplies like buckets, grabbers and reusable gloves. No plastic bags, plastic water bottles or latex gloves here to add to our landfills. We also give community service hours, provide a snack, and water. Once you clean with us you will know why we are the leaders in “Green” cleanups in Florida. For more information <a href="contact.php">Contact Us.</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div id='loading'>loading...</div>
            <div id='calendar'></div>
        </div>



        <hr>



        <div class="row">
            
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

    </div>

    <hr>

    <?php include("includes/footer.php"); ?>
