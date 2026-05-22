<?php
/*
Template Name: Technical Officials
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="officials.html">Officials</a> / <span>Technical Officials</span>
            </div>
            <h1 class="banner-title">Technical <br>Officials</h1>
        </div>
    </section>

    <!-- Operational Roles -->
    <section class="roles-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">GOVERNANCE ROLES</h2>
                <p>Ensuring every match is conducted with absolute precision and adherence to LFI regulations.</p>
            </div>
            <div class="roles-grid">
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Match Commissioner</h4>
                    <p>The highest authority on game day. Supervises all aspects of match organization and security.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-edit"></i></div>
                    <h4>Chief Scorekeeper</h4>
                    <p>Responsible for official digital scoring and validation of match data in real-time.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-balance-scale"></i></div>
                    <h4>Jury of Appeal</h4>
                    <p>Handles technical protests and ensures the integrity of tournament rules.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Elite Panel -->
    <section class="panel-section section-padding" style="background:#f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ELITE TECHNICAL PANEL</h2>
                <p>Meet our most experienced officials who govern the National Championships.</p>
            </div>
            <div class="panel-grid">
                <div class="panel-card">
                    <div class="panel-img" style="background: linear-gradient(45deg, #eee, #ddd);"></div>
                    <div class="panel-info">
                        <h5>Aman Sharma</h5>
                        <span>Chief Commissioner</span>
                    </div>
                </div>
                <div class="panel-card">
                    <div class="panel-img" style="background: linear-gradient(45deg, #eee, #ddd);"></div>
                    <div class="panel-info">
                        <h5>Priya Verma</h5>
                        <span>Technical Scrutineer</span>
                    </div>
                </div>
                <div class="panel-card">
                    <div class="panel-img" style="background: linear-gradient(45deg, #eee, #ddd);"></div>
                    <div class="panel-info">
                        <h5>Rajesh Kumar</h5>
                        <span>Jury Member</span>
                    </div>
                </div>
                <div class="panel-card">
                    <div class="panel-img" style="background: linear-gradient(45deg, #eee, #ddd);"></div>
                    <div class="panel-info">
                        <h5>S. Mehra</h5>
                        <span>Match Delegate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Code of Ethics -->
    <section class="ethics-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; gap:60px; align-items:center;">
                <div class="ethics-box">
                    <h2 class="mb-4">CODE OF ETHICS</h2>
                    <ul class="ethics-list">
                        <li><i class="fas fa-check-circle"></i> <strong>Neutrality:</strong> Absolute impartiality in all decisions.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Punctuality:</strong> Being present 60 mins before match start.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Integrity:</strong> Zero tolerance for match manipulation.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Communication:</strong> Professional conduct with team officials.</li>
                    </ul>
                </div>
                <div class="apply-box">
                    <h3>JOIN THE TECHNICAL PANEL</h3>
                    <p class="mb-4">Experienced sports administrators and former referees can apply to be part of the LFI National Technical Panel.</p>
                    <form action="#">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" style="padding:15px; border-radius:10px;">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" style="padding:15px; border-radius:10px;">
                        </div>
                        <div class="form-group mb-4">
                            <select class="form-control" style="padding:15px; border-radius:10px; height:auto;">
                                <option>Expertise Area</option>
                                <option>Match Management</option>
                                <option>Scoring & Data</option>
                                <option>Technical Appeals</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background:var(--tech-purple); border:none; padding:15px 40px;">Submit Expression of Interest</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>