<?php
$page='contact';
$PageTitle="Contact SeaAngels";

function customPageHeader(){?>
    <?php } include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="text-center" id="education">Contact SeaAngels</h3>
                <h2 class="text-center">We Want to Hear From You!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">Questions</option>
                                    <option value="suggestions">Feedback</option>
                                    <option value="product">Complaints</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"> Subscribe to Newsletter
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form>
                    <h3>Our Office</h3>
                    <address>
                        <strong>Sea Angels</strong>
                        <br> Ocean Inlet Park
                        <br> 6990 N. Ocean Blvd.
                        <br> Boynton Beach, FL 33435
                        <br> (123) 456-7890
                    </address>
                    <address>
                        <strong>Email</strong>
                        <br>
                        <a href="mailto:#">contact@seaangles.org</a>
                    </address>
                </form>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>