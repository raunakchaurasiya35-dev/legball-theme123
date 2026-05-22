<?php
/*
Template Name: University Games
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>University Games</span>
            </div>
            <h1 class="banner-title">University <br>Games</h1>
        </div>
    </section>

    <!-- AIU Recognition -->
    <section class="recognition-section section-padding">
        <div class="container">
            <div class="aiu-box">
                <div class="aiu-badge">
                    <i class="fas fa-university"></i>
                </div>
                <div class="aiu-content">
                    <h2 class="section-title text-left" style="margin-bottom:15px;">AIU RECOGNITION</h2>
                    <p>Legball is recognized by the <strong>Association of Indian Universities (AIU)</strong>. This allows for the organization of Inter-University championships, providing a platform for higher education students to showcase their talent at a national level.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament Grid -->
    <section class="formats-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">UNIVERSITY COMPETITION PATHWAY</h2>
                <p>From local university trials to elite All India Inter-University championships.</p>
            </div>
            
            <div class="uni-grid">
                <div class="uni-card">
                    <i class="fas fa-award"></i>
                    <h3>Inter-University</h3>
                    <p>Competitive games held between different departments and colleges within a university.</p>
                </div>
                <div class="uni-card">
                    <i class="fas fa-trophy"></i>
                    <h3>Zonal Inter-University</h3>
                    <p>Regional championships (North, South, East, West) featuring top university teams.</p>
                </div>
                <div class="uni-card">
                    <i class="fas fa-crown"></i>
                    <h3>All India Inter-University</h3>
                    <p>The ultimate university championship where zonal winners compete for the national title.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility -->
    <section class="elig-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color:var(--white);">ELIGIBILITY CRITERIA</h2>
                <p>Standard requirements for university students to participate in official AIU events.</p>
            </div>
            
            <div class="elig-list">
                <div class="elig-item">
                    <i class="fas fa-user-check"></i>
                    <div>
                        <h5>Age Limit</h5>
                        <p>Participants must be between the ages of 17 to 25 years as per AIU guidelines.</p>
                    </div>
                </div>
                <div class="elig-item">
                    <i class="fas fa-id-card"></i>
                    <div>
                        <h5>Student Status</h5>
                        <p>Must be a full-time regular student in a recognized university or affiliated college.</p>
                    </div>
                </div>
                <div class="elig-item">
                    <i class="fas fa-file-alt"></i>
                    <div>
                        <h5>Academic Record</h5>
                        <p>Must have no pending academic failures as per the specific tournament regulations.</p>
                    </div>
                </div>
                <div class="elig-item">
                    <i class="fas fa-certificate"></i>
                    <div>
                        <h5>LFI Registration</h5>
                        <p>Mandatory active player registration with the Legball Federation of India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Champions -->
    <section class="champions-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">UNIVERSITY HALL OF FAME</h2>
                <p>Celebrating the top-performing universities in All India championships.</p>
            </div>
            
            <table class="uni-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Host University</th>
                        <th>Winner (Men)</th>
                        <th>Winner (Women)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024</td>
                        <td>Delhi University</td>
                        <td><span class="winner-text">MDU Rohtak</span></td>
                        <td><span class="winner-text">Delhi University</span></td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Pune University</td>
                        <td><span class="winner-text">Pune University</span></td>
                        <td><span class="winner-text">Kurukshetra Univ.</span></td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>Panjab University</td>
                        <td><span class="winner-text">Panjab University</span></td>
                        <td><span class="winner-text">MDU Rohtak</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    
<?php get_footer(); ?>