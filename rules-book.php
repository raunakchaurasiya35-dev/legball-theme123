<?php
/*
Template Name: Rules Book
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="downloads.html">Downloads</a> / <span>Rules Book</span>
            </div>
            <h1 class="banner-title">Official <br>Rules Book</h1>
        </div>
    </section>

    <!-- Rulebook Section -->
    <section class="rules-section section-padding">
        <div class="container">

            <div class="rulebook-main">
                <div class="rulebook-cover">
                    <div class="cover-mockup">
                        <div style="text-align: center;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" style="width:50px; margin-bottom:15px;">
                            <h3 style="font-size:18px; color:#2c3e50; font-weight:800;">OFFICIAL <br>RULES BOOK</h3>
                            <p style="font-size:10px; color:#666; margin-top:5px;">Governing Code of Conduct</p>
                        </div>
                        <div style="border-top:2px solid #e67e22; padding-top:15px;">
                            <p style="font-size:12px; font-weight:700;">VERSION 2.4.1</p>
                            <p style="font-size:10px;">LFI Technical Committee</p>
                        </div>
                    </div>
                </div>
                <div class="rulebook-details">
                    <span
                        style="color:var(--rules-accent); font-weight:700; text-transform:uppercase; letter-spacing:2px;">Main
                        Publication</span>
                    <h2 class="mb-4" style="color:var(--rules-primary); font-size:36px; font-weight:800;">Legball
                        Rulebook <br>(Edition 2024-25)</h2>
                    <p class="mb-5">This is the definitive governing document for the sport of Legball in India. It
                        contains all technical specifications, field dimensions, gameplay laws, and tournament
                        regulations approved by the LFI General Body.</p>

                    <div class="row mb-5">
                        <div class="col-6">
                            <h6 class="mb-1"><i class="fas fa-file-pdf mr-2 text-danger"></i> Format</h6>
                            <p style="font-size:14px;">Print-Ready PDF</p>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-1"><i class="fas fa-language mr-2 text-primary"></i> Language</h6>
                            <p style="font-size:14px;">English (International)</p>
                        </div>
                    </div>

                    <a href="<?php echo get_template_directory_uri(); ?>/assets/LEGBALL RULE BOOK.pdf" class="btn"
                        style="background:var(--rules-accent); color:var(--white); margin-top: 20px; padding:15px 40px; border-radius:12px; font-weight:700; border:none; box-shadow:0 10px 20px rgba(230,126,34,0.3);">Download
                        Official Copy (3.4 MB)</a>
                </div>
            </div>

            <!-- Chapter Highlights -->
            <div class="text-center mb-5">
                <h3 style="color:var(--rules-primary); font-weight:800;">QUICK REFERENCE GUIDES</h3>
                <p>Access specific technical chapters for rapid consultation.</p>
            </div>

            <div class="chapter-grid">
                <div class="chapter-card">
                    <i class="fas fa-vector-square"></i>
                    <h5>Field & Markings</h5>
                    <p style="font-size:12px; opacity:0.7;">Official dimensions for National & State courts.</p>
                </div>
                <div class="chapter-card">
                    <i class="fas fa-volleyball-ball"></i>
                    <h5>Equipment</h5>
                    <p style="font-size:12px; opacity:0.7;">Ball specifications and player kit regulations.</p>
                </div>
                <div class="chapter-card">
                    <i class="fas fa-stopwatch"></i>
                    <h5>Duration & Scoring</h5>
                    <p style="font-size:12px; opacity:0.7;">Game timing, extra time, and point systems.</p>
                </div>
                <div class="chapter-card">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h5>Fouls & Misconduct</h5>
                    <p style="font-size:12px; opacity:0.7;">Yellow/Red card laws and disciplinary actions.</p>
                </div>
            </div>

            <!-- Amendments -->
            <div class="row mt-5 pt-5">
                <div class="col-md-7">
                    <div class="amendment-box">
                        <h4 class="mb-4" style="color:var(--rules-primary); font-weight:800;">LATEST AMENDMENTS</h4>
                        <ul style="list-style:none; padding:0;">
                            <li class="mb-3" style="font-size:14px; display:flex; gap:15px;">
                                <i class="fas fa-check-circle" style="color:var(--rules-accent);"></i>
                                <span><strong>Rule 14.2:</strong> Substitution timing increased from 2 to 3 minutes for
                                    National trials.</span>
                            </li>
                            <li class="mb-3" style="font-size:14px; display:flex; gap:15px;">
                                <i class="fas fa-check-circle" style="color:var(--rules-accent);"></i>
                                <span><strong>Rule 8.1:</strong> Updated ball pressure specifications for high-altitude
                                    tournaments.</span>
                            </li>
                            <li style="font-size:14px; display:flex; gap:15px;">
                                <i class="fas fa-check-circle" style="color:var(--rules-accent);"></i>
                                <span><strong>Rule 21:</strong> New anti-doping guidelines integrated as per NADA 2024
                                    handbook.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div
                        style="background:var(--rules-primary); color:var(--white); padding:40px; border-radius:20px; height:100%;">
                        <h4 class="mb-3">TECHNICAL ENQUIRY</h4>
                        <p style="font-size:14px; opacity:0.8;" class="mb-4">For any clarifications regarding rule
                            interpretations or field setup, contact our technical committee.</p>
                        <a href="mailto:tech@legballindia.com"
                            style="color:var(--rules-accent); font-weight:700; text-decoration:none;"><i
                                class="fas fa-envelope mr-2"></i> tech@legballindia.com</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>