<?php
/*
Template Name: Media Coverage
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="gallery.html">Gallery</a> / <span>Media Coverage</span>
            </div>
            <h1 class="banner-title">LFI <br>In The News</h1>
        </div>
    </section>

    <!-- News Clippings Section -->
    <section class="news-section section-padding">
        <div class="container">
            <div class="mb-5 text-center">
                <h2 style="color:var(--media-primary); font-weight:800;">Press & Newspaper Highlights</h2>
                <div style="width:70px; height:4px; background:var(--media-accent); margin:15px auto;"></div>
                <p style="margin-bottom: 20px;" >Curated newspaper clippings and digital news reports from across the country.</p>
            </div>

            <div class="news-grid">
                <!-- News 1 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball.jpg" alt="News">
                        <span class="publication-badge">The Times of India</span>
                    </div>
                    <div class="news-content">
                        <span class="news-date">May 10, 2024</span>
                        <h4 class="news-title">Legball Nationals Kick Off with Grand Ceremony in New Delhi</h4>
                        <a href="#" class="news-link">Read More <i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boys_football.png" alt="News">
                        <span class="publication-badge">Dainik Bhaskar</span>
                    </div>
                    <div class="news-content">
                        <span class="news-date">April 25, 2024</span>
                        <h4 class="news-title">Haryana Dominates the North Zone Legball Championship</h4>
                        <a href="#" class="news-link">Read More <i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bluecoat.jpg" alt="News">
                        <span class="publication-badge">Hindustan Times</span>
                    </div>
                    <div class="news-content">
                        <span class="news-date">March 15, 2024</span>
                        <h4 class="news-title">LFI Secretary General Announces New Grassroots Program</h4>
                        <a href="#" class="news-link">Read More <i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Press Releases Section -->
    <section class="press-section section-padding" style="background:#f1f5f9;">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2 style="color:var(--media-primary); font-weight:800;">Official Press Releases</h2>
                    <p>Official statements and communications from the LFI Press Office.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="btn" style="background:var(--media-accent); color:var(--white); font-weight:700; padding:12px 30px; border-radius:10px;">Archive 2023 <i class="fas fa-history ml-2"></i></a>
                </div>
            </div>

            <div class="press-release-list">
                <div class="press-item">
                    <div class="press-info">
                        <h4>Strategic Partnership with International Legball Body</h4>
                        <span>Released on: May 12, 2024 | PR ID: LFI-PR-24-05</span>
                    </div>
                    <a href="#" class="btn-press-dl"><i class="fas fa-file-pdf"></i> Download PDF</a>
                </div>

                <div class="press-item">
                    <div class="press-info">
                        <h4>National Selection Trials for World School Games 2024</h4>
                        <span>Released on: May 02, 2024 | PR ID: LFI-PR-24-04</span>
                    </div>
                    <a href="#" class="btn-press-dl"><i class="fas fa-file-pdf"></i> Download PDF</a>
                </div>

                <div class="press-item">
                    <div class="press-info">
                        <h4>Inauguration of National Training Hub in Bengaluru</h4>
                        <span>Released on: April 18, 2024 | PR ID: LFI-PR-24-03</span>
                    </div>
                    <a href="#" class="btn-press-dl"><i class="fas fa-file-pdf"></i> Download PDF</a>
                </div>
            </div>

            <!-- Media Kit -->
            <div class="media-kit-box">
                <i class="fas fa-briefcase" style="font-size:50px; color:var(--media-accent); margin-bottom:20px;"></i>
                <h2 style="font-weight:800; font-size:36px; margin-bottom:15px;">LFI Media Kit</h2>
                <p style="font-size:18px; opacity:0.8; max-width:700px; margin:0 auto 40px;">Are you a member of the press? Download our official Media Kit containing high-resolution logos, brand guidelines, and executive profiles.</p>
                <button class="btn" style="background:var(--white); color:var(--media-primary); padding:20px 50px; border-radius:50px; font-weight:800; text-transform:uppercase; border:none; letter-spacing:1px; box-shadow:0 15px 30px rgba(0,0,0,0.2);">Download Full Media Kit</button>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>