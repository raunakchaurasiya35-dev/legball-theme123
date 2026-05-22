<?php
/*
Template Name: Players Corner
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner"
        style="background: linear-gradient(rgba(59, 22, 91, 0.8), rgba(242, 98, 34, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_banner.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Players Corner</span>
            </div>
            <h1 class="banner-title">Players Corner</h1>
        </div>
    </section>

    <!-- Registration Section -->
    <section class="registration-section section-padding">
        <div class="container">
            <div class="reg-grid">
                <div class="reg-content">
                    <span class="sub-title">JOIN THE ELITE</span>
                    <h2 class="main-title">OFFICIAL PLAYER REGISTRATION 2024-25</h2>
                    <p>Elevate your game and represent your state on the national stage. LFI registration is your first
                        step towards professional excellence in Legball. Get your official ID and unlock exclusive
                        opportunities.</p>

                    <ul class="benefits-list">
                        <li><i class="fas fa-id-card"></i> <span><strong>Digital ID Card</strong><br>Instant access to
                                your official player credentials.</span></li>
                        <li><i class="fas fa-medal"></i> <span><strong>National Trials</strong><br>Direct eligibility
                                for upcoming selection trials.</span></li>
                        <li><i class="fas fa-shield-alt"></i> <span><strong>Medical Insurance</strong><br>Dedicated
                                sports injury coverage for athletes.</span></li>
                        <li><i class="fas fa-certificate"></i> <span><strong>Blockchain Certs</strong><br>Secure,
                                verifiable digital participation certificates.</span></li>
                    </ul>

                    <div class="reg-buttons">
                        <a href="#" class="btn btn-primary">Start Registration <i class="fas fa-arrow-right"></i></a>
                        <a href="#" class="btn-outline">Renewal Login</a>
                    </div>
                </div>
                <div class="reg-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball.jpg"
                        alt="Athlete Celebration" class="floating-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Players Grid -->
    <section class="hall-of-fame section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">HALL OF FAME</h2>
                <p>Recognizing the extraordinary talent and dedication of our national champions.</p>
            </div>

            <div class="player-grid">
                <!-- Player Card 1 -->
                <div class="player-card">
                    <div class="p-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/awarded.jpg"
                            alt="Player">
                        <div class="p-rank">01</div>
                    </div>
                    <div class="p-info">
                        <span class="p-state">Haryana | Senior</span>
                        <h3>Sneha Sharma</h3>
                        <div class="p-stats">
                            <span><i class="fas fa-trophy"></i> 3X National Champion</span>
                            <span><i class="fas fa-bolt"></i> Best Attacker 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Player Card 2 -->
                <div class="player-card">
                    <div class="p-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_banner.png"
                            alt="Player">
                        <div class="p-rank">02</div>
                    </div>
                    <div class="p-info">
                        <span class="p-state">Maharashtra | Captain</span>
                        <h3>Amit Deshmukh</h3>
                        <div class="p-stats">
                            <span><i class="fas fa-trophy"></i> 2X Gold Medalist</span>
                            <span><i class="fas fa-star"></i> Senior Men's Captain</span>
                        </div>
                    </div>
                </div>

                <!-- Player Card 3 -->
                <div class="player-card">
                    <div class="p-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg"
                            alt="Player">
                        <div class="p-rank">03</div>
                    </div>
                    <div class="p-info">
                        <span class="p-state">Uttar Pradesh | Junior</span>
                        <h3>Priya Kumari</h3>
                        <div class="p-stats">
                            <span><i class="fas fa-fire"></i> Junior National MVP</span>
                            <span><i class="fas fa-award"></i> Rising Star Award</span>
                        </div>
                    </div>
                </div>

                <!-- Player Card 4 -->
                <div class="player-card">
                    <div class="p-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png"
                            alt="Player">
                        <div class="p-rank">04</div>
                    </div>
                    <div class="p-info">
                        <span class="p-state">Delhi | Defensive</span>
                        <h3>Rahul Verma</h3>
                        <div class="p-stats">
                            <span><i class="fas fa-shield-alt"></i> Best Defender 2023</span>
                            <span><i class="fas fa-certificate"></i> All-India Star</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Selection Trials Section -->
    <section class="trials-section section-padding">
        <div class="container">
            <div class="trials-box">
                <div class="trials-icon">
                    <i class="fas fa-bullhorn fa-3x"></i>
                </div>
                <div class="trials-text">
                    <h2>UPCOMING SELECTION TRIALS</h2>
                    <p>Open selection trials for the Senior National Team are scheduled to be held in July 2024. All
                        registered players from affiliated state units are invited to participate. Registration for
                        trials is mandatory.</p>
                </div>
                <div class="trials-cta">
                    <a href="#" class="btn btn-primary">Download Schedule <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="resources-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">PLAYER RESOURCES</h2>
                <p>Essential tools and documentation for every LFI athlete.</p>
            </div>
            <div class="res-grid">
                <a href="#" class="res-card">
                    <i class="fas fa-file-invoice"></i>
                    <h4>Verify Certificate</h4>
                    <p>Check the authenticity of your LFI participation certificate online with our secure database.</p>
                </a>
                <a href="#" class="res-card">
                    <i class="fas fa-tshirt"></i>
                    <h4>Official Kit Shop</h4>
                    <p>Order professional LFI jerseys, protective gear, and training kits at subsidized player rates.
                    </p>
                </a>
                <a href="#" class="res-card">
                    <i class="fas fa-book-medical"></i>
                    <h4>Anti-Doping Policy</h4>
                    <p>Stay informed about NADA/WADA guidelines and fair play regulations for national competitions.</p>
                </a>
                <a href="#" class="res-card">
                    <i class="fas fa-handshake"></i>
                    <h4>Sponsorships</h4>
                    <p>Explore opportunities for athlete support, corporate sponsorships, and brand endorsements.</p>
                </a>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>