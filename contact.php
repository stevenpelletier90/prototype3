<?php
$page='contact';
$PageTitle="Contact SeaAngels";

function customPageHeader(){?>
<?php } include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container">
  <div class="row" style="padding:50px;">
    <div class="col-sm-12 col-lg-12">
      <h3 class="text-center" id="education">Contact Sea Angels</h3>
      <h2 class="text-center">We Want to Hear From You!</h2>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label> <input class="form-control" id="name" placeholder="Enter name" required="required" type="text">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <div class="input-group">
                <input class="form-control" id="email" placeholder="Enter email" required="required" type="email">
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label> <select class="form-control" id="subject" name="subject" required="required">
                <option selected value="na">
                  Choose One:
                </option>
                <option value="service">
                  Questions
                </option>
                <option value="suggestions">
                  Feedback
                </option>
                <option value="product">
                  Complaints
                </option>
              </select>
            </div>
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox"> Subscribe to Newsletter</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Message</label> 
              <textarea class="form-control" cols="25" id="message" name="message" placeholder="Message" required="required" rows="9"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Send Message</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <form>
        <h3>Our Office</h3>
        <address>
          <strong>Sea Angels</strong><br>
          Ocean Inlet Park<br>
          6990 N. Ocean Blvd.<br>
          Boynton Beach, FL 33435<br>
          (123) 456-7890
        </address>
        <address>
          <strong>Email</strong><br>
          <a href="mailto:#">seaangelsflorida@gmail.com</a>
        </address>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>