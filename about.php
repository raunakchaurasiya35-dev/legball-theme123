<?php
/*
Template Name: About
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner"
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/images/about_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>About LFI</span>
            </div>
        </div>
    </section>

    <!-- Section 1: Promoting Excellence -->
    <section class="about-content-section section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office_building.png" alt="LFI Head Office" class="main-about-img">
                    <div class="image-label">LFI HEAD OFFICE</div>
                </div>
                <div class="about-text-box">
                    <span class="sub-title">OUR VISION</span>
                    <h2 class="main-title">PROMOTING EXCELLENCE IN SPORTS</h2>
                    <p>The Legball Federation of India (LFI) was established with a vision to preserve and promote the
                        legacy of Legball, an indigenous sport that combines athleticism, skill, and team spirit. Since
                        its inception, LFI has been the apex national governing body, dedicated to achieving excellence
                        at both national and international levels.</p>
                    <p>LFI plays a pivotal role in shaping India's sports landscape by providing structured training,
                        organizing national championships, and identifying young talent from across the country. Our
                        programs are designed to nurture athletes from the grassroots level, ensuring they have the
                        support and infrastructure needed to succeed.</p>
                    <ul class="list-checked">
                        <li>National Training Centers across major states</li>
                        <li>Standardized Rules & Regulations</li>
                        <li>Talent Identification Programs (TIP)</li>
                        <li>International Collaboration & Exchange</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Aims and Objectives -->
    <section class="objectives-content-section section-padding bg-light">
        <div class="container">
            <div class="about-grid reverse">
                <div class="about-text-box">
                    <span class="sub-title">LEGBALL FEDERATION OF INDIA</span>
                    <h2 class="main-title">AIMS AND OBJECTIVES</h2>
                    <ul class="aims-list">
                        <li><i class="fas fa-check"></i> Talent Scouting at micro level & Nurturing talent towards
                            excellence.</li>
                        <li><i class="fas fa-check"></i> Training & International Exposure for athletes.</li>
                        <li><i class="fas fa-check"></i> Support Training with Scientific Sports Equipment and
                            scientific personnel.</li>
                        <li><i class="fas fa-check"></i> Monitor the athlete performance with scientific evaluation
                            system.</li>
                        <li><i class="fas fa-check"></i> Training and preparation of National Teams.</li>
                        <li><i class="fas fa-check"></i> Sports Infrastructure Development & Maintenance.</li>
                        <li><i class="fas fa-check"></i> Maintenance and up-gradation of stadium complexes in various
                            parts of Delhi and India.</li>
                    </ul>
                </div>
                <div class="about-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/athlete_celebration.png" alt="Athlete Victory" class="main-about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Approach & Strategy -->
    <section class="strategy-section section-padding">
        <div class="container">
            <span class="sub-title">LEGBALL FEDERATION OF INDIA</span>
            <h2 class="main-title">APPROACH & STRATEGY</h2>
            <p class="section-desc">The development of sports and the promotion of excellence, including performance at
                international level, is a highly complex and multi-dimensional subject. Our strategic approach includes:
            </p>

            <div class="strategy-list">
                <div class="strategy-item">
                    <div class="s-icon"><i class="fas fa-globe"></i></div>
                    <p>International collaboration for sports development and sporting excellence.</p>
                </div>
                <div class="strategy-item">
                    <div class="s-icon"><i class="fas fa-sync"></i></div>
                    <p>Evolving a structured system for spotting and nurturing talented youth for Olympics and other
                        sports.</p>
                </div>
                <div class="strategy-item">
                    <div class="s-icon"><i class="fas fa-bullseye"></i></div>
                    <p>Focused effort on the sports having promising potential of excellence in the emerging
                        disciplines.</p>
                </div>
                <div class="strategy-item">
                    <div class="s-icon"><i class="fas fa-network-wired"></i></div>
                    <p>Establishing infrastructure and an integrated framework for training and grooming talent at
                        different levels.</p>
                </div>
                <div class="strategy-item">
                    <div class="s-icon"><i class="fas fa-users"></i></div>
                    <p>Encouraging active involvement of the corporate sector in developing academies and Centres of
                        Excellence.</p>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>