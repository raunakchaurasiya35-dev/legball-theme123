<?php
/*
Template Name: About Federation
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="about.html">About Us</a> / <span>About Federation</span>
            </div>
            <h1 class="banner-title">Legball Federation <br>of India</h1>
        </div>
    </section>

    <!-- Federation Intro -->
    <section class="fed-info-section section-padding">
        <div class="container">
            <div class="fed-grid">
                <div class="fed-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6person.jpg" alt="Federation HQ">
                    <div class="experience-badge">
                        <h3>20+</h3>
                        <p>Years of Legacy</p>
                    </div>
                </div>
                <div class="fed-content">
                    <span class="sub-title">THE GOVERNING BODY</span>
                    <h2 class="main-title">STRENGTHENING THE LEGBALL FOUNDATION IN INDIA</h2>
                    <p>The Legball Federation of India (LFI) stands as the supreme authority and national governing body for the sport of Legball in the Republic of India. Recognized for its commitment to sporting excellence, LFI has been instrumental in transforming a traditional game into a modern, competitive sport.</p>
                    <p>Our federation is dedicated to providing a platform for athletes from every corner of India, ensuring that talent is recognized, nurtured, and elevated to international standards. Through strategic planning and unwavering passion, we continue to build a sustainable ecosystem for the sport.</p>
                    <div class="fed-stats-row mt-4">
                        <div class="stat-item">
                            <h4>28+</h4>
                            <span>State Units</span>
                        </div>
                        <div class="stat-item">
                            <h4>50K+</h4>
                            <span>Registered Players</span>
                        </div>
                        <div class="stat-item">
                            <h4>500+</h4>
                            <span>Annual Events</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="values-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color: white">OUR CORE VALUES</h2>
                <p style="margin-bottom: 20px">The principles that guide our federation in every decision we make.</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Integrity</h3>
                    <p>Upholding the highest standards of transparency and fair play in all our competitions and governance.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h3>Inclusivity</h3>
                    <p>Ensuring the sport of Legball is accessible to everyone, regardless of background or region.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-trophy"></i></div>
                    <h3>Excellence</h3>
                    <p>Striving for perfection in athlete performance, coaching standards, and international representation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Timeline -->
    <section class="timeline-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">OUR JOURNEY</h2>
                <p>Key milestones that have shaped the Legball Federation of India.</p>
            </div>
            <div class="fed-timeline">
                <div class="timeline-item">
                    <div class="t-dot"></div>
                    <div class="t-year">2004</div>
                    <div class="t-content">
                        <h4>Federation Inception</h4>
                        <p>The LFI was officially formed with the goal of standardizing Legball rules and creating a national structure.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="t-dot"></div>
                    <div class="t-year">2010</div>
                    <div class="t-content">
                        <h4>International Recognition</h4>
                        <p>LFI became a key member of the International Legball Federation, paving the way for international tournaments.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="t-dot"></div>
                    <div class="t-year">2015</div>
                    <div class="t-content">
                        <h4>1st National Championship</h4>
                        <p>Organized the first-ever National Legball Championship in New Delhi with participation from 18 states.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="t-dot"></div>
                    <div class="t-year">2022</div>
                    <div class="t-content">
                        <h4>Digital Transformation</h4>
                        <p>Launched the official player registration portal and digital certification system for all LFI athletes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliations -->
    <section class="affiliations-section section-padding">
        <div class="container">
            <h2 class="section-title">GLOBAL AFFILIATIONS</h2>
            <div class="aff-logos">
                <div class="aff-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kheloindia2.png" alt="Khelo India">
                    <h4>Khelo India</h4>
                </div>
                <div class="aff-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fit india2.png" alt="Fit India">
                    <h4>Fit India</h4>
                </div>
                <div class="aff-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="ILF">
                    <h4>International Legball Fed.</h4>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>