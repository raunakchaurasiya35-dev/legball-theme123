<?php
/*
Template Name: Feedback Form
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="contact.html">Contact Us</a> / <span>Feedback Form</span>
            </div>
            <h1 class="banner-title">Your Voice <br>Matters</h1>
        </div>
    </section>

    <!-- Feedback Content -->
    <section class="feedback-section section-padding">
        <div class="container">
            
            <div class="feedback-container-box">
                <!-- Feedback Form -->
                <div class="feedback-form-card">
                    <form action="#">
                        <div class="row">
                            <div class="form-group" style="width:100%;">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row" style="display:flex; gap:20px;">
                            <div class="form-group" style="flex:1;">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="example@mail.com" required>
                            </div>
                            <div class="form-group" style="flex:1;">
                                <label>Mobile Number</label>
                                <input type="tel" class="form-control" placeholder="+91 xxxxx xxxxx" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Feedback Category</label>
                            <select class="form-control">
                                <option>General Suggestion</option>
                                <option>Tournament Feedback</option>
                                <option>Technical Query</option>
                                <option>Player Grievance</option>
                                <option>Website Experience</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea class="form-control" placeholder="Write your feedback here..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>How would you rate your experience?</label>
                            <div class="rating-box">
                                <button type="button" class="rating-btn">😠</button>
                                <button type="button" class="rating-btn">😐</button>
                                <button type="button" class="rating-btn active">😊</button>
                                <button type="button" class="rating-btn">😍</button>
                            </div>
                        </div>

                        <button type="submit" class="submit-btn">Submit Feedback</button>
                    </form>
                </div>

                <!-- Sidebar Info -->
                <div class="feedback-sidebar">
                    <div class="feature-info">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-clock"></i></div>
                            <div class="feature-text">
                                <h4>24-Hour Review</h4>
                                <p>We aim to review and respond to all critical feedback within one business day.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-shield-heart"></i></div>
                            <div class="feature-text">
                                <h4>Privacy Guaranteed</h4>
                                <p>Your feedback is confidential and used only for internal service improvements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                            <div class="feature-text">
                                <h4>Innovation Driven</h4>
                                <p>Most of our new website features come from user suggestions. Keep them coming!</p>
                            </div>
                        </div>
                    </div>

                    <div class="support-banner">
                        <h3>Need Immediate Help?</h3>
                        <p>For urgent technical issues during registration, please contact our helpline.</p>
                        <a href="contact-numbers.html" class="btn" style="background:#fff; color:#0f172a; padding:10px 20px; border-radius:10px; font-weight:700; text-decoration:none; display:inline-block;">Call Helpline</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
<?php get_footer(); ?>