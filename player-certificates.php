<?php
/*
Template Name: Player Certificates
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="players corner.html">Players Corner</a> / <span>Player Certificates</span>
            </div>
            <h1 class="banner-title">Player <br>Certificates</h1>
        </div>
    </section>

    <!-- Verification Section -->
    <section class="verification-section">
        <div class="container">
            <div class="verification-box">
                <h2 class="section-title">VERIFY YOUR CERTIFICATE</h2>
                <p>Enter your <strong>Unique Certificate ID</strong> or <strong>Registration Number</strong> to verify the authenticity of your achievement and download the digital copy.</p>
                <div class="search-input-group">
                    <input type="text" class="search-input" placeholder="Enter Certificate ID (e.g. LFI/2026/1024)">
                    <button class="btn btn-orange" style="padding: 0 40px; border-radius:35px;">Verify Achievement</button>
                </div>
                <p class="mt-3" style="font-size:12px; color:var(--gray);">Verified certificates are valid for Sports Quota admissions and government recognitions.</p>
            </div>
        </div>
    </section>

    <!-- Certificate Types -->
    <section class="types-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">TYPES OF RECOGNITION</h2>
                <p>Official certificates issued by the Legball Federation of India to successful athletes.</p>
            </div>

            <div class="cert-grid">
                <div class="cert-card">
                    <div class="cert-badge">National</div>
                    <i class="fas fa-trophy cert-icon"></i>
                    <h3>Championship Merit</h3>
                    <p>Awarded to winners and participants of National Level Championships in various age groups.</p>
                </div>
                <div class="cert-card">
                    <div class="cert-badge">Elite</div>
                    <i class="fas fa-star cert-icon"></i>
                    <h3>Player License</h3>
                    <p>Mandatory digital ID card and certification for all registered players competing in official events.</p>
                </div>
                <div class="cert-card">
                    <div class="cert-badge">Regional</div>
                    <i class="fas fa-medal cert-icon"></i>
                    <h3>State/Zonal Merit</h3>
                    <p>Issued by affiliated state units for excellence in regional and inter-district championships.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Features -->
    <section class="security-section section-padding">
        <div class="container">
            <div class="security-grid">
                <div class="security-content">
                    <h2 class="section-title text-left" style="color:var(--white);">DIGITAL SECURITY FEATURES</h2>
                    <p class="mb-4">To prevent forgery and ensure institutional credibility, every LFI certificate is equipped with multiple layers of verification.</p>
                    
                    <div class="security-item">
                        <i class="fas fa-qrcode"></i>
                        <div>
                            <h4>Smart QR Code</h4>
                            <p>Instant verification via mobile scanner linking directly to the official LFI database.</p>
                        </div>
                    </div>
                    <div class="security-item">
                        <i class="fas fa-signature"></i>
                        <div>
                            <h4>Digital Signature</h4>
                            <p>Encrypted digital authentication from the Secretary General and Technical Director.</p>
                        </div>
                    </div>
                    <div class="security-item">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h4>Holographic ID</h4>
                            <p>Unique serial numbering and watermarking for physical certificate copies.</p>
                        </div>
                    </div>
                </div>
                <div class="security-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6person.jpg" alt="Certificate Preview">
                    <p class="mt-3" style="font-size:12px; opacity:0.7;">Sample LFI Digital Certificate Preview</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Claims & Support -->
    <section class="support-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">CERTIFICATE NOT FOUND?</h2>
                <p class="mb-4">If your certificate is missing or contains incorrect details, please reach out to the technical cell.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="contact.html" class="btn btn-primary" style="padding:15px 40px;">Raise a Ticket</a>
                    <a href="#" class="btn btn-orange" style="padding:15px 40px;">Download Correction Form</a>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>