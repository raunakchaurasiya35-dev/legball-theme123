<?php
/*
Template Name: District Affiliation
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="membership.html">Membership</a> / <span>District Affiliation</span>
            </div>
            <h1 class="banner-title">District <br>Affiliation</h1>
        </div>
    </section>

    <!-- Grassroots Mission -->
    <section class="mission-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">THE GRASSROOTS PILLAR</h2>
                <p>District units are the heartbeat of Legball development, identifying talent at the source.</p>
            </div>
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-search-location"></i></div>
                    <h4>Talent Discovery</h4>
                    <p>Organizing block and tehsil level trials to find hidden athletes for state/national pools.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-school"></i></div>
                    <h4>School Integration</h4>
                    <p>Partnering with local schools to include Legball in their weekly sports curriculum.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-trophy"></i></div>
                    <h4>District Cups</h4>
                    <p>Conducting annual district championships to keep local competition alive and vibrant.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Administrative Structure -->
    <section class="structure-section section-padding" style="background:#f9fdf9;">
        <div class="container">
            <div class="structure-box">
                <div class="row" style="display:grid; grid-template-columns: 1fr 2fr; gap:60px; align-items:center;" class="main-split">
                    <div class="structure-intro">
                        <h2 class="mb-4">MANDATORY STRUCTURE</h2>
                        <p style="opacity:0.8;">To be recognized, a district unit must have a formally elected body consisting of passionate sportspersons and administrators.</p>
                        <div class="mt-4 p-4" style="background:rgba(255,255,255,0.1); border-radius:20px;">
                            <i class="fas fa-info-circle mr-2"></i>
                            <span style="font-size:14px;">Minimum 7 executive members required for registration.</span>
                        </div>
                    </div>
                    <div class="admin-list">
                        <div class="admin-item"><i class="fas fa-user-tie"></i> President</div>
                        <div class="admin-item"><i class="fas fa-user-edit"></i> General Secretary</div>
                        <div class="admin-item"><i class="fas fa-wallet"></i> Treasurer</div>
                        <div class="admin-item"><i class="fas fa-user-shield"></i> Vice President</div>
                        <div class="admin-item"><i class="fas fa-users-cog"></i> Joint Secretary</div>
                        <div class="admin-item"><i class="fas fa-user-graduate"></i> Technical Director</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliation Roadmap -->
    <section class="roadmap-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">FORMATION JOURNEY</h2>
                <p>The path from a sports club to a recognized District Association.</p>
            </div>
            <div class="step-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h5>State Permission</h5>
                    <p style="font-size:13px; opacity:0.7;">Get No Objection Certificate (NOC) from your State Association.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h5>Registration</h5>
                    <p style="font-size:13px; opacity:0.7;">Register your unit as a society under the local registrar office.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h5>Infrastructure</h5>
                    <p style="font-size:13px; opacity:0.7;">Establish a designated office and identify 2+ playing grounds.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h5>Final Recognition</h5>
                    <p style="font-size:13px; opacity:0.7;">LFI & State Unit grant the official affiliation certificate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enquiry Section -->
    <section class="enquiry-section section-padding" style="background:var(--dist-surface);">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; gap:60px; align-items:center;" class="main-split">
                <div class="enquiry-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_banner.png" alt="District Sports" style="width:100%; border-radius:30px; box-shadow:var(--card-shadow);">
                </div>
                <div class="dist-form-box">
                    <h2 class="mb-4" style="color:var(--dist-emerald);">District Formation Enquiry</h2>
                    <form action="#">
                        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                            <input type="text" class="dist-input" placeholder="District Name">
                            <input type="text" class="dist-input" placeholder="State Name">
                        </div>
                        <input type="text" class="dist-input" placeholder="Your Full Name (Proposer)">
                        <input type="email" class="dist-input" placeholder="Email Address">
                        <input type="text" class="dist-input" placeholder="Contact Number">
                        <textarea class="dist-input" rows="4" placeholder="Briefly explain the current Legball scenario in your district..."></textarea>
                        <button type="submit" class="btn" style="background:var(--dist-emerald); color:var(--white); padding:15px 40px; font-weight:700; border:none; width:100%; border-radius:12px;">Initiate Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>