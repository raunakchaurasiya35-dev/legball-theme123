<?php
/*
Template Name: Gallery
*/
get_header(); ?>


    <!-- Hero Banner Slider -->
    <section class="hero-slider" id="gallery-banner">
        <div class="slider-container">
            <?php
            $gallery_images = [
                'garland.jpg',
                '6person.jpg',
                'malayparan.jpg',
                'tant.jpg',
                'ball.jpg',
                'certificatep.jpg'
            ];
            foreach ( $gallery_images as $index => $img ) :
            ?>
            <div class="hero slide <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $img; ?>" alt="Media Gallery" class="hero-img" style="object-position: center 25%;">
                <div class="hero-overlay">
                    <div class="container hero-content" style="max-width: 100%;">
                        <div class="breadcrumb">
                            <a href="index.html">Home</a> / <span>Media Gallery</span>
                        </div>
                        <h1 class="banner-title">Media Gallery</h1>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section section-padding">
        <div class="container">
            <!-- Filter Tabs -->
            <div class="gallery-tabs">
                <button class="tab-btn active">ALL</button>
                <button class="tab-btn">PHOTOS</button>
                <button class="tab-btn">VIDEOS</button>
                <button class="tab-btn">PRESS</button>
            </div>

            <!-- Photos Grid -->
            <div class="gallery-grid">
                <!-- New Items -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6person.jpg" alt="6 Person">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" alt="Award">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball.jpg" alt="Ball">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bluecoat.jpg" alt="Bluecoat">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificatep.jpg" alt="Certificate">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/malayparan.jpg" alt="Malayparan">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/playball.jpg" alt="Playball">
                    <div class="item-overlay">
                        <span>Gallery Image</span>
                    </div>
                </div>
                <!-- Existing Items -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png" alt="Victory">
                    <div class="item-overlay">
                        <span>Winning Moment - Nationals 2023</span>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office_building.png" alt="Office">
                    <div class="item-overlay">
                        <span>LFI Head Office Visit</span>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="gallery-item video-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tournaments_banner.png" alt="Arena">
                    <div class="item-overlay">
                        <i class="fas fa-play-circle"></i>
                        <span>Tournament Highlights - Arena View</span>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_banner.png" alt="Training">
                    <div class="item-overlay">
                        <span>Grassroots Training Program</span>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boys_football.png" alt="Training">
                    <div class="item-overlay">
                        <span>LFI Training Camp - Bangalore</span>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="gallery-item press-item">
                    <div class="press-clipping">
                        <h4>New Record set in Legball Championship</h4>
                        <p>Times of India | May 2023</p>
                        <a href="#">Read Clipping</a>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball.jpg" alt="Action">
                    <div class="item-overlay">
                        <span>Sub-Junior Nationals</span>
                    </div>
                </div>
                <!-- Item 8 -->
                <div class="gallery-item video-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bluecoat.jpg" alt="Video Thumb">
                    <div class="item-overlay">
                        <i class="fas fa-play-circle"></i>
                        <span>Skills Showcase: Best Legball Tricks</span>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="gallery-pagination">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>