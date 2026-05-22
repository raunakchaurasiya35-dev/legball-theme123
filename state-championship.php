<?php
/*
Template Name: State Championship
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>State Championship</span>
            </div>
            <h1 class="banner-title">State <br>Championships</h1>
        </div>
    </section>

    <!-- State Events -->
    <section class="state-events-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">REGIONAL CALENDAR</h2>
                <p style="margin-bottom: 20px">Explore upcoming state-level championships organized by our affiliated units.</p>
            </div>
            
            <div class="state-events-grid">
                <div class="state-event-card">
                    <div class="event-card-img">
                        <i class="fas fa-trophy"></i>
                        <div class="state-name">Maharashtra</div>
                    </div>
                    <div class="event-card-content">
                        <h3>State Legball Trophy</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-calendar-day"></i> Nov 10-12, 2026</span>
                            <span><i class="fas fa-map-marker-alt"></i> Pune, MH</span>
                        </div>
                        <a href="#" class="btn btn-orange" style="width: 100%;">View Details</a>
                    </div>
                </div>
                <div class="state-event-card">
                    <div class="event-card-img">
                        <i class="fas fa-trophy"></i>
                        <div class="state-name">Haryana</div>
                    </div>
                    <div class="event-card-content">
                        <h3>Inter-District Championship</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-calendar-day"></i> Dec 05-08, 2026</span>
                            <span><i class="fas fa-map-marker-alt"></i> Sonipat, HR</span>
                        </div>
                        <a href="#" class="btn btn-orange" style="width: 100%;">View Details</a>
                    </div>
                </div>
                <div class="state-event-card">
                    <div class="event-card-img">
                        <i class="fas fa-trophy"></i>
                        <div class="state-name">Delhi</div>
                    </div>
                    <div class="event-card-content">
                        <h3>Delhi State Open</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-calendar-day"></i> Jan 20-22, 2027</span>
                            <span><i class="fas fa-map-marker-alt"></i> New Delhi</span>
                        </div>
                        <a href="#" class="btn btn-orange" style="width: 100%;">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Participation Steps -->
    <section class="participation-section section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title" style="color:var(--white);">HOW TO PARTICIPATE?</h2>
                <p>Follow these simple steps to compete in your state's official Legball championship.</p>
            </div>
            
            <div class="step-grid">
                <div class="step-card">
                    <div class="step-num">01</div>
                    <h4>Register</h4>
                    <p>Register as a player with your State Association.</p>
                </div>
                <div class="step-card">
                    <div class="step-num">02</div>
                    <h4>District Selection</h4>
                    <p>Compete in district trials and get selected for the team.</p>
                </div>
                <div class="step-card">
                    <div class="step-num">03</div>
                    <h4>Verification</h4>
                    <p>Complete document verification and eligibility checks.</p>
                </div>
                <div class="step-card">
                    <div class="step-num">04</div>
                    <h4>Compete</h4>
                    <p>Represent your district in the State Championship.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Medal Tally -->
    <section class="tally-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">STATE PERFORMANCE RANKING</h2>
                <p>Overall performance ranking of states based on the last 3 National cycles.</p>
            </div>
            
            <div class="tally-container">
                <table class="tally-table">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>State / Unit</th>
                            <th><span class="medal gold"></span> Gold</th>
                            <th><span class="medal silver"></span> Silver</th>
                            <th><span class="medal bronze"></span> Bronze</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Maharashtra</td>
                            <td>12</td>
                            <td>08</td>
                            <td>05</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Haryana</td>
                            <td>10</td>
                            <td>12</td>
                            <td>07</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Delhi</td>
                            <td>08</td>
                            <td>05</td>
                            <td>10</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Uttar Pradesh</td>
                            <td>06</td>
                            <td>07</td>
                            <td>04</td>
                            <td>17</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>