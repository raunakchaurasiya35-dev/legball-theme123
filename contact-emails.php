<?php
/*
Template Name: Contact Emails
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="contact.html">Contact Us</a> / <span>Email Directory</span>
            </div>
            <h1 class="banner-title">Digital <br>Correspondence</h1>
        </div>
    </section>

    <!-- Email Content -->
    <section class="email-section section-padding">
        <div class="container">
            
            <div class="email-grid">
                
                <!-- General Admin -->
                <div class="email-card">
                    <div class="mail-icon-box"><i class="fas fa-building-user"></i></div>
                    <h3 class="dept-name">Administration</h3>
                    <p class="dept-info">For official letters, association affiliations, and executive level correspondence.</p>
                    <a href="mailto:info@legballindia.com" class="mail-address">info@legballindia.com</a>
                    <a href="mailto:info@legballindia.com" class="send-btn">Send Message</a>
                </div>

                <!-- Technical/Referees -->
                <div class="email-card">
                    <div class="mail-icon-box"><i class="fas fa-whistle"></i></div>
                    <h3 class="dept-name">Technical Cell</h3>
                    <p class="dept-info">Queries regarding referee training, rulebook updates, and coaching certifications.</p>
                    <a href="mailto:technical@legballindia.com" class="mail-address">technical@legballindia.com</a>
                    <a href="mailto:technical@legballindia.com" class="send-btn">Send Message</a>
                </div>

                <!-- Championships -->
                <div class="email-card">
                    <div class="mail-icon-box"><i class="fas fa-trophy"></i></div>
                    <h3 class="dept-name">Events Desk</h3>
                    <p class="dept-info">Registration for national championships, state calendars, and tournament reports.</p>
                    <a href="mailto:events@legballindia.com" class="mail-address">events@legballindia.com</a>
                    <a href="mailto:events@legballindia.com" class="send-btn">Send Message</a>
                </div>

                <!-- Media -->
                <div class="email-card">
                    <div class="mail-icon-box"><i class="fas fa-camera-retro"></i></div>
                    <h3 class="dept-name">Media & PR</h3>
                    <p class="dept-info">For press releases, media accreditation, and branding/partnership enquiries.</p>
                    <a href="mailto:media@legballindia.com" class="mail-address">media@legballindia.com</a>
                    <a href="mailto:media@legballindia.com" class="send-btn">Send Message</a>
                </div>

            </div>

            <!-- Security Notice -->
            <div class="security-note">
                <div class="security-icon"><i class="fas fa-shield-halved"></i></div>
                <div class="security-text">
                    <h4>Official Communication Policy</h4>
                    <p>Always ensure you are emailing from your registered club/state email address. LFI never asks for passwords or payment details via email.</p>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>