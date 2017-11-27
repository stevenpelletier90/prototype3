    <footer class="py-5" style="background-color: #00bcd4">
        <div class="container">
            <div class="row px-">
                <div class="col-sm-4 text-center">
                    <p class="footer-items">Copyright &copy; SeaAngels Green Beach Clean 2017</p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class="footer-items">Copyright &copy; SeaAngels Green Beach Clean 2017</p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class="footer-items">Copyright &copy; SeaAngels Green Beach Clean 2017</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!--Calendar-->
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>

    <script src="scripts/moment.min.js"></script>
    <script src="scripts/fullcalendar.min.js"></script>
    <script src="scripts/gcal.min.js"></script>
    
    <script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({

			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,listYear'
			},

			displayEventTime: false, // don't show the time column in list view

			// THIS KEY WON'T WORK IN PRODUCTION!!!
			// To make your own Google API key, follow the directions here:
			// http://fullcalendar.io/docs/google_calendar/
			googleCalendarApiKey: 'AIzaSyBk9HiedcjOJn6EcwtVSqsaS5v4h5vuh1A',
		
			// Choose correct calendar
			events: 'aijq04csg9jm1b241if1delkn8@group.calendar.google.com',
			
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},
			
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
		});
	});

    </script>
</body>

</html>