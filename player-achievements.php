<?php
/*
Template Name: Player Achievements
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="players corner.html">Players Corner</a> / <span>Achievements</span>
            </div>
            <h1 class="banner-title">Player <br>Achievements</h1>
        </div>
    </section>

    <!-- Milestones -->
    <section class="milestone-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">GLOBAL FOOTPRINT</h2>
                <p>Highlighting the major milestones achieved by Indian Legball athletes on the international stage.</p>
            </div>
            <div class="milestone-grid">
                <div class="milestone-card">
                    <i class="fas fa-globe-asia milestone-icon"></i>
                    <h3>Asian Excellence</h3>
                    <p>India secured <strong>Gold & Silver</strong> in the 3rd South Asian Legball Championship held in Nepal (2023).</p>
                </div>
                <div class="milestone-card">
                    <i class="fas fa-chart-line milestone-icon"></i>
                    <h3>Consistent Growth</h3>
                    <p>Over <strong>25,000+ Registered Players</strong> across 28 states, making it one of India's fastest-growing indigenous sports.</p>
                </div>
                <div class="milestone-card">
                    <i class="fas fa-handshake milestone-icon"></i>
                    <h3>AIU Recognition</h3>
                    <p>Formal inclusion in the **Association of Indian Universities (AIU)** calendar for Inter-University competitions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: repeat(4, 1fr); gap:30px;">
                <div class="stat-item">
                    <span class="stat-num">120+</span>
                    <p>National Medals</p>
                </div>
                <div class="stat-item">
                    <span class="stat-num">15+</span>
                    <p>International Caps</p>
                </div>
                <div class="stat-item">
                    <span class="stat-num">500+</span>
                    <p>State Championships</p>
                </div>
                <div class="stat-item">
                    <span class="stat-num">28</span>
                    <p>Affiliated States</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hall of Fame -->
    <section class="fame-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">HALL OF FAME</h2>
                <p>Celebrating the legendary athletes who have defined the sport of Legball in India.</p>
            </div>
            <div class="fame-grid">
                <div class="fame-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_fitness.png" alt="Player" class="fame-img">
                    <div class="fame-info">
                        <span class="fame-title">Player of the Decade</span>
                        <h4>Rahul Sharma</h4>
                        <p style="font-size:13px; color:var(--gray);">Captain, Team India (Senior)</p>
                    </div>
                </div>
                <div class="fame-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office_building.png" alt="Player" class="fame-img">
                    <div class="fame-info">
                        <span class="fame-title">Golden Boot Winner</span>
                        <h4>Priya Patel</h4>
                        <p style="font-size:13px; color:var(--gray);">Top Scorer - Women's Nationals</p>
                    </div>
                </div>
                <div class="fame-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tournaments_banner.png" alt="Player" class="fame-img">
                    <div class="fame-info">
                        <span class="fame-title">Best Technical Player</span>
                        <h4>Amit Verma</h4>
                        <p style="font-size:13px; color:var(--gray);">Asian Championship MVP</p>
                    </div>
                </div>
                <div class="fame-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tant.jpg.jpeg" alt="Player" class="fame-img">
                    <div class="fame-info">
                        <span class="fame-title">Youth Icon</span>
                        <h4>Sneha Reddy</h4>
                        <p style="font-size:13px; color:var(--gray);">U-19 National Champion</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Annual Awards Archive -->
    <section class="awards-section section-padding" style="background:#f9f9f9;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ANNUAL HONOR ROLL</h2>
                <p>Yearly archives of the LFI Excellence Awards.</p>
            </div>
            
            <table class="awards-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Player of the Year (Male)</th>
                        <th>Player of the Year (Female)</th>
                        <th>Best State Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024</td>
                        <td>Rahul Sharma (Maharashtra)</td>
                        <td>Priya Patel (Haryana)</td>
                        <td>Delhi Legball Association</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Amit Verma (UP)</td>
                        <td>Anjali Das (WB)</td>
                        <td>Maharashtra Legball Association</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>Saurabh Gill (Punjab)</td>
                        <td>Megha Singh (MP)</td>
                        <td>Haryana Legball Association</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    
<?php get_footer(); ?>