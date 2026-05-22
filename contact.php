<?php
/*
Template Name: Contact
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/contact_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Contact Us</span>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-header-section section-padding">
        <div class="container">
            <span class="sub-title">SPORTS AUTHORITY OF INDIA</span>
            <h2 class="main-title">CONTACT US</h2>
            
            <div class="contact-info-wrapper">
                <div class="contact-card">
                    <div class="card-content">
                        <h3>HEAD OFFICE</h3>
                        <p class="address">123 Sports Complex, Jawahar Lal Nehru Stadium,<br>Pragati Vihar, New Delhi - 110003, India</p>
                        
                        <div class="contact-details">
                            <div class="c-item">
                                <i class="fas fa-envelope"></i>
                                <span>info-lfi[at]gov[dot]in</span>
                            </div>
                            <div class="c-item">
                                <i class="fas fa-phone-alt"></i>
                                <span>+91 11-23456789</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-primary btn-sm">VIEW ON MAP</a>
                    </div>
                    <div class="card-pattern"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.468205216664!2d77.234125!3d28.585722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2f123456789%3A0x123456789abcdef!2sJawaharlal%20Nehru%20Stadium!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Feedback Form Section -->
    <section class="feedback-section section-padding">
        <div class="container">
            <h2 class="section-title left-align">FEEDBACK FORM</h2>
            
            <form class="feedback-form">
                <div class="form-grid">
                    <div class="form-group">
                        <input type="text" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="E-mail Address" required>
                    </div>
                    <div class="form-group full-width">
                        <textarea placeholder="Your Address" rows="4"></textarea>
                    </div>
                    <div class="form-group full-width">
                        <textarea placeholder="Your Query" rows="4" required></textarea>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary submit-btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>

    
<?php get_footer(); ?>