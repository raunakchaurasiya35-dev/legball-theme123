<?php
/*
Template Name: District Championship
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="tournaments.html">Tournaments</a> / <span>District Championship</span>
            </div>
            <h1 class="banner-title">District <br>Championships</h1>
        </div>
    </section>

    <!-- Grassroots Foundation -->
    <section class="grassroots-section section-padding">
        <div class="container">
            <div class="grassroots-card">
                <div class="grassroots-icon"><i class="fas fa-seedling"></i></div>
                <div class="grassroots-content">
                    <h2 class="section-title text-left">GRASSROOTS FOUNDATION</h2>
                    <p>District championships form the base of our sporting pyramid. This is where future national stars are discovered. Every year, over 500+ districts across India organize local tournaments to identify and nurture young talent.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trials Schedule -->
    <section class="trials-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">SELECTION TRIALS SCHEDULE</h2>
                <p style="margin-bottom: 20px">Stay updated with upcoming district selection trials in your region.</p>
            </div>
            
            <div class="trials-grid">
                <div class="trial-card">
                    <div class="trial-header">
                        <h3>Lucknow District Trials</h3>
                        <span class="trial-date">Oct 25, 2026</span>
                    </div>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--orange);"></i> K.D. Singh Babu Stadium, Lucknow</p>
                    <p>Contact: District Secretary - 98765 43210</p>
                </div>
                <div class="trial-card">
                    <div class="trial-header">
                        <h3>Rohtak District Trials</h3>
                        <span class="trial-date">Nov 02, 2026</span>
                    </div>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--orange);"></i> Rajiv Gandhi Sports Complex, Rohtak</p>
                    <p>Contact: District Secretary - 87654 32109</p>
                </div>
                <div class="trial-card">
                    <div class="trial-header">
                        <h3>Pune District Trials</h3>
                        <span class="trial-date">Nov 05, 2026</span>
                    </div>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--orange);"></i> Balewadi Sports Complex, Pune</p>
                    <p>Contact: District Secretary - 76543 21098</p>
                </div>
                <div class="trial-card">
                    <div class="trial-header">
                        <h3>Patiala District Trials</h3>
                        <span class="trial-date">Nov 12, 2026</span>
                    </div>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--orange);"></i> Polo Ground, Patiala</p>
                    <p>Contact: District Secretary - 65432 10987</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Selection Criteria -->
    <section class="criteria-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">SELECTION CRITERIA</h2>
                <p style="margin-bottom: 20px">Key requirements for participating in district-level championships and trials.</p>
            </div>
            
            <div class="criteria-list">
                <div class="criteria-item">
                    <i class="fas fa-id-card"></i>
                    <div>
                        <h5>Age Proof</h5>
                        <p>Valid Aadhar Card or Birth Certificate is mandatory.</p>
                    </div>
                </div>
                <div class="criteria-item">
                    <i class="fas fa-map-pin"></i>
                    <div>
                        <h5>Residency</h5>
                        <p>Must be a resident of the district for at least 6 months.</p>
                    </div>
                </div>
                <div class="criteria-item">
                    <i class="fas fa-file-signature"></i>
                    <div>
                        <h5>Registration</h5>
                        <p>Active LFI Player Registration ID is required.</p>
                    </div>
                </div>
                <div class="criteria-item">
                    <i class="fas fa-heartbeat"></i>
                    <div>
                        <h5>Medical Fitness</h5>
                        <p>Physical fitness certificate from a registered doctor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Find Association -->
    <section class="find-section section-padding">
        <div class="container">
            <div class="find-box">
                <h2>FIND YOUR DISTRICT ASSOCIATION</h2>
                <p>Can't find your district in the list? Search here to get contact details of your local coordinator.</p>
                <div class="search-field">
                    <input type="text" placeholder="Enter District Name (e.g. Nagpur, Jaipur...)">
                    <button class="btn btn-orange">Search Now</button>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>