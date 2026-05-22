<?php
/*
Template Name: Training Programs
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="officials.html">Officials</a> / <span>Training Programs</span>
            </div>
            <h1 class="banner-title">Training <br>Programs</h1>
        </div>
    </section>

    <!-- Training Tracks -->
    <section class="tracks-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">CHOOSE YOUR TRAINING TRACK</h2>
                <p>Specialized education paths for referees, coaches, and technical administrators.</p>
            </div>
            <div class="tracks-grid">
                <div class="track-card">
                    <div class="track-icon"><i class="fas fa-whistle"></i></div>
                    <h3>Referee Track</h3>
                    <p>From fundamental rules to elite-level match control and VAR protocols.</p>
                </div>
                <div class="track-card">
                    <div class="track-icon"><i class="fas fa-users-cog"></i></div>
                    <h3>Technical Track</h3>
                    <p>Focus on match commissioner duties, scoring technology, and event management.</p>
                </div>
                <div class="track-card">
                    <div class="track-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3>Coaching Track</h3>
                    <p>Advanced sports science, tactical analysis, and player psychology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Roadmap -->
    <section class="roadmap-section section-padding" style="background:#f0f7f7;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">THE LEARNING JOURNEY</h2>
                <p>A structured timeline of how you progress through our professional training.</p>
            </div>
            <div class="roadmap-container">
                <div class="roadmap-step">
                    <div class="step-num">01</div>
                    <div class="step-content">
                        <h4>Orientation Seminar</h4>
                        <p>2-day introductory workshop covering the history and basic laws of Legball.</p>
                    </div>
                </div>
                <div class="roadmap-step">
                    <div class="step-num">02</div>
                    <div class="step-content">
                        <h4>Certification Course</h4>
                        <p>Intensive 7-day residential training with practical field assessments.</p>
                    </div>
                </div>
                <div class="roadmap-step">
                    <div class="step-num">03</div>
                    <div class="step-content">
                        <h4>Field Internship</h4>
                        <p>Shadowing senior officials during district and state-level championships.</p>
                    </div>
                </div>
                <div class="roadmap-step">
                    <div class="step-num">04</div>
                    <div class="step-content">
                        <h4>Annual Refresher</h4>
                        <p>Mandatory yearly update on rule changes and technical innovations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enquiry & Modules -->
    <section class="enquiry-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; gap:60px;" class="main-grid">
                <div class="modules-info">
                    <h2 class="mb-4">CORE MODULES</h2>
                    <div class="module-grid">
                        <div class="module-item">
                            <i class="fas fa-book-open"></i>
                            <div>
                                <strong>Technical Laws</strong>
                                <p style="font-size:12px;">Deep dive into all 17 laws of Legball.</p>
                            </div>
                        </div>
                        <div class="module-item">
                            <i class="fas fa-laptop-code"></i>
                            <div>
                                <strong>Digital Scoring</strong>
                                <p style="font-size:12px;">Mastering the LFI official scoring app.</p>
                            </div>
                        </div>
                        <div class="module-item">
                            <i class="fas fa-first-aid"></i>
                            <div>
                                <strong>Injury Management</strong>
                                <p style="font-size:12px;">Basic field first-aid and child safety.</p>
                            </div>
                        </div>
                        <div class="module-item">
                            <i class="fas fa-handshake"></i>
                            <div>
                                <strong>Conflict Resolution</strong>
                                <p style="font-size:12px;">Managing high-pressure match situations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="enquiry-box">
                    <h3 class="mb-4">TRAINING ENQUIRY</h3>
                    <p class="mb-4" style="font-size:14px; opacity:0.8;">Fill out the form below to receive the detailed brochure and upcoming schedule for your preferred track.</p>
                    <form action="#">
                        <input type="text" class="form-input" placeholder="Your Name">
                        <input type="email" class="form-input" placeholder="Email Address">
                        <select class="form-input" style="height:auto;">
                            <option>Interested Track</option>
                            <option>Refereeing</option>
                            <option>Technical Officiating</option>
                            <option>Coaching</option>
                        </select>
                        <textarea class="form-input" rows="4" placeholder="Any specific questions?"></textarea>
                        <button type="submit" class="btn" style="background:var(--train-orange); color:var(--white); padding:15px 40px; width:100%; font-weight:700;">Submit Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>