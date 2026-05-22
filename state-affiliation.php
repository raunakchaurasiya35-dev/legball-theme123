<?php
/*
Template Name: State Affiliation
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="membership.html">Membership</a> / <span>State Affiliation</span>
            </div>
            <h1 class="banner-title">State <br>Affiliation</h1>
        </div>
    </section>

    <!-- Affiliation Tiers -->
    <section class="tiers-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">AFFILIATION CATEGORIES</h2>
                <p>The LFI offers three levels of affiliation for state and union territory units.</p>
            </div>
            <div class="tiers-grid">
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-award"></i></div>
                    <h3>Permanent Unit</h3>
                    <p>Full voting rights and eligible to host National Championships. Granted after 3 years of provisional status.</p>
                </div>
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Provisional Unit</h3>
                    <p>New state units recognized by the LFI for development. Entitled to participate in all national events.</p>
                </div>
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Associate Member</h3>
                    <p>Institutional members or newly forming units without a fully registered state society.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap & Documents -->
    <section class="roadmap-section section-padding" style="background:#fdf5f7;">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; gap:60px;" class="main-split">
                <div class="roadmap-box">
                    <h2 class="mb-5">AFFILIATION ROADMAP</h2>
                    <div class="roadmap-item">
                        <div class="roadmap-dot">1</div>
                        <div>
                            <h4>Application Submission</h4>
                            <p>Submit formal expression of interest along with state society registration.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot">2</div>
                        <div>
                            <h4>Technical Inspection</h4>
                            <p>LFI delegates visit the state to verify infrastructure and player base.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot">3</div>
                        <div>
                            <h4>Provisional Approval</h4>
                            <p>Granted by the Executive Committee for a period of 24-36 months.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot">4</div>
                        <div>
                            <h4>Permanent Affiliation</h4>
                            <p>Final recognition after consistent performance in national tournaments.</p>
                        </div>
                    </div>
                </div>

                <div class="docs-box">
                    <h2 class="mb-5">DOCUMENTATION CHECKLIST</h2>
                    <div class="doc-grid">
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>Society Registration Certificate</span>
                        </div>
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>State Unit Constitution (Bye-Laws)</span>
                        </div>
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>List of Executive Committee</span>
                        </div>
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>District Affiliation Records</span>
                        </div>
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>Audit Report (Last 2 Years)</span>
                        </div>
                        <div class="doc-item">
                            <i class="fas fa-file-pdf"></i>
                            <span>Affiliation Fee Payment Proof</span>
                        </div>
                    </div>
                    <div class="mt-5 p-4" style="background:var(--white); border-radius:20px; border-left:5px solid var(--aff-burgundy);">
                        <h5>Need Assistance?</h5>
                        <p style="font-size:14px; opacity:0.8;">Download the official 'State Affiliation Guidelines' from our downloads section for detailed templates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Section -->
    <section class="apply-section section-padding">
        <div class="container">
            <div class="apply-box">
                <div class="row" style="display:grid; grid-template-columns: 1fr 1.5fr; gap:60px; align-items:center;" class="main-split">
                    <div class="apply-intro">
                        <h2>START YOUR AFFILIATION</h2>
                        <p class="mb-4" style="opacity:0.8;">Is your state ready to join the Legball revolution? Fill out the enquiry form and our General Secretary's office will get in touch.</p>
                        <ul style="list-style:none; padding:0;">
                            <li class="mb-2"><i class="fas fa-check-circle" style="color:var(--aff-gold);"></i> Direct National Entry</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color:var(--aff-gold);"></i> Technical Support from LFI</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color:var(--aff-gold);"></i> Official Recognition</li>
                        </ul>
                    </div>
                    <div class="apply-form">
                        <form action="#">
                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                                <input type="text" class="aff-form-control" placeholder="State/UT Name">
                                <input type="text" class="aff-form-control" placeholder="Secretary Name">
                            </div>
                            <input type="email" class="aff-form-control" placeholder="Official Email Address">
                            <input type="text" class="aff-form-control" placeholder="Contact Number">
                            <textarea class="aff-form-control" rows="4" placeholder="Briefly describe the current Legball activities in your state..."></textarea>
                            <button type="submit" class="btn" style="background:var(--aff-gold); color:var(--aff-burgundy); padding:15px 40px; font-weight:800; border:none; width:100%; border-radius:10px;">Submit Affiliation Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>