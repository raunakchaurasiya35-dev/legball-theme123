<?php
/*
Template Name: Referee Registration
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="officials.html">Officials</a> / <span>Referee Registration</span>
            </div>
            <h1 class="banner-title">Referee <br>Registration</h1>
        </div>
    </section>

    <!-- Grading Section -->
    <section class="grading-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">REFEREE GRADING SYSTEM</h2>
                <p>The LFI follows a structured career path for officials to ensure international officiating standards.</p>
            </div>
            <div class="grading-grid">
                <div class="grade-card">
                    <div class="grade-icon"><i class="fas fa-certificate"></i></div>
                    <h3>Grade C</h3>
                    <p>District Level Official. Eligible for local school and district championships.</p>
                </div>
                <div class="grade-card">
                    <div class="grade-icon"><i class="fas fa-medal"></i></div>
                    <h3>Grade B</h3>
                    <p>State Level Official. 2+ years of experience required at District level.</p>
                </div>
                <div class="grade-card">
                    <div class="grade-icon"><i class="fas fa-star"></i></div>
                    <h3>Grade A</h3>
                    <p>National Official. Eligible for National Championships and International trials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section class="registration-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 2fr 1fr; gap:40px;">
                <div class="reg-container">
                    <h3 class="mb-4">OFFICIAL REGISTRATION FORM</h3>
                    <form action="#">
                        <div class="form-row" style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-row" style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+91 00000 00000">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">State Unit / Association</label>
                            <select class="form-control">
                                <option>Select State</option>
                                <option>Maharashtra</option>
                                <option>Delhi</option>
                                <option>Haryana</option>
                                <option>West Bengal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Past Officiating Experience (if any)</label>
                            <textarea class="form-control" rows="4" placeholder="Briefly describe your experience in Legball or other sports officiating"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="padding:15px 40px; background:var(--ref-blue);">Submit Application</button>
                    </form>
                </div>

                <div class="req-sidebar">
                    <h4 class="mb-4">PRE-REQUISITES</h4>
                    <ul class="req-list">
                        <li><i class="fas fa-check-circle"></i> Minimum Age: 18 Years.</li>
                        <li><i class="fas fa-check-circle"></i> Sound knowledge of LFI Rulebook.</li>
                        <li><i class="fas fa-check-circle"></i> Physical fitness to match game intensity.</li>
                        <li><i class="fas fa-check-circle"></i> Scanned Copy of Aadhar Card.</li>
                        <li><i class="fas fa-check-circle"></i> Educational Qualification (Min. 12th).</li>
                    </ul>

                    <h4 class="mt-5 mb-4">UPCOMING SEMINARS</h4>
                    <div class="seminar-card">
                        <div class="seminar-date">
                            <strong>12</strong><br>JULY
                        </div>
                        <div class="seminar-info">
                            <h5>North Zone Workshop</h5>
                            <p style="font-size:12px; color:var(--gray);">Faridabad, Haryana</p>
                        </div>
                    </div>
                    <div class="seminar-card">
                        <div class="seminar-date">
                            <strong>05</strong><br>AUG
                        </div>
                        <div class="seminar-info">
                            <h5>Western Ref Clinic</h5>
                            <p style="font-size:12px; color:var(--gray);">Mumbai, MH</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>