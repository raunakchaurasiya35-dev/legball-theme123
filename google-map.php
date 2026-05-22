<?php
/*
Template Name: Google Map
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="contact.html">Contact Us</a> / <span>Google Map</span>
            </div>
            <h1 class="banner-title">Locate Our <br>Headquarters</h1>
        </div>
    </section>

    <!-- Map Content -->
    <section class="map-section section-padding">
        <div class="container">
            
            <div class="map-container-box">
                <!-- Map View -->
                <div class="map-wrapper">
                    <!-- Standard Delhi Sports Location Example -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.8368814755146!2d77.22851141508215!3d28.60465298242704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd4148b89417%3A0xc346765799144498!2sJawaharlal%20Nehru%20Stadium!5e0!3m2!1sen!2sin!4v1652345678901!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- Map Sidebar -->
                <div class="map-sidebar">
                    <div class="loc-card">
                        <h3><i class="fas fa-location-dot"></i> Official Address</h3>
                        <p>Legball Federation of India Headquarters,<br>
                        Plot No. 12, Sports Hub Area,<br>
                        New Delhi - 110001, India</p>
                    </div>

                    <div class="landmarks-box">
                        <h4 class="mb-3" style="font-weight:700; font-size:16px; color:#1e293b;">Nearby Landmarks</h4>
                        <div class="landmark-item">
                            <i><i class="fas fa-landmark"></i></i>
                            <span>Central Sports Complex</span>
                        </div>
                        <div class="landmark-item">
                            <i><i class="fas fa-hospital"></i></i>
                            <span>City General Hospital (2km)</span>
                        </div>
                        <div class="landmark-item">
                            <i><i class="fas fa-hotel"></i></i>
                            <span>LFI Guest House (Adjacent)</span>
                        </div>
                    </div>

                    <a href="https://goo.gl/maps/example" target="_blank" class="directions-btn">
                        <i class="fas fa-diamond-turn-right"></i>
                        Get Live Directions
                    </a>

                    <!-- Transit Info -->
                    <div class="transit-box">
                        <h4 class="transit-title">Public Transport Access</h4>
                        <div class="transit-list">
                            <div class="transit-tag metro">
                                <i class="fas fa-train"></i> Nehru Place Metro
                            </div>
                            <div class="transit-tag bus">
                                <i class="fas fa-bus"></i> Sports Hub Stand
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>