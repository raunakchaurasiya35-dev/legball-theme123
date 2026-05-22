<?php
/*
Template Name: Calendar Events
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>Calendar of Events</span>
            </div>
            <h1 class="banner-title">Calendar <br>of Events</h1>
        </div>
    </section>

    <!-- Calendar Timeline -->
    <section class="timeline-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ANNUAL SPORTS CALENDAR 2026-27</h2>
                <p>Scheduled championships, trials, and administrative events for the current session.</p>
            </div>

            <!-- Filters -->
            <div class="calendar-filter">
                <button class="filter-btn active">All Events</button>
                <button class="filter-btn">National</button>
                <button class="filter-btn">State</button>
                <button class="filter-btn">International</button>
                <button class="filter-btn">Trials</button>
            </div>

            <div class="calendar-timeline">
                
                <!-- October -->
                <div class="month-block">
                    <div class="month-title">October 2026</div>
                    <div class="event-item">
                        <div class="event-info">
                            <span class="event-category cat-state">State Trials</span>
                            <h3 class="mt-2">Uttar Pradesh Selection Trials</h3>
                            <div class="event-meta">
                                <span><i class="fas fa-calendar-alt"></i> Oct 25, 2026</span>
                                <span><i class="fas fa-map-marker-alt"></i> Lucknow, UP</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-orange">Circular</a>
                    </div>
                </div>

                <!-- November -->
                <div class="month-block">
                    <div class="month-title">November 2026</div>
                    <div class="event-item">
                        <div class="event-info">
                            <span class="event-category cat-national">National</span>
                            <h3 class="mt-2">15th Sub-Junior National Legball Championship</h3>
                            <div class="event-meta">
                                <span><i class="fas fa-calendar-alt"></i> Nov 15-18, 2026</span>
                                <span><i class="fas fa-map-marker-alt"></i> Panaji, Goa</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-orange">Registration</a>
                    </div>
                    <div class="event-item">
                        <div class="event-info">
                            <span class="event-category cat-state">State Event</span>
                            <h3 class="mt-2">Maharashtra State Trophy</h3>
                            <div class="event-meta">
                                <span><i class="fas fa-calendar-alt"></i> Nov 28-30, 2026</span>
                                <span><i class="fas fa-map-marker-alt"></i> Mumbai, MH</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-orange">View Details</a>
                    </div>
                </div>

                <!-- December -->
                <div class="month-block">
                    <div class="month-title">December 2026</div>
                    <div class="event-item">
                        <div class="event-info">
                            <span class="event-category cat-intl">International</span>
                            <h3 class="mt-2">South Asian Legball Cup 2026</h3>
                            <div class="event-meta">
                                <span><i class="fas fa-calendar-alt"></i> Dec 10-15, 2026</span>
                                <span><i class="fas fa-map-marker-alt"></i> New Delhi, India</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-orange">Media Kit</a>
                    </div>
                </div>

            </div>

            <!-- Download -->
            <div class="download-box">
                <i class="fas fa-file-pdf"></i>
                <h2>OFFICIAL CALENDAR (PDF)</h2>
                <p>Download the complete detailed calendar including technical meetings and seminar dates.</p>
                <a href="#" class="btn btn-orange mt-3" style="padding: 15px 40px;">Download Calendar 2026-27</a>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>