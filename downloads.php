<?php
/*
Template Name: Downloads
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/tournaments_banner.png');">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>Downloads & Resources</span>
            </div>
            <h1 class="banner-title">Downloads & Resources</h1>
        </div>
    </section>

    <!-- Latest Updates Section -->
    <section class="latest-downloads section-padding">
        <div class="container">
            <div class="update-box">
                <div class="update-label"><i class="fas fa-bullhorn"></i> LATEST CIRCULAR</div>
                <div class="update-content">
                    <h3>Revised Constitution of LFI - Version 2024.1</h3>
                    <p>The executive committee has approved the revised constitution with updated voting rules and federation policies.</p>
                </div>
                <div class="update-btn">
                    <a href="#" class="btn btn-primary btn-sm">Download PDF</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Downloads Grid Section -->
    <section class="downloads-grid-section section-padding bg-light">
        <div class="container">
            <div class="downloads-grid">
                <!-- Category 1 -->
                <div class="download-cat-card">
                    <div class="cat-header">
                        <i class="fas fa-user-edit"></i>
                        <h3>REGISTRATION FORMS</h3>
                    </div>
                    <ul class="file-list">
                        <li><a href="#">Player Registration Form (New) <span>PDF | 245KB</span></a></li>
                        <li><a href="#">Referee Application Form <span>PDF | 180KB</span></a></li>
                        <li><a href="#">Coach Certification Form <span>PDF | 210KB</span></a></li>
                        <li><a href="#">State Unit Affiliation Form <span>PDF | 320KB</span></a></li>
                    </ul>
                </div>

                <!-- Category 2 -->
                <div class="download-cat-card">
                    <div class="cat-header">
                        <i class="fas fa-book"></i>
                        <h3>RULES & POLICIES</h3>
                    </div>
                    <ul class="file-list">
                        <li><a href="#">Official Legball Rulebook 2024 <span>PDF | 1.2MB</span></a></li>
                        <li><a href="#">Anti-Doping Policy (NADA) <span>PDF | 450KB</span></a></li>
                        <li><a href="#">Code of Ethics & Conduct <span>PDF | 150KB</span></a></li>
                        <li><a href="#">Selection Criteria 2024-25 <span>PDF | 280KB</span></a></li>
                    </ul>
                </div>

                <!-- Category 3 -->
                <div class="download-cat-card">
                    <div class="cat-header">
                        <i class="fas fa-trophy"></i>
                        <h3>TOURNAMENT RESOURCES</h3>
                    </div>
                    <ul class="file-list">
                        <li><a href="#">Official Score Sheet <span>PDF | 110KB</span></a></li>
                        <li><a href="#">Tournament Entry Form <span>PDF | 190KB</span></a></li>
                        <li><a href="#">National Calendar 2024-25 <span>PDF | 540KB</span></a></li>
                        <li><a href="#">Protest Submission Form <span>PDF | 140KB</span></a></li>
                    </ul>
                </div>

                <!-- Category 4 -->
                <div class="download-cat-card">
                    <div class="cat-header">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <h3>REPORTS & TENDERS</h3>
                    </div>
                    <ul class="file-list">
                        <li><a href="#">Annual Report 2023-24 <span>PDF | 2.5MB</span></a></li>
                        <li><a href="#">Audited Financials 2023 <span>PDF | 1.8MB</span></a></li>
                        <li><a href="#">Open Tender: Sports Kit <span>PDF | 340KB</span></a></li>
                        <li><a href="#">LFI Press Kit 2024 <span>ZIP | 15MB</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section section-padding">
        <div class="container text-center">
            <h2 class="section-title">CAN'T FIND WHAT YOU NEED?</h2>
            <p>If you're looking for a specific document that isn't listed here, please contact our administrative office.</p>
            <div class="mt-4">
                <a href="contact.html" class="btn btn-outline">Contact Admin Office</a>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>