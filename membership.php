<?php
/*
Template Name: Membership
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/images/about_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Membership & Affiliation</span>
            </div>
            <h1 class="banner-title">Membership & Affiliation</h1>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section class="plans-section section-padding">
        <div class="container">
            <h2 class="section-title text-center">AFFILIATION CATEGORIES</h2>
            <p class="text-center mb-5">Choose the right category to become a recognized part of the Legball Federation of India.</p>
            
            <div class="plans-grid">
                <!-- State Unit Plan -->
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>STATE UNIT</h3>
                        <p class="price">₹ 25,000<span> / Year</span></p>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Voting Rights in AGM</li>
                        <li><i class="fas fa-check"></i> Right to host National Events</li>
                        <li><i class="fas fa-check"></i> Issue Player Certificates</li>
                        <li><i class="fas fa-check"></i> Formation of State Committee</li>
                        <li><i class="fas fa-check"></i> Direct Support from LFI</li>
                    </ul>
                    <div class="plan-footer">
                        <a href="#" class="btn btn-primary">Apply for State Unit</a>
                    </div>
                </div>

                <!-- District Unit Plan -->
                <div class="plan-card popular">
                    <div class="popular-tag">MOST COMMON</div>
                    <div class="plan-header">
                        <h3>DISTRICT UNIT</h3>
                        <p class="price">₹ 10,000<span> / Year</span></p>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Participation in State AGM</li>
                        <li><i class="fas fa-check"></i> Host District Championships</li>
                        <li><i class="fas fa-check"></i> Player Selection Trials</li>
                        <li><i class="fas fa-check"></i> District Level Infrastructure</li>
                        <li><i class="fas fa-check"></i> Affiliation with State Unit</li>
                    </ul>
                    <div class="plan-footer">
                        <a href="#" class="btn btn-primary">Apply for District Unit</a>
                    </div>
                </div>

                <!-- Individual Member Plan -->
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>LIFE MEMBER</h3>
                        <p class="price">₹ 5,000<span> / Once</span></p>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Individual Recognition</li>
                        <li><i class="fas fa-check"></i> Access to LFI Library</li>
                        <li><i class="fas fa-check"></i> Invitation to Special Events</li>
                        <li><i class="fas fa-check"></i> Digital Membership Card</li>
                        <li><i class="fas fa-times" style="color: #e74c3c;"></i> No Voting Rights</li>
                    </ul>
                    <div class="plan-footer">
                        <a href="#" class="btn btn-primary">Become a Life Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Section -->
    <section class="benefits-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title left-align">WHY JOIN LFI?</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="b-icon"><i class="fas fa-certificate"></i></div>
                    <h4>Official Recognition</h4>
                    <p>Be a part of the only governing body for Legball recognized at the national level.</p>
                </div>
                <div class="benefit-item">
                    <div class="b-icon"><i class="fas fa-users-cog"></i></div>
                    <h4>Structured Growth</h4>
                    <p>Access to professional coaching, standardized rules, and systematic growth pathways.</p>
                </div>
                <div class="benefit-item">
                    <div class="b-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>International Reach</h4>
                    <p>Opportunities to represent India in international tournaments and exchanges.</p>
                </div>
                <div class="benefit-item">
                    <div class="b-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Legal & Policy Support</h4>
                    <p>Full support in legal matters, policy making, and athlete protection guidelines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="process-section section-padding">
        <div class="container">
            <h2 class="section-title text-center">APPLICATION PROCESS</h2>
            <div class="process-timeline">
                <div class="proc-step">
                    <div class="proc-circle">1</div>
                    <h4>Submit Form</h4>
                    <p>Fill the online application or download the form.</p>
                </div>
                <div class="proc-step">
                    <div class="proc-circle">2</div>
                    <h4>Verification</h4>
                    <p>LFI committee verifies the submitted documents.</p>
                </div>
                <div class="proc-step">
                    <div class="proc-circle">3</div>
                    <h4>Fee Payment</h4>
                    <p>Pay the affiliation fee through official channels.</p>
                </div>
                <div class="proc-step">
                    <div class="proc-circle">4</div>
                    <h4>Certification</h4>
                    <p>Receive your official affiliation certificate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Forms Section -->
    <section class="forms-section section-padding bg-light">
        <div class="container">
            <div class="forms-box">
                <div class="forms-text">
                    <h2>OFFICIAL FORMS</h2>
                    <p>Prefer the traditional way? Download the relevant affiliation forms, fill them, and courier them to our Head Office.</p>
                </div>
                <div class="forms-links">
                    <a href="#" class="btn-link"><i class="fas fa-file-download"></i> State Unit Form</a>
                    <a href="#" class="btn-link"><i class="fas fa-file-download"></i> District Unit Form</a>
                    <a href="#" class="btn-link"><i class="fas fa-file-download"></i> Individual Form</a>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>