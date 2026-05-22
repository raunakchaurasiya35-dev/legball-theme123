<?php
/*
Template Name: Coach Registration
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="officials.html">Officials</a> / <span>Coach Registration</span>
            </div>
            <h1 class="banner-title">Coach <br>Registration</h1>
        </div>
    </section>

    <!-- Licensing Path -->
    <section class="license-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">COACHING LICENSING PATH</h2>
                <p class="para" style="margin-bottom: 20px">The LFI Certification Program is designed to standardize coaching excellence across the nation.</p>
            </div>
            <div class="license-grid">
                <div class="license-card">
                    <span class="license-level">Level 1</span>
                    <h3>Grassroots License</h3>
                    <p>Designed for school-level coaches and talent scouts. Focuses on basic ball control and child safety.</p>
                </div>
                <div class="license-card">
                    <span class="license-level">Level 2</span>
                    <h3>Advanced License</h3>
                    <p>For State Team coaches. Focuses on tactical field formations and match-day strategy.</p>
                </div>
                <div class="license-card">
                    <span class="license-level">Level 3</span>
                    <h3>High Performance</h3>
                    <p>Elite National License. Advanced physiology, sports psychology, and elite performance tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Coaching Pillars -->
    <section class="pillars-section section-padding" style="background:#f9f9f9;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">OUR COACHING PILLARS</h2>
                <p class="para" style="margin-bottom: 20px">Developing coaches who build more than just athletes.</p>
            </div>
            <div class="row" style="display:grid; grid-template-columns: repeat(4, 1fr); gap:20px;">
                <div class="pillar-box">
                    <div class="pillar-icon"><i class="fas fa-microscope"></i></div>
                    <h5>Technical</h5>
                    <p style="font-size:12px;">Mastering the biomechanics of Legball strikes.</p>
                </div>
                <div class="pillar-box">
                    <div class="pillar-icon"><i class="fas fa-chess"></i></div>
                    <h5>Tactical</h5>
                    <p style="font-size:12px;">Field awareness and positional rotations.</p>
                </div>
                <div class="pillar-box">
                    <div class="pillar-icon"><i class="fas fa-brain"></i></div>
                    <h5>Mental</h5>
                    <p style="font-size:12px;">Building resilience and championship mindset.</p>
                </div>
                <div class="pillar-box">
                    <div class="pillar-icon"><i class="fas fa-heartbeat"></i></div>
                    <h5>Physical</h5>
                    <p style="font-size:12px;">Injury prevention and elite conditioning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section class="registration-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 2fr 1fr; gap:50px;" class="main-grid">
                <div class="reg-box">
                    <h3 class="mb-4" style="margin-bottom: 20px" >COACH ENROLLMENT PORTAL</h3>
                    <form action="#">
                        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                            <div class="form-group mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Coach Name">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Coaching Category</label>
                                <select class="form-control">
                                    <option>Select Category</option>
                                    <option>Men's Team</option>
                                    <option>Women's Team</option>
                                    <option>Junior Squad</option>
                                </select>
                            </div>
                        </div>
                        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                            <div class="form-group mb-3">
                                <label class="form-label">Certification Level Sought</label>
                                <select class="form-control">
                                    <option>Level 1</option>
                                    <option>Level 2</option>
                                    <option>Level 3</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+91 00000 00000">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Coaching Philosophy</label>
                            <textarea class="form-control" rows="5" placeholder="Briefly describe your approach to athlete development..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="padding:18px 45px; margin-top: 20px; background:var(--coach-green);">Apply for Certification</button>
                    </form>
                </div>

                <div class="sidebar">
                    <div style="background:#fff8e1; padding:30px; border-radius:30px; border-left:5px solid var(--coach-gold);">
                        <h4 class="mb-3">ELIGIBILITY</h4>
                        <ul class="sidebar-list">
                            <li><i class="fas fa-check-circle"></i> Min. Age: 21 Years.</li>
                            <li><i class="fas fa-check-circle"></i> Physical Education background.</li>
                            <li><i class="fas fa-check-circle"></i> Basic First Aid Certification.</li>
                            <li><i class="fas fa-check-circle"></i> Clear Background Check.</li>
                        </ul>
                    </div>

                    <div style="margin-top:40px;">
                        <h4 class="mb-3">UPCOMING COURSES</h4>
                        <div style="background:var(--white); padding:20px; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.05); margin-bottom:15px;">
                            <span style="color:var(--coach-green); font-weight:700;">OCT 15-20</span>
                            <h6 class="mt-1">Level 1 Licensing</h6>
                            <p style="font-size:12px; color:var(--gray);">Venue: SAI Center, Bangalore</p>
                        </div>
                        <div style="background:var(--white); padding:20px; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.05);">
                            <span style="color:var(--coach-green); font-weight:700;">NOV 02-08</span>
                            <h6 class="mt-1">High Performance Clinic</h6>
                            <p style="font-size:12px; color:var(--gray);">Venue: IG Stadium, Delhi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>