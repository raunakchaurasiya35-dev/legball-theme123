<?php
/*
Template Name: Video Gallery
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="gallery.html">Gallery</a> / <span>Video Gallery</span>
            </div>
            <h1 class="banner-title">The Action <br>In Motion</h1>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section section-padding">
        <div class="container">
            
            <!-- Featured Video -->
            <div class="featured-video">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_banner.png" alt="Featured">
                <div class="video-overlay">
                    <div class="play-btn-large">
                        <i class="fas fa-play"></i>
                    </div>
                    <h2 style="font-size:36px; font-weight:800; margin-bottom:10px;">Highlights: 14th National Championship Finale</h2>
                    <p style="font-size:18px; opacity:0.9;">A stunning display of skill and speed in the historic finale held at Delhi.</p>
                </div>
            </div>

            <!-- Video Grid -->
            <div class="video-grid">
                <!-- Video 1 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tant.jpg.jpeg" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Match Highlights</span>
                        <h4 class="video-title">Maharashtra vs Kerala - Quarter Final Highlights</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 12:45 mins</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boys_football.png" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Training</span>
                        <h4 class="video-title">Legball Basics: Technical Skills & Drills Tutorial</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 08:30 mins</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Awards</span>
                        <h4 class="video-title">President's Address at the 2024 Annual Awards</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 15:20 mins</p>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/awarded.jpg" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Interviews</span>
                        <h4 class="video-title">Meet the MVP: Interview with National Captain</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 06:15 mins</p>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/garland.jpg.jpeg" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Tournaments</span>
                        <h4 class="video-title">Opening Ceremony - National Games 2023</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 22:10 mins</p>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificatep.jpg" alt="Video">
                        <div class="play-icon-sm"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="video-info">
                        <span class="video-cat">Rules</span>
                        <h4 class="video-title">Official Rulebook 2024: Visual Guide for Referees</h4>
                        <p class="video-duration"><i class="far fa-clock mr-1"></i> 10:45 mins</p>
                    </div>
                </div>
            </div>

            <!-- YouTube CTA -->
            <div class="yt-cta">
                <div>
                    <h2 style="font-weight:800; font-size:32px; margin-bottom:10px;">Watch More on YouTube</h2>
                    <p style="opacity:0.8; font-size:18px;">Subscribe to our official channel for live matches and exclusive content.</p>
                </div>
                <a href="#" class="btn" style="background:var(--video-accent); color:var(--white); padding:20px 40px; border-radius:50px; font-weight:800; text-transform:uppercase; border:none; letter-spacing:1px; display:flex; align-items:center; gap:15px;">
                    <i class="fab fa-youtube" style="font-size:24px;"></i> Subscribe Now
                </a>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>