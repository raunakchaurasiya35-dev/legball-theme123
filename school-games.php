<?php
/*
Template Name: School Games
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>School Games</span>
            </div>
            <h1 class="banner-title">School <br>Games</h1>
        </div>
    </section>

    <!-- SGFI Recognition -->
    <section class="recognition-section section-padding">
        <div class="container">
            <div class="sgfi-box">
                <div class="sgfi-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kheloindia2.png" alt="SGFI">
                </div>
                <div class="sgfi-content">
                    <h2 class="section-title text-left" style="margin-bottom:15px;">SGFI RECOGNITION</h2>
                    <p>Legball is an officially recognized sport by the <strong>School Games Federation of India (SGFI)</strong>. This recognition allows students to compete in National School Games and earn certificates valid for sports quota admissions in prestigious universities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament Grid -->
    <section class="formats-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">SCHOOL TOURNAMENT FORMATS</h2>
                <p style="margin-bottom: 20px">We organize structured competitions at all levels of the school education system.</p>
            </div>
            
            <div class="school-grid">
                <div class="school-card">
                    <i class="fas fa-school"></i>
                    <h3>Inter-School</h3>
                    <p>Local championships between schools within a single city or district.</p>
                </div>
                <div class="school-card">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Zonal Games</h3>
                    <p>Competitions between winners of different districts at the zonal level.</p>
                </div>
                <div class="school-card">
                    <i class="fas fa-medal"></i>
                    <h3>National School Games</h3>
                    <p>The elite level competition featuring the best school teams from every state.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-box">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color:var(--white);">STUDENT ATHLETE BENEFITS</h2>
                <p style="margin-bottom: 20px">Competing in School Games offers unique advantages for overall development.</p>
            </div>
            
            <div class="benefit-grid">
                <div class="benefit-item">
                    <i class="fas fa-graduation-cap"></i>
                    <div>
                        <h5>Academic Quota</h5>
                        <p>Certificates provide eligibility for sports quota in colleges and professional courses.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-award"></i>
                    <div>
                        <h5>Scholarship Support</h5>
                        <p>National level winners are eligible for various central and state government sports scholarships.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-user-check"></i>
                    <div>
                        <h5>Holistic Development</h5>
                        <p>Focus on character building, discipline, and teamwork through competitive sports.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-briefcase"></i>
                    <div>
                        <h5>Professional Path</h5>
                        <p>Early identification for selection into State and National Senior teams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="upcoming-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">UPCOMING SCHOOL EVENTS</h2>
                <p style="margin-bottom: 20px">Register your school team for these upcoming championships.</p>
            </div>
            
            <div class="event-list">
                <div class="event-row">
                    <div>
                        <span class="date">Nov 20, 2026</span>
                        <h4 class="mt-2">National School Games (U-17)</h4>
                        <p style="font-size:14px; color:var(--gray);">Venue: Thyagaraj Stadium, Delhi</p>
                    </div>
                    <a href="#" class="btn btn-orange">Register School</a>
                </div>
                <div class="event-row">
                    <div>
                        <span class="date">Dec 12, 2026</span>
                        <h4 class="mt-2">Inter-School Zonal Trophy</h4>
                        <p style="font-size:14px; color:var(--gray);">Venue: Various Regional Hubs</p>
                    </div>
                    <a href="#" class="btn btn-orange">Register School</a>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>