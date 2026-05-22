<?php
/*
Template Name: Vision Mission
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="about.html">About Us</a> / <span>Vision & Mission</span>
            </div>
            <h1 class="banner-title">Our Vision <br>& Mission</h1>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section section-padding">
        <div class="container">
            <div class="vision-box">
                <div class="vision-content">
                    <span class="sub-title">THE LONG TERM GOAL</span>
                    <h2>OUR VISION</h2>
                    <p>"To establish Legball as a premier global sport, deeply rooted in Indian culture, while empowering athletes of all backgrounds to achieve international excellence and fostering a lifelong passion for physical fitness and sportsmanship across the nation."</p>
                </div>
                <div class="vision-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bluecoat.jpg" alt="Visionary Sports">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">OUR MISSION</h2>
                <p class="para" style="margin-bottom: 20px;">Strategic pathways to achieve our long-term vision.</p>
            </div>
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="m-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Grassroots Empowerment</h3>
                    <p>Introduce Legball to every school and college across India, providing equipment and expert training to ensure talent is discovered early and nurtured locally.</p>
                </div>
                <div class="mission-card">
                    <div class="m-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Elite Performance</h3>
                    <p>Develop state-of-the-art high-performance centers and structured national leagues to prepare our athletes for international championships and global honors.</p>
                </div>
                <div class="mission-card">
                    <div class="m-icon"><i class="fas fa-network-wired"></i></div>
                    <h3>Governance Excellence</h3>
                    <p>Maintain a transparent, athlete-centric governing framework that prioritizes the welfare of players, coaches, and technical officials above all else.</p>
                </div>
                <div class="mission-card">
                    <div class="m-icon"><i class="fas fa-globe"></i></div>
                    <h3>Global Recognition</h3>
                    <p>Collaborate with international sporting bodies to standardize Legball globally, advocating for its inclusion in major multi-sport international events.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategic Goals -->
    <section class="goals-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color:var(--white);">STRATEGIC GOALS 2025-2030</h2>
                <p class="pg" style="margin-bottom: 20px;">Defining measurable outcomes for our growth and impact.</p>
            </div>
            <div class="goals-grid">
                <div class="goal-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Pan-India Presence</h4>
                    <p>Active state units in all 28 states and 8 UTs by 2026.</p>
                </div>
                <div class="goal-card">
                    <i class="fas fa-user-graduate"></i>
                    <h4>Player Education</h4>
                    <p>Standardized curriculum for players and coaching certifications.</p>
                </div>
                <div class="goal-card">
                    <i class="fas fa-chart-line"></i>
                    <h4>Digital Ecosystem</h4>
                    <p>Full digital integration of player performance tracking and analytics.</p>
                </div>
                <div class="goal-card">
                    <i class="fas fa-handshake"></i>
                    <h4>Corporate Support</h4>
                    <p>Secure long-term sponsorships for state and national leagues.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-box">
                <i class="fas fa-quote-left fa-3x" style="color:var(--orange); margin-bottom: 30px;"></i>
                <blockquote>
                    "Sports has the power to change the world. It has the power to inspire. It has the power to unite people in a way that little else does."
                </blockquote>
                <cite>— Legball Federation of India</cite>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>