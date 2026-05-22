<?php
/*
Template Name: Membership Fees
*/
get_header(); ?>


    <!-- Inner Page Banner -->
    <section class="inner-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <a href="membership.html">Membership</a> / <span>Membership Fees</span>
            </div>
            <h1 class="banner-title">Membership <br>Fees</h1>
        </div>
    </section>

    <!-- Fee Structure -->
    <section class="fee-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">FEE STRUCTURE (2026-27)</h2>
                <p>Uniform fee standards for all state and district units across India.</p>
            </div>
            
            <div class="fee-table-container">
                <table class="fee-table">
                    <thead>
                        <tr>
                            <th>Affiliation Category</th>
                            <th>New Registration</th>
                            <th>Annual Renewal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>State Association (Full Unit)</strong></td>
                            <td><span class="amount-tag">₹ 25,000</span></td>
                            <td><span class="amount-tag">₹ 10,000</span></td>
                        </tr>
                        <tr>
                            <td><strong>Union Territory Unit</strong></td>
                            <td><span class="amount-tag">₹ 15,000</span></td>
                            <td><span class="amount-tag">₹ 5,000</span></td>
                        </tr>
                        <tr>
                            <td><strong>District Association</strong></td>
                            <td><span class="amount-tag">₹ 5,000</span></td>
                            <td><span class="amount-tag">₹ 2,000</span></td>
                        </tr>
                        <tr>
                            <td><strong>Institutional Member</strong></td>
                            <td><span class="amount-tag">₹ 50,000</span></td>
                            <td><span class="amount-tag">₹ 25,000</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 p-4" style="background:#fff9c4; border-radius:15px; border-left:5px solid #fbc02d; font-size:14px;">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <strong>Late Fee Notice:</strong> A 10% surcharge applies for renewals made after March 31st of every financial year.
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section section-padding" style="background:var(--fee-surface);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">WHAT YOUR FEES SUPPORT</h2>
                <p>LFI reinvests membership fees directly into the growth of Legball across India.</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Technical Governance</h5>
                        <p style="font-size:13px; opacity:0.7;">Supply of official rulebooks, technical delegate support for state tournaments.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Digital Infrastructure</h5>
                        <p style="font-size:13px; opacity:0.7;">Access to the centralized player registration portal and official ID card generation.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Governance Rights</h5>
                        <p style="font-size:13px; opacity:0.7;">Voting rights in the Annual General Body Meeting (AGM) for permanent units.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <h5>Event Support</h5>
                        <p style="font-size:13px; opacity:0.7;">Subsidized kits and certificates for recognized district/state championships.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Portal -->
    <section class="payment-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">PAYMENT MODES</h2>
                <p>Safe and secure official payment channels.</p>
            </div>
            <div class="payment-box">
                <div class="qr-placeholder">
                    <i class="fas fa-qrcode" style="font-size:100px; color:#ddd;"></i>
                </div>
                <div class="bank-details">
                    <h4 class="mb-3" style="color:var(--fee-slate);">Official Bank Details</h4>
                    <div class="detail-row"><span>Account Name:</span> <strong>Legball Federation of India</strong></div>
                    <div class="detail-row"><span>Bank Name:</span> <strong>HDFC Bank Ltd</strong></div>
                    <div class="detail-row"><span>Account Number:</span> <strong>XXXXXXXXXXXXX</strong></div>
                    <div class="detail-row"><span>IFSC Code:</span> <strong>HDFC000XXXX</strong></div>
                    <p class="mt-3" style="font-size:12px; opacity:0.6;">* Please email the transaction screenshot to accounts@legballindia.com after payment.</p>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>