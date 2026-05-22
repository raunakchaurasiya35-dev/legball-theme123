<?php
/*
Template Name: Player Registration
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="players corner.html">Players Corner</a> / <span>Player Registration</span>
            </div>
            <h1 class="banner-title">Player <br>Registration</h1>
        </div>
    </section>

    <!-- Registration Content -->
    <section class="form-section section-padding">
        <div class="container">
            
            <div class="instruction-box">
                <h4><i class="fas fa-info-circle"></i> Mandatory Instructions</h4>
                <p>Please ensure all details match your Aadhar Card and School/College records. Incorrect information may lead to the cancellation of your player license. The registration fee is non-refundable.</p>
            </div>

            <div class="registration-container">
                <!-- Sidebar -->
                <div class="form-sidebar">
                    <div class="step-item active">
                        <div class="step-num">1</div>
                        <div>
                            <h5>Personal Info</h5>
                            <p style="font-size:12px; opacity:0.7;">Basic details & Identity</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">2</div>
                        <div>
                            <h5>Educational</h5>
                            <p style="font-size:12px; opacity:0.7;">School/College details</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">3</div>
                        <div>
                            <h5>Documents</h5>
                            <p style="font-size:12px; opacity:0.7;">Upload Photos & ID</p>
                        </div>
                    </div>
                </div>

                <!-- Form Main -->
                <div class="form-main">
                    <form action="#">
                        <h2 style="color:var(--primary); margin-bottom:30px;">Registration Form</h2>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Full Name (as per Aadhar)</label>
                                <input type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" placeholder="Enter father's name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control">
                                    <option>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="tel" class="form-control" placeholder="+91 XXXXX XXXXX">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Full Address</label>
                            <textarea class="form-control" rows="3" placeholder="Enter your residential address"></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control">
                                    <option>Select State</option>
                                    <option>Maharashtra</option>
                                    <option>Haryana</option>
                                    <option>Delhi</option>
                                    <option>Uttar Pradesh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" class="form-control" placeholder="Enter district">
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label>Upload Passport Size Photo</label>
                            <div class="upload-box">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Click to upload or drag and drop</p>
                                <p style="font-size:12px; color:var(--gray);">JPG, PNG (Max 2MB)</p>
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-orange" style="padding: 15px 40px; width: 100%; font-size: 18px;">Proceed to Next Step</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>