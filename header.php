<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legball Federation of India</title>
    <?php wp_head(); ?>
</head>
<body>



    <!-- Header / Logo Area -->
    <header class="header">
        <div class="container">
            <div class="header-container">
            <div class="logo-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="LFI Logo" class="logo-img">
                <div class="logo-text">
                    <h1>Legball Federation of India</h1>
                    <p>Governing Body of Legball in India</p>
                </div>
            </div>
            <div class="header-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kheloindia2.png" alt="Khelo India" class="gov-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fit india2.png" alt="Fit India" class="gov-logo">
            </div>
        </div>
    </div>
</header>

    <!-- Navigation -->
    <nav class="main-nav">
        <div class="container nav-container">
            <button class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="<?php echo home_url(); ?>" class="active"><i class="fas fa-home"></i> HOME</a></li>
                <li class="has-drop"><a href="<?php echo home_url('/about/'); ?>">ABOUT US <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/about-federation/'); ?>">About Federation</a></li>
                        <li><a href="<?php echo home_url('/vision-mission/'); ?>">Vision & Mission</a></li>
                        <li><a href="<?php echo home_url('/office-bearers/'); ?>">Office Bearers</a></li>
                        <li><a href="<?php echo home_url('/executive-committee/'); ?>">Executive Committee</a></li>
                        <li><a href="<?php echo home_url('/state-units/'); ?>">State Units</a></li>
                        <li><a href="<?php echo home_url('/affiliation-details/'); ?>">Affiliation Details</a></li>
                        <li><a href="<?php echo home_url('/constitution-rules/'); ?>">Constitution / Rules</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/tournaments/'); ?>">TOURNAMENTS <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/national-championship/'); ?>">National Championship</a></li>
                        <li><a href="<?php echo home_url('/state-championship/'); ?>">State Championship</a></li>
                        <li><a href="<?php echo home_url('/district-championship/'); ?>">District Championship</a></li>
                        <li><a href="<?php echo home_url('/school-games/'); ?>">School Games</a></li>
                        <li><a href="<?php echo home_url('/university-games/'); ?>">University Games</a></li>
                        <li><a href="<?php echo home_url('/calendar-events/'); ?>">Calendar of Events</a></li>
                        <li><a href="<?php echo home_url('/tournament-results/'); ?>">Results</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/players-corner/'); ?>">PLAYERS CORNER <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/player-registration/'); ?>">Player Registration</a></li>
                        <li><a href="<?php echo home_url('/player-certificates/'); ?>">Player Certificates</a></li>
                        <li><a href="<?php echo home_url('/selection-trials/'); ?>">Selection Trials</a></li>
                        <li><a href="<?php echo home_url('/player-achievements/'); ?>">Achievements</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/officials/'); ?>">OFFICIALS <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/referee-registration/'); ?>">Referee Registration</a></li>
                        <li><a href="<?php echo home_url('/coach-registration/'); ?>">Coach Registration</a></li>
                        <li><a href="<?php echo home_url('/technical-officials/'); ?>">Technical Officials</a></li>
                        <li><a href="<?php echo home_url('/training-programs/'); ?>">Training Programs</a></li>
                        <li><a href="<?php echo home_url('/official-certification/'); ?>">Certification</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/membership/'); ?>">MEMBERSHIP / AFFILIATION <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/state-affiliation/'); ?>">State Affiliation</a></li>
                        <li><a href="<?php echo home_url('/district-affiliation/'); ?>">District Affiliation</a></li>
                        <li><a href="<?php echo home_url('/membership-fees/'); ?>">Membership Fees</a></li>
                        <li><a href="<?php echo home_url('/apply-online/'); ?>">Apply Online</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/downloads/'); ?>">DOWNLOADS <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/registration-forms/'); ?>">Registration Forms</a></li>
                        <li><a href="<?php echo home_url('/rules-book/'); ?>">Rules Book</a></li>
                        <li><a href="#">Tournament Forms</a></li>
                        <li><a href="<?php echo home_url('/certificates-format/'); ?>">Certificates Format</a></li>
                        <li><a href="<?php echo home_url('/circulars-notices/'); ?>">Circulars & Notices</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/gallery/'); ?>">GALLERY <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/photo-gallery/'); ?>">Photo Gallery</a></li>
                        <li><a href="<?php echo home_url('/video-gallery/'); ?>">Video Gallery</a></li>
                        <li><a href="<?php echo home_url('/media-coverage/'); ?>">Media Coverage</a></li>
                    </ul>
                </li>
                <li class="has-drop"><a href="<?php echo home_url('/contact/'); ?>">CONTACT US <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo home_url('/office-address/'); ?>">Office Address</a></li>
                        <li><a href="<?php echo home_url('/contact-numbers/'); ?>">Contact Numbers</a></li>
                        <li><a href="<?php echo home_url('/contact-emails/'); ?>">Email</a></li>
                        <li><a href="<?php echo home_url('/google-map/'); ?>">Google Map</a></li>
                        <li><a href="<?php echo home_url('/feedback-form/'); ?>">Feedback Form</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>