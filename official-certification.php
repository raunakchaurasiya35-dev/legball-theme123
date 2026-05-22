<?php
/*
Template Name: Official Certification
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="officials.html">Officials</a> / <span>Certification</span>
            </div>
            <h1 class="banner-title">Official <br>Certification</h1>
        </div>
    </section>

    <!-- Verification Portal -->
    <section class="verify-section">
        <div class="container">
            <div class="verify-portal">
                <div class="text-center mb-4">
                    <h3>Verify Official Certificate</h3>
                    <p>Enter the unique certificate ID to verify the authenticity of an LFI official.</p>
                </div>
                <div class="verify-input-group">
                    <input type="text" class="verify-input" placeholder="e.g. LFI-REF-2026-0045">
                    <button class="btn btn-primary" style="padding:15px 40px; background:var(--cert-indigo); border:none; border-radius:12px;">Verify Authenticity</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognition Types -->
    <section class="recognition-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">CERTIFICATION CATEGORIES</h2>
                <p>The LFI issues certificates across four major professional domains.</p>
            </div>
            <div class="cert-grid">
                <div class="cert-card">
                    <div class="cert-icon"><i class="fas fa-whistle"></i></div>
                    <h4>Referee Panel</h4>
                    <p>Certification for match officials who have passed the National/State Referee Clinic.</p>
                </div>
                <div class="cert-card">
                    <div class="cert-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Coaching License</h4>
                    <p>Formal recognition of coaching competency from Level 1 to High Performance Elite.</p>
                </div>
                <div class="cert-card">
                    <div class="cert-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Technical Delegate</h4>
                    <p>Certification for Match Commissioners and Jury members governing tournaments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Features -->
    <section class="security-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="security-box">
                <div class="security-intro">
                    <h2 class="mb-4">AUTHENTICITY & SECURITY</h2>
                    <p style="opacity:0.8;">Every official LFI certificate is equipped with multiple layers of security to prevent fraud and maintain the integrity of our professional ecosystem.</p>
                </div>
                <div class="security-features-grid" style="display:grid; grid-template-columns: 1fr 1fr; gap:30px;">
                    <div class="security-feature">
                        <i class="fas fa-qrcode"></i>
                        <div>
                            <h5>QR Code Scanning</h5>
                            <p style="font-size:12px; opacity:0.7;">Instant verification via mobile scanning linked to our central database.</p>
                        </div>
                    </div>
                    <div class="security-feature">
                        <i class="fas fa-stamp"></i>
                        <div>
                            <h5>Digital Signature</h5>
                            <p style="font-size:12px; opacity:0.7;">Cryptographically signed by the General Secretary and President.</p>
                        </div>
                    </div>
                    <div class="security-feature">
                        <i class="fas fa-fingerprint"></i>
                        <div>
                            <h5>Unique ID</h5>
                            <p style="font-size:12px; opacity:0.7;">A non-repeating identifier tracked for life-time records.</p>
                        </div>
                    </div>
                    <div class="security-feature">
                        <i class="fas fa-file-contract"></i>
                        <div>
                            <h5>Embossed Seal</h5>
                            <p style="font-size:12px; opacity:0.7;">A physical watermark for offline paper-copy verification.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; gap:60px; align-items:center;">
                <div class="benefits-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/malayparan.jpg.jpeg" alt="Official Recognition" style="width:100%; border-radius:30px; box-shadow:var(--card-shadow);">
                </div>
                <div class="benefits-content">
                    <h2 class="mb-4">WHY GET CERTIFIED?</h2>
                    <ul class="ethics-list" style="list-style:none; padding:0;">
                        <li style="margin-bottom:20px; display:flex; gap:15px;"><i class="fas fa-award" style="color:var(--cert-accent);"></i> <strong>Government Recognition:</strong> Eligible for sports quota in central/state government jobs.</li>
                        <li style="margin-bottom:20px; display:flex; gap:15px;"><i class="fas fa-globe" style="color:var(--cert-accent);"></i> <strong>Global Validity:</strong> Recognized by international Legball associations.</li>
                        <li style="margin-bottom:20px; display:flex; gap:15px;"><i class="fas fa-chart-line" style="color:var(--cert-accent);"></i> <strong>Career Growth:</strong> Prerequisite for higher-level national and international panels.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>