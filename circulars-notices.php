<?php
/*
Template Name: Circulars Notices
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="downloads.html">Downloads</a> / <span>Circulars & Notices</span>
            </div>
            <h1 class="banner-title">Circulars <br>& Notices</h1>
        </div>
    </section>

    <!-- Notices Section -->
    <section class="notices-section section-padding">
        <div class="container">
            <div class="row">
                
                <!-- Main Board -->
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h2 style="color:var(--notice-primary); font-weight:800; display:flex; align-items:center; gap:15px;">
                            <i class="fas fa-bullhorn" style="color:var(--notice-accent);"></i> Official Announcements
                        </h2>
                        <p>Latest directives, tournament announcements, and administrative updates from the Federation.</p>
                    </div>

                    <div class="notice-list">
                        <!-- Item 1 -->
                        <div class="notice-item">
                            <div class="notice-date">
                                <div class="date-box">
                                    <span class="day">12</span>
                                    <span class="month">May</span>
                                </div>
                            </div>
                            <div class="notice-content">
                                <span class="notice-category">Tournament Announcement</span>
                                <h4 class="notice-title">14th Senior National Legball Championship 2024 <span class="badge-new">NEW</span></h4>
                                <p class="notice-meta">Ref: LFI/HQ/CIR/2024/089 | Size: 450 KB</p>
                            </div>
                            <div class="notice-action">
                                <a href="#" class="btn-download"><i class="fas fa-file-pdf"></i> Download PDF</a>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="notice-item">
                            <div class="notice-date">
                                <div class="date-box">
                                    <span class="day">08</span>
                                    <span class="month">May</span>
                                </div>
                            </div>
                            <div class="notice-content">
                                <span class="notice-category">Administrative</span>
                                <h4 class="notice-title">Revised Affiliation Renewal Guidelines for State Units</h4>
                                <p class="notice-meta">Ref: LFI/ADM/NOT/2024/042 | Size: 1.2 MB</p>
                            </div>
                            <div class="notice-action">
                                <a href="#" class="btn-download"><i class="fas fa-file-pdf"></i> Download PDF</a>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="notice-item">
                            <div class="notice-date">
                                <div class="date-box">
                                    <span class="day">25</span>
                                    <span class="month">Apr</span>
                                </div>
                            </div>
                            <div class="notice-content">
                                <span class="notice-category">Technical</span>
                                <h4 class="notice-title">Selection Criteria for World School Games 2024</h4>
                                <p class="notice-meta">Ref: LFI/TECH/CIR/2024/015 | Size: 320 KB</p>
                            </div>
                            <div class="notice-action">
                                <a href="#" class="btn-download"><i class="fas fa-file-pdf"></i> Download PDF</a>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="notice-item">
                            <div class="notice-date">
                                <div class="date-box">
                                    <span class="day">15</span>
                                    <span class="month">Apr</span>
                                </div>
                            </div>
                            <div class="notice-content">
                                <span class="notice-category">General</span>
                                <h4 class="notice-title">Annual General Body Meeting (AGM) Notice - Delhi</h4>
                                <p class="notice-meta">Ref: LFI/SEC/GEN/2024/010 | Size: 580 KB</p>
                            </div>
                            <div class="notice-action">
                                <a href="#" class="btn-download"><i class="fas fa-file-pdf"></i> Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn" style="background:#f1f5f9; color:var(--notice-primary); font-weight:700; padding:15px 40px; border-radius:15px; border:none;">View Older Archive <i class="fas fa-chevron-right ml-2"></i></a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="notice-sidebar">
                        <div class="search-box">
                            <h5 class="mb-4">Search Circulars</h5>
                            <div style="position:relative;">
                                <input type="text" placeholder="Search by Year, ID or Title..." style="width:100%; padding:15px; border-radius:12px; border:1px solid #ddd; outline:none;">
                                <i class="fas fa-search" style="position:absolute; right:15px; top:18px; color:#aaa;"></i>
                            </div>
                        </div>

                        <div style="background:var(--notice-primary); color:var(--white); padding:40px; border-radius:30px;">
                            <h4 class="mb-3">Urgent Alerts?</h4>
                            <p style="font-size:14px; opacity:0.8;" class="mb-4">Subscribe to our newsletter to receive official circulars directly in your inbox as soon as they are published.</p>
                            <input type="email" placeholder="Enter your email" style="width:100%; padding:15px; border-radius:12px; border:none; margin-bottom:15px; outline:none;">
                            <button class="btn" style="width:100%; background:var(--notice-accent); color:var(--white); font-weight:700; padding:15px; border-radius:12px; border:none;">Subscribe Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
<?php get_footer(); ?>