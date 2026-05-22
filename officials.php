<?php
/*
Template Name: Officials
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/images/contact_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Officials & Certification</span>
            </div>
            <h1 class="banner-title">Officials & Certification</h1>
        </div>
    </section>

    <!-- Registration Grid -->
    <section class="registration-grid section-padding">
        <div class="container">
            <h2 class="section-title text-center">BECOME A CERTIFIED OFFICIAL</h2>
            <div class="reg-options">
                <div class="reg-card">
                    <div class="card-icon"><i class="fas fa-whistle"></i><i class="fas fa-stopwatch"></i></div>
                    <h3>Referee</h3>
                    <p>Enforce the rules of the game and ensure fair play on the court.</p>
                    <a href="#" class="btn btn-primary">Apply as Referee</a>
                </div>
                <div class="reg-card highlighted">
                    <div class="card-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3>Coach</h3>
                    <p>Nurture talent and lead teams to victory with expert guidance.</p>
                    <a href="#" class="btn btn-primary">Apply as Coach</a>
                </div>
                <div class="reg-card">
                    <div class="card-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Technical Official</h3>
                    <p>Manage the logistics and technical aspects of championships.</p>
                    <a href="#" class="btn btn-primary">Apply as Official</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Pathway -->
    <section class="pathway-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title left-align">CERTIFICATION PATHWAY</h2>
            <div class="path-steps">
                <div class="step">
                    <div class="step-num">01</div>
                    <div class="step-content">
                        <h4>Application</h4>
                        <p>Submit your initial application with educational & sports background.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">02</div>
                    <div class="step-content">
                        <h4>Foundation Course</h4>
                        <p>Complete the mandatory 3-day basic training workshop.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">03</div>
                    <div class="step-content">
                        <h4>Examination</h4>
                        <p>Clear the written and practical evaluation conducted by LFI.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">04</div>
                    <div class="step-content">
                        <h4>Certification</h4>
                        <p>Receive your official LFI license and digital certificate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Calendar Section -->
    <section class="training-calendar section-padding">
        <div class="container">
            <div class="calendar-box">
                <div class="cal-info">
                    <span class="alert-tag">LATEST UPDATE</span>
                    <h3>Upcoming Referees Workshop - North Zone</h3>
                    <p>A specialized workshop for Level 2 Referee certification will be held in Chandigarh from August 10-12, 2024. Limited seats available.</p>
                </div>
                <div class="cal-actions">
                    <a href="#" class="btn btn-primary">Register for Workshop</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="resources-section section-padding">
        <div class="container">
            <h2 class="section-title left-align">OFFICIAL RESOURCES</h2>
            <div class="res-grid">
                <div class="res-item">
                    <i class="fas fa-file-pdf"></i>
                    <div>
                        <h4>Referee Rulebook 2024</h4>
                        <p>Updated guidelines for on-field officiating.</p>
                        <a href="#">Download PDF</a>
                    </div>
                </div>
                <div class="res-item">
                    <i class="fas fa-file-pdf"></i>
                    <div>
                        <h4>Coach Code of Conduct</h4>
                        <p>Ethical guidelines for all LFI certified coaches.</p>
                        <a href="#">Download PDF</a>
                    </div>
                </div>
                <div class="res-item">
                    <i class="fas fa-video"></i>
                    <div>
                        <h4>Training Videos</h4>
                        <p>Visual guides for technical officiating and scoring.</p>
                        <a href="#">Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>