<?php
/*
Template Name: Photo Gallery
*/
get_header(); ?>


    <?php 
    $banner_bg = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/images/tournaments_banner.png'; 
    ?>
    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo esc_url($banner_bg); ?>');">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / <span><?php echo esc_html(get_the_title()); ?></span>
            </div>
            <h1 class="banner-title"><?php echo esc_html(get_the_title()); ?></h1>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section section-padding">
        <div class="container">
            
            <!-- Filters -->
            <div class="gallery-filter">
                <button class="filter-btn active">All Moments</button>
                <button class="filter-btn">Tournaments</button>
                <button class="filter-btn">Awards</button>
                <button class="filter-btn">Training</button>
                <button class="filter-btn">International</button>
            </div>

            <!-- Album Grid Slider -->
            <div class="swiper album-slider">
                <div class="swiper-wrapper">
                    <!-- Album 1 -->
                    <div class="swiper-slide">
                        <div class="album-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tant.jpg.jpeg" alt="Album" class="album-img">
                            <div class="album-overlay">
                                <span class="album-tag">Tournament</span>
                                <h3 class="album-title">13th Senior National <br>Legball Championship</h3>
                                <p class="album-count"><i class="fas fa-camera mr-2"></i> 48 Photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Album 2 -->
                    <div class="swiper-slide">
                        <div class="album-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" alt="Album" class="album-img">
                            <div class="album-overlay">
                                <span class="album-tag">Awards</span>
                                <h3 class="album-title">LFI Annual Awards <br>Ceremony 2024</h3>
                                <p class="album-count"><i class="fas fa-camera mr-2"></i> 24 Photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Album 3 -->
                    <div class="swiper-slide">
                        <div class="album-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_fitness.png" alt="Album" class="album-img">
                            <div class="album-overlay">
                                <span class="album-tag">Training</span>
                                <h3 class="album-title">National Coaching <br>Clinic - Bengaluru</h3>
                                <p class="album-count"><i class="fas fa-camera mr-2"></i> 36 Photos</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slider Controls -->
                <div class="swiper-pagination" style="position: relative; margin-top: 30px;"></div>
                <div class="swiper-button-next" style="color: var(--gallery-accent);"></div>
                <div class="swiper-button-prev" style="color: var(--gallery-accent);"></div>
            </div>

            <!-- Recent Highlights Masonry -->
            <div class="text-center mt-5 pt-5 mb-5">
                <h2 style="color:var(--gallery-primary); font-weight:900; margin-top: 40px;">LATEST HIGHLIGHTS</h2>
                <div style="width:60px; height:4px; background:var(--gallery-accent); margin:15px auto;"></div>
            </div>

            <div class="photo-masonry">
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6person.jpg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/garland.jpg.jpeg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/greentp.jpg.jpeg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/certificatep.jpg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/awarded.jpg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/malayparan.jpg.jpeg" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png" alt="Action">
                </div>
                <div class="photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tournaments_banner.png" alt="Action">
                </div>
            </div>

            <div class="mt-5 text-center">
                <button class="btn" style="background:var(--gallery-primary); color:var(--white); padding:18px 50px; border-radius:50px; font-weight:800; text-transform:uppercase; border:none; letter-spacing:1px; box-shadow:0 15px 30px rgba(0,0,0,0.2)">Explore Full Archive</button>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".album-slider", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
<?php get_footer(); ?>