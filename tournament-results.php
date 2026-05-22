<?php
/*
Template Name: Tournament Results
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>Results</span>
            </div>
            <h1 class="banner-title">Tournament <br>Results</h1>
        </div>
    </section>

    <!-- Results Section -->
    <section class="results-section section-padding">
        <div class="container">
            
            <div class="results-filter">
                <div class="year-tabs">
                    <div class="year-tab active">2024-25</div>
                    <div class="year-tab">2023-24</div>
                    <div class="year-tab">2022-23</div>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search Tournament..." style="padding:10px 20px; border-radius:20px; border:1px solid #eee;">
                </div>
            </div>

            <div class="results-archive">
                
                <!-- National Results -->
                <div class="result-card">
                    <div class="result-header">
                        <h3>14th Senior National Legball</h3>
                        <span class="result-year">2024</span>
                    </div>
                    <div class="result-body">
                        <p><i class="fas fa-calendar-alt"></i> Feb 10-13, 2024 | <i class="fas fa-map-marker-alt"></i> Nagpur, MH</p>
                        <div class="podium">
                            <div class="podium-item">
                                <div class="medal-icon gold"><i class="fas fa-crown"></i></div>
                                <div><strong>Winner:</strong> Maharashtra</div>
                            </div>
                            <div class="podium-item">
                                <div class="medal-icon silver"><i class="fas fa-medal"></i></div>
                                <div><strong>Runner Up:</strong> Haryana</div>
                            </div>
                            <div class="podium-item">
                                <div class="medal-icon bronze"><i class="fas fa-award"></i></div>
                                <div><strong>3rd Place:</strong> Uttar Pradesh</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-orange" style="font-size:12px;"><i class="fas fa-file-pdf"></i> Scorecard</a>
                            <a href="#" class="btn btn-primary" style="font-size:12px; margin-left:10px;">Full Standing</a>
                        </div>
                    </div>
                </div>

                <!-- University Results -->
                <div class="result-card">
                    <div class="result-header">
                        <h3>All India Inter-University</h3>
                        <span class="result-year">2024</span>
                    </div>
                    <div class="result-body">
                        <p><i class="fas fa-calendar-alt"></i> Jan 05-08, 2024 | <i class="fas fa-map-marker-alt"></i> Delhi Univ.</p>
                        <div class="podium">
                            <div class="podium-item">
                                <div class="medal-icon gold"><i class="fas fa-crown"></i></div>
                                <div><strong>Winner:</strong> MDU Rohtak</div>
                            </div>
                            <div class="podium-item">
                                <div class="medal-icon silver"><i class="fas fa-medal"></i></div>
                                <div><strong>Runner Up:</strong> Delhi University</div>
                            </div>
                            <div class="podium-item">
                                <div class="medal-icon bronze"><i class="fas fa-award"></i></div>
                                <div><strong>3rd Place:</strong> Pune University</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-orange" style="font-size:12px;"><i class="fas fa-file-pdf"></i> Scorecard</a>
                            <a href="#" class="btn btn-primary" style="font-size:12px; margin-left:10px;">Full Standing</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Overall Standings -->
            <div class="mt-5 pt-5">
                <h2 class="section-title text-center">OVERALL FEDERATION STANDINGS</h2>
                <div class="standings-container" style="background:var(--white); border-radius:30px; box-shadow:var(--card-shadow); padding:30px; margin-top:30px;">
                    <table class="standings-table">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>State Unit</th>
                                <th>Gold</th>
                                <th>Silver</th>
                                <th>Bronze</th>
                                <th>Total Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Maharashtra</td>
                                <td>15</td>
                                <td>10</td>
                                <td>05</td>
                                <td>125</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Haryana</td>
                                <td>12</td>
                                <td>15</td>
                                <td>08</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Delhi</td>
                                <td>08</td>
                                <td>07</td>
                                <td>12</td>
                                <td>85</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>