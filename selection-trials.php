<?php
/*
Template Name: Selection Trials
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="players corner.html">Players Corner</a> / <span>Selection Trials</span>
            </div>
            <h1 class="banner-title">Selection <br>Trials</h1>
        </div>
    </section>

    <!-- Selection Pathway -->
    <section class="pathway-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">THE SELECTION JOURNEY</h2>
                <p>The structured path to becoming a National Level Legball Athlete.</p>
            </div>
            <div class="pathway-grid">
                <div class="pathway-item">
                    <div class="pathway-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>District</h4>
                    <p>Local screening & talent identification.</p>
                </div>
                <div class="pathway-item">
                    <div class="pathway-icon"><i class="fas fa-flag"></i></div>
                    <h4>State</h4>
                    <p>State unit trials for regional teams.</p>
                </div>
                <div class="pathway-item">
                    <div class="pathway-icon"><i class="fas fa-university"></i></div>
                    <h4>National</h4>
                    <p>Selection for National Championships.</p>
                </div>
                <div class="pathway-item">
                    <div class="pathway-icon"><i class="fas fa-star"></i></div>
                    <h4>Team India</h4>
                    <p>Elite camp for International events.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Announcements -->
    <section class="announcements-section section-padding" style="background:#fdfdfd;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">UPCOMING TRIALS</h2>
                <p>Register now for scheduled open trials across India.</p>
            </div>

            <!-- Trial 1 -->
            <div class="trial-card">
                <div class="trial-date">
                    <span>15</span>
                    <p>MAY 2026</p>
                </div>
                <div class="trial-info">
                    <span class="trial-status status-active">Registration Open</span>
                    <h3>Junior National Selection (Maharashtra)</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Balewadi Sports Complex, Pune | <i class="fas fa-clock"></i> 08:00 AM Onwards</p>
                    <p class="mt-2">Age Group: Under-17 Boys & Girls. Selection for upcoming Junior Nationals in Haryana.</p>
                </div>
                <div class="trial-action">
                    <a href="player-registration.html" class="btn btn-orange">Apply Now</a>
                </div>
            </div>

            <!-- Trial 2 -->
            <div class="trial-card">
                <div class="trial-date">
                    <span>22</span>
                    <p>JUNE 2026</p>
                </div>
                <div class="trial-info">
                    <span class="trial-status status-upcoming">Upcoming</span>
                    <h3>Senior Open Trials (Delhi/NCR)</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Major Dhyan Chand Stadium, Delhi | <i class="fas fa-clock"></i> 09:00 AM Onwards</p>
                    <p class="mt-2">Open trials for selection into the North Zone elite training squad.</p>
                </div>
                <div class="trial-action">
                    <button class="btn btn-primary" disabled>Opening Soon</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility & Assessment -->
    <section class="criteria-section section-padding">
        <div class="container">
            <div class="row" style="display:grid; grid-template-columns: repeat(2, 1fr); gap:40px;">
                <div class="criteria-card">
                    <h3 class="mb-4"><i class="fas fa-user-check" style="color:var(--orange);"></i> Eligibility Criteria</h3>
                    <ul class="criteria-list">
                        <li><i class="fas fa-check-circle"></i> Must be a registered player with LFI license.</li>
                        <li><i class="fas fa-check-circle"></i> Age proof as per school certificate or Aadhar Card.</li>
                        <li><i class="fas fa-check-circle"></i> Medical fitness certificate from a govt doctor.</li>
                        <li><i class="fas fa-check-circle"></i> No disciplinary action pending from any state unit.</li>
                    </ul>
                </div>
                <div class="criteria-card">
                    <h3 class="mb-4"><i class="fas fa-clipboard-list" style="color:var(--orange);"></i> Assessment Matrix</h3>
                    <ul class="criteria-list">
                        <li><i class="fas fa-bullseye"></i> <strong>Technical Skills:</strong> Ball control, striking power.</li>
                        <li><i class="fas fa-running"></i> <strong>Physical Fitness:</strong> 30m sprint, shuttle run, agility.</li>
                        <li><i class="fas fa-brain"></i> <strong>Tactical Play:</strong> Field positioning, teamwork.</li>
                        <li><i class="fas fa-heartbeat"></i> <strong>Endurance:</strong> Stamina during 20-min match play.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>