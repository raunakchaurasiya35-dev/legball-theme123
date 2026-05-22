<?php
/*
Template Name: Contact Numbers
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="contact.html">Contact Us</a> / <span>Contact Numbers</span>
            </div>
            <h1 class="banner-title">Federation <br>Directory</h1>
        </div>
    </section>

    <!-- Directory Content -->
    <section class="directory-section section-padding">
        <div class="container">
            
            <div class="directory-grid">
                
                <!-- General Helpdesk -->
                <div class="contact-card">
                    <div>
                        <span class="dept-badge">Public Relations</span>
                        <h3 class="dept-title">General Helpdesk</h3>
                        <p class="dept-desc">For general enquiries, rules clarification, and membership basics.</p>
                        <a href="tel:+911123456789" class="tel-link">
                            <i><i class="fas fa-phone"></i></i>
                            +91 11 2345 6789
                        </a>
                        <a href="tel:+911123456780" class="tel-link">
                            <i><i class="fas fa-phone"></i></i>
                            +91 11 2345 6780
                        </a>
                    </div>
                    <a href="tel:+911123456789" class="call-btn">Call Helpdesk</a>
                </div>

                <!-- Tournament Support -->
                <div class="contact-card">
                    <div>
                        <span class="dept-badge" style="background:#eff6ff; color:#2563eb;">Events & Logistics</span>
                        <h3 class="dept-title">Championship Cell</h3>
                        <p class="dept-desc">Regarding national/state championships, schedules, and venue details.</p>
                        <a href="tel:+919876543210" class="tel-link">
                            <i><i class="fas fa-mobile-screen"></i></i>
                            +91 98765 43210
                        </a>
                        <a href="tel:+919876543211" class="tel-link">
                            <i><i class="fas fa-mobile-screen"></i></i>
                            +91 98765 43211
                        </a>
                    </div>
                    <a href="tel:+919876543210" class="call-btn" style="background:#2563eb;">Contact Events</a>
                </div>

                <!-- Registration Desk -->
                <div class="contact-card">
                    <div>
                        <span class="dept-badge" style="background:#fff7ed; color:#ea580c;">Administrative</span>
                        <h3 class="dept-title">Registration Desk</h3>
                        <p class="dept-desc">For player IDs, official certification issues, and portal login support.</p>
                        <a href="tel:+919988776655" class="tel-link">
                            <i><i class="fas fa-id-card"></i></i>
                            +91 99887 76655
                        </a>
                        <a href="tel:+919988776644" class="tel-link">
                            <i><i class="fas fa-id-card"></i></i>
                            +91 99887 76644
                        </a>
                    </div>
                    <a href="tel:+919988776655" class="call-btn" style="background:#ea580c;">Contact Admin</a>
                </div>

            </div>

            <!-- Urgent Support Banner -->
            <div class="support-banner">
                <div class="support-content">
                    <span class="emergency-tag">High Priority</span>
                    <h2>Secretary General's Office</h2>
                    <p>For executive matters, affiliations, and legal documentation only.</p>
                </div>
                <div class="support-action">
                    <a href="tel:+919000012345" class="tel-link" style="color:white; font-size:28px;">
                        <i style="background:rgba(255,255,255,0.1);"><i class="fas fa-user-tie"></i></i>
                        +91 90000 12345
                    </a>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>