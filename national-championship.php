<?php
/*
Template Name: National Championship
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>National Championship</span>
            </div>
            <h1 class="banner-title">National <br>Championship</h1>
        </div>
    </section>

    <!-- Featured Event -->
    <section class="featured-event">
        <div class="container">
            <div class="event-box">
                <div class="event-details">
                    <span class="winner-badge" style="margin-bottom: 15px; display: inline-block;">UPCOMING MAJOR EVENT</span>
                    <h2>20th Senior National Legball Championship</h2>
                    <p>The biggest event in the Legball calendar is back! Top athletes from across India will compete for the ultimate glory.</p>
                    <ul class="event-info-list">
                        <li><i class="fas fa-calendar-alt"></i> 15th - 18th Oct 2026</li>
                        <li><i class="fas fa-map-marker-alt"></i> Major Dhyan Chand Stadium, New Delhi</li>
                        <li><i class="fas fa-users"></i> Over 500+ Participants</li>
                    </ul>
                </div>
                <div class="event-timer">
                    <h4>CHAMPIONSHIP STARTS IN</h4>
                    <div class="timer-grid">
                        <div class="timer-box">
                            <h3 id="days">45</h3>
                            <span>Days</span>
                        </div>
                        <div class="timer-box">
                            <h3 id="hours">12</h3>
                            <span>Hours</span>
                        </div>
                        <div class="timer-box">
                            <h3 id="mins">30</h3>
                            <span>Mins</span>
                        </div>
                        <div class="timer-box">
                            <h3 id="secs">05</h3>
                            <span>Secs</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-orange mt-4" style="display: block;">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">CHAMPIONSHIP CATEGORIES</h2>
                <p style="margin-bottom: 20px">National championships are held across multiple age groups for both Male and Female players.</p>
            </div>
            
            <div class="cat-grid">
                <div class="cat-card">
                    <i class="fas fa-child"></i>
                    <h3>Sub-Junior</h3>
                    <p>Under 14 Years. Focused on grassroots development and identifying early talent.</p>
                </div>
                <div class="cat-card">
                    <i class="fas fa-user-graduate"></i>
                    <h3>Junior</h3>
                    <p>Under 18 Years. Competitive level for rising stars and school champions.</p>
                </div>
                <div class="cat-card">
                    <i class="fas fa-user-tie"></i>
                    <h3>Senior</h3>
                    <p>Open Category. The highest level of Legball featuring elite national athletes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Champions -->
    <section class="champions-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">HALL OF FAME</h2>
                <p style="margin-bottom: 20px">Celebrating the champions of the previous National Championships.</p>
            </div>
            
            <table class="cham-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Edition</th>
                        <th>Winner (Male)</th>
                        <th>Winner (Female)</th>
                        <th>Venue</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023</td>
                        <td>19th</td>
                        <td><span class="winner-badge">Maharashtra</span></td>
                        <td><span class="winner-badge">Delhi</span></td>
                        <td>Mumbai, Maharashtra</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>18th</td>
                        <td><span class="winner-badge">Haryana</span></td>
                        <td><span class="winner-badge">Haryana</span></td>
                        <td>Rohtak, Haryana</td>
                    </tr>
                    <tr>
                        <td>2021</td>
                        <td>17th</td>
                        <td><span class="winner-badge">Uttar Pradesh</span></td>
                        <td><span class="winner-badge">Maharashtra</span></td>
                        <td>Lucknow, UP</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    
<?php get_footer(); ?>