<?php
/*
Template Name: State Units
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="about.html">About Us</a> / <span>State Units</span>
            </div>
            <h1 class="banner-title">State Units</h1>
        </div>
    </section>

    <!-- Presence Section -->
    <section class="presence-section section-padding">
        <div class="container">
            <div class="presence-grid">
                <div class="presence-content">
                    <h2>NATIONAL REACH</h2>
                    <p>The Legball Federation of India is proud to have a robust presence across the length and breadth of the country. Our affiliated state units are the backbone of our grassroots development programs.</p>
                    <div class="presence-stats">
                        <div class="p-stat-box">
                            <h3>28</h3>
                            <p>States</p>
                        </div>
                        <div class="p-stat-box">
                            <h3>08</h3>
                            <p>UTs</p>
                        </div>
                    </div>
                </div>
                <div class="presence-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/india_map.png" alt="India Map" style="max-width: 100%; opacity: 0.8;">
                </div>
            </div>
        </div>
    </section>

    <!-- State Grid Section -->
    <section class="state-list-section section-padding">
        <div class="container">
            <div class="search-container">
                <input type="text" class="state-search" placeholder="Search for a state or UT...">
            </div>
            
            <div class="state-grid">
                <!-- States -->
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Andhra Pradesh</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Bihar</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Delhi</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Gujarat</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Haryana</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Karnataka</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Maharashtra</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Punjab</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Rajasthan</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Tamil Nadu</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Uttar Pradesh</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
                <a href="#" class="state-card">
                    <div class="state-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>West Bengal</h4>
                    <span>Legball Association</span>
                    <br><span class="aff-badge">Affiliated</span>
                </a>
            </div>
            
            <div class="text-center mt-5">
                <p style="margin-top: 20px">Showing 12 of 36 Units. <a href="#" style="color:var(--orange); font-weight:700;">Load All States <i class="fas fa-chevron-down"></i></a></p>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>