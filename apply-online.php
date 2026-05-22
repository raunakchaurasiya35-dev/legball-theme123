<?php
/*
Template Name: Apply Online
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="membership.html">Membership</a> / <span>Apply Online</span>
            </div>
            <h1 class="banner-title">Apply <br>Online</h1>
        </div>
    </section>

    <!-- Application Form Section -->
    <section class="apply-section section-padding">
        <div class="container">
            <div class="apply-container">
                <div class="form-main">
                    <div class="step-tracker">
                        <div class="step active">1</div>
                        <div class="step">2</div>
                        <div class="step">3</div>
                        <div class="step">4</div>
                    </div>

                    <h2 class="mb-5" style="color:var(--apply-primary);">Membership Application</h2>

                    <form action="#">
                        <!-- Step 1: Unit Details -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label class="input-label">Application For</label>
                                    <select class="apply-input">
                                        <option>State Affiliation</option>
                                        <option>District Affiliation</option>
                                        <option>Institutional Membership</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label class="input-label">Name of Entity / Association</label>
                                    <input type="text" class="apply-input" placeholder="e.g. Haryana Legball Association">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <label class="input-label">Registration No. (Society Act)</label>
                                    <input type="text" class="apply-input" placeholder="Enter formal registration number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label class="input-label">Secretary Full Name</label>
                                    <input type="text" class="apply-input" placeholder="Secretary Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label class="input-label">Contact Number</label>
                                    <input type="text" class="apply-input" placeholder="+91 XXXXX XXXXX">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <label class="input-label">Registered Office Address</label>
                                    <textarea class="apply-input" rows="4" placeholder="Full postal address with pincode"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-wrap mb-4">
                            <input type="checkbox">
                            <span>I hereby declare that all provided information is accurate as per official records.</span>
                        </div>

                        <button type="submit" class="btn" style="background:var(--apply-primary); color:var(--white); padding:15px 40px; font-weight:700; border:none; width:100%; border-radius:12px;">Save & Proceed to Document Upload</button>
                    </form>
                </div>

                <div class="form-sidebar">
                    <h4 class="mb-4">Required Documents</h4>
                    <p style="font-size:13px; opacity:0.8;" class="mb-4">Keep scanned PDF copies ready for the next step:</p>
                    
                    <ul class="sidebar-list">
                        <li><i class="fas fa-file-pdf"></i> Society Registration Certificate</li>
                        <li><i class="fas fa-file-pdf"></i> Association Bye-Laws</li>
                        <li><i class="fas fa-file-pdf"></i> List of Office Bearers</li>
                        <li><i class="fas fa-file-pdf"></i> Last 3 Years Audit Report</li>
                        <li><i class="fas fa-file-pdf"></i> Affiliation NOC (for Districts)</li>
                        <li><i class="fas fa-file-pdf"></i> Passport Size Photo of Secretary</li>
                    </ul>

                    <div class="mt-5 p-4" style="background:rgba(255,255,255,0.1); border-radius:20px;">
                        <h6 class="mb-2"><i class="fas fa-headset mr-2"></i> Technical Help</h6>
                        <p style="font-size:12px; opacity:0.7;">Facing issues? Contact our digital support team at support@legballindia.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>