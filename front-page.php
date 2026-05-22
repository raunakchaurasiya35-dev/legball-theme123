<?php get_header(); ?>

    <!-- Hero Banner Slider -->
    <section class="hero-slider" id="main-content">
        <div class="slider-container">
            <?php
            $banners = new WP_Query( array(
                'post_type'      => 'legball_banner',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
            ) );

            if ( $banners->have_posts() ) :
                $slide_index = 0;
                while ( $banners->have_posts() ) : $banners->the_post();
                    $subtitle = get_post_meta( get_the_ID(), '_banner_subtitle', true );
                    $btn_primary_text = get_post_meta( get_the_ID(), '_banner_btn_primary_text', true );
                    $btn_primary_link = get_post_meta( get_the_ID(), '_banner_btn_primary_link', true );
                    $btn_secondary_text = get_post_meta( get_the_ID(), '_banner_btn_secondary_text', true );
                    $btn_secondary_link = get_post_meta( get_the_ID(), '_banner_btn_secondary_link', true );
                    
                    $content = get_the_content();
                    $image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    
                    if ( ! $image_url ) {
                        // If no featured image, try to extract the first image from the content
                        preg_match( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches );
                        if ( isset( $matches[1] ) ) {
                            $image_url = $matches[1];
                        } else {
                            $image_url = get_template_directory_uri() . '/assets/images/hero_banner.png';
                        }
                    }
                    
                    $text_content = wp_strip_all_tags( $content );
                    ?>
                    <div class="hero slide <?php echo $slide_index === 0 ? 'active' : ''; ?>">
                        <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php the_title_attribute(); ?>" class="hero-img">
                        <div class="hero-overlay">
                            <div class="container hero-content">
                                <?php if ( $subtitle ) : ?>
                                    <h2><?php echo esc_html( $subtitle ); ?></h2>
                                <?php endif; ?>
                                <h1><?php the_title(); ?></h1>
                                <?php if ( ! empty( trim( $text_content ) ) ) : ?>
                                    <div class="banner-desc"><p><?php echo esc_html( $text_content ); ?></p></div>
                                <?php endif; ?>
                                <div class="hero-buttons">
                                    <?php if ( ! empty( $btn_primary_text ) ) : ?>
                                        <a href="<?php echo esc_url( $btn_primary_link ? $btn_primary_link : '#' ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_primary_text ); ?> <i class="fas fa-arrow-right"></i></a>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $btn_secondary_text ) ) : ?>
                                        <a href="<?php echo esc_url( $btn_secondary_link ? $btn_secondary_link : '#' ); ?>" class="btn btn-secondary"><?php echo esc_html( $btn_secondary_text ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $slide_index++;
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <!-- Default Fallback Banner -->
                <div class="hero slide active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_banner.png" alt="Legball Banner" class="hero-img">
                    <div class="hero-overlay">
                        <div class="container hero-content">
                            <h2>Train Champions @ India</h2>
                            <h1>Sporting Excellence in Legball</h1>
                            <p>Developing grassroots talent and fostering international champions</p>
                            <div class="hero-buttons">
                                <a href="#" class="btn btn-primary">Player Registration <i class="fas fa-arrow-right"></i></a>
                                <a href="#" class="btn btn-secondary">Upcoming Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Leadership -->
    <section class="leadership">
        <div class="container leader-container">
            <div class="leader-card">
                <div class="leader-img"><i class="fas fa-user-tie fa-4x" style="color:#666;"></i></div>
                <h3>Hon'ble President</h3>
                <p>Legball Federation of India</p>
            </div>
            <div class="leader-card">
                <div class="leader-img"><i class="fas fa-user-tie fa-4x" style="color:#666;"></i></div>
                <h3>Hon'ble Secretary</h3>
                <p>Legball Federation of India</p>
            </div>
            <div class="leader-card">
                <div class="leader-img"><i class="fas fa-user-tie fa-4x" style="color:#666;"></i></div>
                <h3>Hon'ble Treasurer</h3>
                <p>Legball Federation of India</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section text-center">
        <div class="container">
            <h2 class="section-title">ABOUT LFI</h2>
            <p class="about-text">The Legball Federation of India (LFI) is the apex national governing body for the sport of Legball. Combining the athleticism of football with the aerial dynamics of volleyball, Legball is an indigenous sport rapidly gaining popularity. We are committed to nurturing talent, building state-of-the-art infrastructure, and ensuring structured growth of the sport from grassroots to the international level.</p>
            <a href="#" class="read-more">Know More <i class="fas fa-angle-right"></i></a>
        </div>
    </section>

    <!-- Journey Timeline -->
    <section class="journey-section bg-light">
        <div class="container text-center">
            <h2 class="section-title">LFI JOURNEY</h2>
            <div class="timeline-wrapper">
                <div class="timeline-line"></div>
                <div class="timeline-items">
                    <div class="t-item">
                        <div class="t-dot"></div>
                        <span>1992</span>
                    </div>
                    <div class="t-item active">
                        <div class="t-dot"></div>
                        <span>1998</span>
                    </div>
                    <div class="t-item">
                        <div class="t-dot"></div>
                        <span>2005</span>
                    </div>
                    <div class="t-item">
                        <div class="t-dot"></div>
                        <span>2015</span>
                    </div>
                    <div class="t-item">
                        <div class="t-dot"></div>
                        <span>2020</span>
                    </div>
                    <div class="t-item">
                        <div class="t-dot"></div>
                        <span>2024</span>
                    </div>
                </div>
            </div>
            <div class="timeline-desc">
                <h3 class="year-title">1998</h3>
                <p>First National Legball Championship organized, witnessing participation from over 15 states across India. A major milestone in the standardization of rules.</p>
            </div>
        </div>
    </section>

    <!-- Objectives & Key Functions -->
    <section class="objectives-section">
        <div class="container">
            <div class="obj-grid">
                <div class="obj-left">
                    <h2 class="section-title left-align">OBJECTIVES</h2>
                    <ul class="obj-list">
                        <li><span class="num-box">01</span> Fostering talent at the grassroots level nationally.</li>
                        <li><span class="num-box">02</span> Organizing transparent National & State Championships.</li>
                        <li><span class="num-box">03</span> Providing world-class training and coaching facilities.</li>
                    </ul>

                    <h2 class="section-title left-align mt-4">VISION</h2>
                    <p>To establish Legball as a premier, widely-played sport in India, empowering youth with fitness, discipline, and a pathway to professional sporting excellence.</p>

                    <h2 class="section-title left-align mt-4">MISSION</h2>
                    <p>To provide robust infrastructure, create transparent selection pathways, and secure the future of our talented athletes through dedicated coaching and sustained support.</p>
                </div>
                
                <div class="obj-right">
                    <div class="key-functions">
                        <div class="kf-header">
                            <div class="kf-logo">LFI</div>
                            <h3>KEY FUNCTIONS OF LFI</h3>
                        </div>
                        <ul class="kf-list">
                            <li><i class="fas fa-check-circle"></i> Promotion of Legball at Grassroots Level</li>
                            <li><i class="fas fa-check-circle"></i> Training and Certification of Coaches & Referees</li>
                            <li><i class="fas fa-check-circle"></i> Implementation of Fair Play & Anti-Doping Policies</li>
                            <li><i class="fas fa-check-circle"></i> Talent Identification & Nurturing</li>
                            <li><i class="fas fa-check-circle"></i> Organization of National Championships</li>
                            <li><i class="fas fa-check-circle"></i> Collaboration with State Affiliates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Initiatives -->
    <section class="initiatives bg-light">
        <div class="container">
            <h2 class="section-title text-center">KEY INITIATIVES</h2>
            <div class="init-card">
                <div class="init-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png" alt="Athletes">
                </div>
                <div class="init-content">
                    <span class="tag">GRASSROOTS DEVELOPMENT</span>
                    <h3>School Integration Program</h3>
                    <p>Our flagship initiative aims to introduce Legball to over 5,000 schools across the country. By providing basic equipment and physical education teacher training, we ensure that every child gets the opportunity to learn, play, and excel in this dynamic sport.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Centers & Stats -->
    <section class="centers-stats">
        <div class="container">
            <div class="cs-grid">
                <div class="cs-left">
                    <h2 class="section-title left-align">REGIONAL CENTERS</h2>
                    <div class="map-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/india_map.png" alt="India Map" style="max-height: 400px; opacity: 0.8;">
                    </div>
                </div>
                <div class="cs-right">
                    <h2 class="section-title left-align">KEY STATS</h2>
                    <div class="stats-wrapper">
                        <div class="stat-box">
                            <i class="fas fa-users" style="color:var(--orange);"></i>
                            <h3>15,000+</h3>
                            <p>Athletes</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-chalkboard-teacher" style="color:var(--orange);"></i>
                            <h3>1,200+</h3>
                            <p>Coaches</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-map-marker-alt" style="color:var(--orange);"></i>
                            <h3>28</h3>
                            <p>State Units</p>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-medal" style="color:var(--orange);"></i>
                            <h3>50+</h3>
                            <p>Annual Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery bg-light">
        <div class="container">
            <div class="gal-head">
                <h2 class="section-title left-align m-0">GALLERY</h2>
                <a href="#" class="btn-outline">VIEW ALL <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="gal-grid">
                <div class="gal-item large">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png" alt="Gallery">
                    <div class="gal-overlay"><span>National Championship 2023</span></div>
                </div>
                <div class="gal-subgrid">
                    <div class="gal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" alt="Gallery"></div>
                    <div class="gal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_fitness.png" alt="Gallery"></div>
                    <div class="gal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/boys_football.png" alt="Gallery"></div>
                    <div class="gal-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/awarded.jpg" alt="Gallery"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports -->
    <section class="reports">
        <div class="container text-center">
            <h2 class="section-title">REPORTS & PRESS RELEASES</h2>
            <div class="reports-grid">
                <div class="report-card">
                    <div class="rep-icon"><i class="fas fa-file-pdf"></i></div>
                    <h4>Annual Report 2023-2024</h4>
                    <p>Detailed overview of federation activities and financials.</p>
                    <a href="#" class="download">Download <i class="fas fa-download"></i></a>
                </div>
                <div class="report-card">
                    <div class="rep-icon"><i class="fas fa-file-pdf"></i></div>
                    <h4>Updated Rulebook 2024</h4>
                    <p>Official rules and regulations for National Championships.</p>
                    <a href="#" class="download">Download <i class="fas fa-download"></i></a>
                </div>
                <div class="report-card">
                    <div class="rep-icon"><i class="fas fa-file-pdf"></i></div>
                    <h4>Referee Guidelines</h4>
                    <p>New guidelines and certification processes for referees.</p>
                    <a href="#" class="download">Download <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="partners bg-light">
        <div class="container text-center">
            <h2 class="section-title">PARTNERS</h2>
            <div class="partner-logos">
                <div class="p-logo">Partner 1</div>
                <div class="p-logo">Partner 2</div>
                <div class="p-logo">Partner 3</div>
                <div class="p-logo">Partner 4</div>
                <div class="p-logo">Partner 5</div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>