<?php
/*
Template Name: Office Address
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="contact.html">Contact Us</a> / <span>Office Address</span>
            </div>
            <h1 class="banner-title">Our <br>Headquarters</h1>
        </div>
    </section>

    <!-- Office Content -->
    <section class="office-section section-padding">
        <div class="container">
            <div class="office-container">
                
                <div class="office-card">
                    <div class="office-info">
                        <span class="office-label">National Headquarters</span>
                        <h2 class="office-title">Legball Federation <br>Of India</h2>
                        
                        <!-- Address -->
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-location-dot"></i></div>
                            <div class="info-text">
                                <h4>Registered Office</h4>
                                <p>Plot No. 12, Sports Complex, <br>Sector 10, Rohini, <br>New Delhi - 110085, India</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="info-text">
                                <h4>Phone / Helpline</h4>
                                <p>+91 11 2345 6789 <br>+91 98765 43210</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-envelope-open-text"></i></div>
                            <div class="info-text">
                                <h4>Official Email</h4>
                                <p>info@legballindia.org <br>secretary@legballindia.org</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="hours-box">
                            <h4 style="font-size:12px; text-transform:uppercase; margin-bottom:15px; color:rgba(255,255,255,0.6);">Office Visiting Hours</h4>
                            <div class="hour-row">
                                <span>Monday - Friday</span>
                                <span>10:00 AM - 05:00 PM</span>
                            </div>
                            <div class="hour-row">
                                <span>Saturday</span>
                                <span>10:00 AM - 01:00 PM</span>
                            </div>
                            <div class="hour-row" style="color:var(--red);">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                    </div>

                    <div class="office-map-mock">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificatep.jpg" alt="Map Location">
                        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center;">
                            <i class="fas fa-location-pin" style="font-size:60px; color:var(--red);"></i>
                            <div style="background:white; padding:10px 20px; border-radius:10px; margin-top:10px; box-shadow:0 10px 20px rgba(0,0,0,0.2);">
                                <strong style="color:#000;">LFI HQ</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <p style="color:var(--office-secondary); font-weight:500;">Need to visit us? Please schedule an appointment via email for a better experience.</p>
                </div>

            </div>
        </div>
    </section>

    
<?php get_footer(); ?>