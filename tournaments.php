<?php
/*
Template Name: Tournaments
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/tournaments_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Tournaments & Events</span>
            </div>
            <h1 class="banner-title">Tournaments & Events</h1>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="upcoming-section section-padding">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title left-align">UPCOMING CHAMPIONSHIPS</h2>
                <a href="#" class="view-all">View Full Calendar <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="events-grid">
                <!-- Event Card 1 -->
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15-20</span>
                        <span class="month">MAY</span>
                        <span class="year">2024</span>
                    </div>
                    <div class="event-content">
                        <span class="event-tag">NATIONAL</span>
                        <h3>12th Senior National Legball Championship</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Indira Gandhi Sports Complex, New Delhi</p>
                        <div class="event-actions">
                            <a href="#" class="btn btn-primary btn-sm">Register Now</a>
                            <a href="#" class="btn-link">Prospectus <i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">05-08</span>
                        <span class="month">JUNE</span>
                        <span class="year">2024</span>
                    </div>
                    <div class="event-content">
                        <span class="event-tag">STATE</span>
                        <h3>Maharashtra State Open Championship</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Shiv Chhatrapati Sports Complex, Pune</p>
                        <div class="event-actions">
                            <a href="#" class="btn btn-primary btn-sm">Register Now</a>
                            <a href="#" class="btn-link">Details <i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">22-25</span>
                        <span class="month">JULY</span>
                        <span class="year">2024</span>
                    </div>
                    <div class="event-content">
                        <span class="event-tag">SCHOOL</span>
                        <h3>All India Inter-School Legball Trophy</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Tau Devi Lal Stadium, Gurugram</p>
                        <div class="event-actions">
                            <a href="#" class="btn btn-primary btn-sm">Register Now</a>
                            <a href="#" class="btn-link">Circular <i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament Categories -->
    <section class="categories-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">TOURNAMENT CATEGORIES</h2>
            <div class="cat-grid">
                <div class="cat-box">
                    <div class="cat-icon"><i class="fas fa-trophy"></i></div>
                    <h3>National</h3>
                    <p>Prestigious championships involving state teams from across India.</p>
                </div>
                <div class="cat-box">
                    <div class="cat-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h3>State</h3>
                    <p>Regional level tournaments organized by LFI state units.</p>
                </div>
                <div class="cat-box">
                    <div class="cat-icon"><i class="fas fa-school"></i></div>
                    <h3>School / University</h3>
                    <p>Educational level events to promote Legball among youth.</p>
                </div>
                <div class="cat-box">
                    <div class="cat-icon"><i class="fas fa-globe"></i></div>
                    <h3>International</h3>
                    <p>Cross-border championships and invitationals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Results Section -->
    <section class="results-section section-padding">
        <div class="container">
            <h2 class="section-title left-align">RECENT RESULTS</h2>
            <div class="results-table-wrapper">
                <table class="results-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Tournament Name</th>
                            <th>Winner</th>
                            <th>Runner Up</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>March 2024</td>
                            <td>9th Junior National Championship</td>
                            <td>Haryana</td>
                            <td>Delhi</td>
                            <td>3-1</td>
                            <td><a href="#" class="btn-link">Report <i class="fas fa-file-pdf"></i></a></td>
                        </tr>
                        <tr>
                            <td>Feb 2024</td>
                            <td>North Zone Federation Cup</td>
                            <td>Punjab</td>
                            <td>Rajasthan</td>
                            <td>2-0</td>
                            <td><a href="#" class="btn-link">Report <i class="fas fa-file-pdf"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jan 2024</td>
                            <td>Inter-University Men's Legball</td>
                            <td>LPU, Punjab</td>
                            <td>DU, Delhi</td>
                            <td>2-1</td>
                            <td><a href="#" class="btn-link">Report <i class="fas fa-file-pdf"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>