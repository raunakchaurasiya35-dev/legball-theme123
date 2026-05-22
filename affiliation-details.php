<?php
/*
Template Name: Affiliation Details
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="about.html">About Us</a> / <span>Affiliation Details</span>
            </div>
            <h1 class="banner-title">Affiliation <br>& Recognition</h1>
        </div>
    </section>

    <!-- Institutional Recognition -->
    <section class="recognition-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">INSTITUTIONAL RECOGNITION</h2>
                <p>LFI is recognized by leading national and international sporting authorities.</p>
            </div>
            
            <div class="recognition-grid">
                <div class="rec-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="ILF" class="rec-img">
                    <div class="rec-content">
                        <h4>International Legball Federation</h4>
                        <p>LFI is the sole representative and affiliated member from India to the International Legball Federation (ILF).</p>
                    </div>
                </div>
                <div class="rec-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kheloindia2.png" alt="Khelo India" class="rec-img">
                    <div class="rec-content">
                        <h4>Khelo India Program</h4>
                        <p>Active participation and recognition under the Khelo India initiative for grassroots sports development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliation Tiers -->
    <section class="tier-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">AFFILIATION TIERS</h2>
                <p style="margin-bottom: 20px">We follow a structured affiliation process at multiple levels of sporting governance.</p>
            </div>
            
            <div class="tier-grid">
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-globe"></i></div>
                    <h3>International</h3>
                    <p>Affiliated to the International Legball Federation for global participation and standardization of rules.</p>
                </div>
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-landmark"></i></div>
                    <h3>National</h3>
                    <p>Recognized as the apex governing body for Legball in India by various national sports councils.</p>
                </div>
                <div class="tier-card">
                    <div class="tier-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h3>State & UT</h3>
                    <p>Grants affiliation to state associations that follow LFI's constitutional framework and governance standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color:var(--white);">BENEFITS OF AFFILIATION</h2>
                <p style="margin-bottom: 20px">Joining the LFI network provides exclusive advantages for associations and athletes.</p>
            </div>
            
            <div class="benefits-list">
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>National Participation</h5>
                        <p>Eligibility to participate in National Championships and Selection Trials for Team India.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Official Certification</h5>
                        <p>Right to issue LFI-recognized certificates for players, coaches, and technical officials.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Technical Support</h5>
                        <p>Access to standardized rulebooks, equipment guidelines, and training from master coaches.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Event Hosting</h5>
                        <p>Opportunity to bid for hosting National and Zonal tournaments with LFI support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>