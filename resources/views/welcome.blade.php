<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dementia Support Alliance</title>
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="icon" href="images/dementia logo.png" type="image/png">
</head>
<body>
    <!-- Header -->
       <div class="page-wrapper">
    <header class="header">
        <div class="container">
            <div class="header-content">
                 <div class="nav-logo">
                    <img src="{{ asset('frontend/images/dementia logo.png') }}" alt="Dementia Support Alliance Logo" class="logo-img">
                    <span class="logo-text">Dementia Support Alliance</span>
                </div>
                
                <nav class="desktop-nav">
                    <ul>
                        <li><a href="#about" class="nav-link">About</a></li>
                        <li><a href="#campaigns" class="nav-link">Campaigns</a></li>
                        <li><a href="#donation" class="nav-link">Donation</a></li>
                        <li><a href="#get-involved" class="nav-link">Get Involved</a></li>
                        <li><a href="#news" class="nav-link">News/Blog</a></li>
                        <li><a href="#contact" class="nav-link">Contacts</a></li>
                    </ul>
                </nav>
                
    <script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    document.getElementById('donationForm').addEventListener('submit', function (e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_xxxxxxxxxxxxxx', // Replace with your PUBLIC key
            email: document.getElementById('email').value,
            amount: document.getElementById('amount').value * 100, // in kobo
            callback: function (response) {
                alert('Payment successful. Ref: ' + response.reference);
                // Optionally send response.reference to your server to verify
            },
            onClose: function () {
                alert('Transaction canceled');
            }
        });
        handler.openIframe();
    });
</script>

            
            <!-- Mobile Navigation -->
            <div class="mobile-nav">
                <ul>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#campaigns" class="nav-link">Campaigns</a></li>
                    <li><a href="#donation" class="nav-link">Donation</a></li>
                    <li><a href="#get-involved" class="nav-link">Get Involved</a></li>
                    <li><a href="#news" class="nav-link">News/Blog</a></li>
                    <li><a href="#contact" class="nav-link">Contacts</a></li>
                    <li><a href="#donation" class="donate-button mobile-donate">DONATE</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="section">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-image">
                <div class="hero-overlay">
                    <img src="{{ asset('frontend/images/about.jpg') }}"></div>
                </div>
              <script src="https://js.paystack.co/v1/inline.js"></script>

<div class="hero-content">
    <h1>Dementia Support Alliance</h1>
    <p>Providing compassionate care, support, and resources for individuals with dementia and their families.</p>
    
    <div class="hero-buttons">
        <form method="POST" action="{{ route('paystack.pay') }}">
            @csrf
            <input type="hidden" name="email" value="donor@example.com"> <!-- Optional: Use authenticated user's email -->
            <input type="hidden" name="amount" value="5000"> <!-- Amount in Naira -->
 <a href="https://docs.google.com/forms/d/e/1FAIpQLScBnnS5O7o7pfhAthI4ChN1_Fl2iWPpbGdhQN1Nyw3re0YJXw/viewform?usp=header" target="_blank" class="primary-button">
    Donate Now
</a>        </form>


        <a href="#get-involved" class="secondary-button">Get Involved</a>
    </div>
</div>

        <!-- Charity Info Section -->
        <div class="charity-info">
            <div class="container">
                <div class="info-card">
                    <div class="info-content">
                        <h2>Understanding Dementia</h2>
                        <p>Dementia is not a single disease, but a general term for a decline in mental ability severe enough to interfere with daily life. It affects memory, thinking, orientation, comprehension, learning capacity, language, and judgment.</p>
                <p>Alzheimer's disease accounts for 60-80% of dementia cases. Other types include Vascular dementia, Lewy body dementia, and Frontotemporal dementia.</p>
                <p>While dementia mainly affects older adults, it is not a normal part of aging. Early diagnosis and proper support can significally improve quality of life.</p>
                    </div>
                    <div class="stats-grid">
                        <div class="stat-card">
                            <h3>20+</h3>
                            <p>Medical Missions</p>
                        </div>
                        <div class="stat-card">
                            <h3>1K+</h3>
                            <p>Lives Impacted</p>
                        </div>
                        <div class="stat-card">
                            <h3>10+</h3>
                            <p>Volunteers</p>
                        </div>
                        <div class="stat-card">
                            <h3>7+</h3>
                            <p>Countries Served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h1 class="page-title">About Us</h1>
            
            <div class="about-intro">
                <div class="about-image">
                    <img src="{{ asset('frontend/images/medical volunteers.jpg') }}" alt="Medical volunteers helping in a community">
                </div>
                <div class="about-text">
                    <h2>Our Mission</h2>
                    <p>To empower individuals,families,and communities affected by dementia through Compassion, education, and advocacy. We recognize dementia not just as a medical condition,but as a life-changing journey that affects the person,their loved ones, and entire community.</p>
                    <p>We are dedicated to creating a world where people with dementia are treated with Respect,Compassion,and dignity, and where no one faces this condition alone.</p>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="tabs-container">
                <div class="tabs">
                    <button class="tab-button active" data-tab="approach">Our Approach</button>
                    <button class="tab-button" data-tab="impact">Our Impact</button>
                    <button class="tab-button" data-tab="team">Our Team</button>
                </div>
                
                <div class="tab-content active" id="approach">
                    <h3>Holistic Healthcare Approach</h3>
                    <p>Our approach is holistic, Whereby healthcare approach is guided by one principle: TREAT THE PERSON, NOT JUST THE CONDITION.</p>
                    <p>Dementia care mus be inclusive,humane,and multidimensional by combining medical treatment with emotional support,community,integration,and caregiver empowerment, We strive to improve not only lifespan-but quality of life for everyone affected by dementia, Together we can build a future where care is not fragmented,but whole-and every person with dementia is seen,supported,and valued. </p>
                </div>
                
                <div class="tab-content" id="impact">
                    <h3>Our Achievements</h3>
                    <ul class="achievement-list">
                        <li>
                            <strong>Innovation and Technology in Dementia Care:</strong> Introduced a pilot mobile app offering memory aids,reminders,and emergency contacts for early-stage dementia patients. 
                        </li>
                        <li>
                            <strong>Improving Access to Healthcare Services:</strong> We have partnered with 15 local clinics and hospitals to offer free or subsidized dementia screenings.
                        </li>
                        <li>
                            <strong>Empowering Caregivers:</strong> Trained over 700 family members and community caregivers in dementia care,stress management,and communication strategies.
                        </li>
                        <li>
                            <strong>Raising Awareness and Education:</strong> We reached over 2000 individuals through dementia awareness cmpaigns across schools,workplace, and community centers.
                        </li>
                    </ul>
                </div>
                
                <div class="tab-content" id="team">
                    <h3>Meet Our Team</h3>
                    <div class="team-grid">
                        <div class="team-member">
                            <div class="team-photo">
                                <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="Team member 1">
                            </div>
                            <h4>Dr. Jane Smith</h4>
                            <p>Medical Director</p>
                        </div>
                        <div class="team-member">
                            <div class="team-photo">
                                <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="Team member 2">
                            </div>
                            <h4>Dr. John Davis</h4>
                            <p>Operations Director</p>
                        </div>
                        <div class="team-member">
                            <div class="team-photo">
                                <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="Team member 3">
                            </div>
                            <h4>Sarah Johnson</h4>
                            <p>Community Outreach</p>
                        </div>
                    </div>
                    <div class="team-description">
                        <p>Our team consists of dedicated professionals from various fields including medicine, public health, logistics, and community development. Together, we work tirelessly to bring quality healthcare to those who need it most.</p>
                    </div>
                </div>
            </div>

            <div class="values-section">
                <h2>Our Values</h2>
                <div class="values-grid">
                    <div class="value-box">
                        <h3>Compassion</h3>
                        <p>We approach our work with empathy and understanding, recognizing the dignity of every individual we serve.</p>
                    </div>
                    <div class="value-box">
                        <h3>Sustainability</h3>
                        <p>We build solutions that last, empowering communities to maintain their own healthcare systems.</p>
                    </div>
                    <div class="value-box">
                        <h3>Transparency</h3>
                        <p>We are committed to openness in our operations, ensuring that donors know exactly how their contributions are used.</p>
                    </div>
                </div>
            </div>

            <div class="cta-section">
                <a href="#get-involved" class="primary-button large">Join Our Mission</a>
            </div>
        </div>
    </section>

    <!-- Campaigns Section -->
    <section id="campaigns" class="section">
        <div class="container">
            <div class="page-header">
                <h1>Make a Difference – Support Our Campaigns</h1>
                <p>At Healing Hands, we believe in the power of collective action to create a lasting impact. 
                Our campaigns are designed to address pressing social, environmental, and humanitarian issues, 
                ensuring that every contribution brings real change.</p>
            </div>

            <!-- Campaigns Tabs -->
            <div class="tabs-container">
                <div class="tabs">
                    <button class="tab-button active" data-tab="current-campaigns">Current</button>
                    <button class="tab-button" data-tab="upcoming-campaigns">Upcoming</button>
                    <button class="tab-button" data-tab="completed-campaigns">Completed</button>
                </div>
          
                <div class="tab-content active" id="current-campaigns">
                    <div class="campaigns-grid">
                        <div class="campaign-card">
                            <div class="campaign-image">
                                <img src="{{ asset('frontend/images/awareness.avif') }}" alt="Education for All">
                            </div>
           
                            <div class="campaign-content">
                                <h3>Public Awareness & Education</h3>
                                <p>To reduce stigma and increase public understanding of dementia</p>
                                
                                <div class="campaign-progress">
                                    <div class="progress-info">
                                        <span>$32,500</span>
                                        <span>of $50,000</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 60%"></div>
                                    </div>
                                </div>
                                
                                <div class="campaign-meta">
                                    <span>245 supporters</span>
                                    <span>20 days left</span>
                                </div>
                                
                                                    <form method="POST" action="{{ route('paystack.pay') }}">
    @csrf
    <input type="hidden" name="email" value="donor@example.com"> <!-- Use real user email if available -->
    <input type="hidden" name="amount" value="5000"> <!-- Amount in Naira -->
    <input type="hidden" name="campaign" value="Public Awareness & Education"> <!-- Optional campaign tag -->
    
    <button type="submit" class="primary-button">Donate Now</button>
     <a href="#" class="secondary-button">Learn More</a>
</form>
                            </div>
                        </div>
  

                        <div class="campaign-card">
                            <div class="campaign-image">
                                <img src="{{ asset('frontend/images/diagnosis 1.avif') }}" alt="Disaster Relief Fund">
                            </div>
                            <div class="campaign-content">
                                <h3>Early diagnosis and Access to sevices.</h3>
                                <p>To encourage early screening and better access to diagnosis and demand mobile clinics in the rural areas.</p>
                                
                                <div class="campaign-progress">
                                    <div class="progress-info">
                                        <span>$78,600</span>
                                        <span>of $100,000</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 78%"></div>
                                    </div>
                                </div>
                                
                                <div class="campaign-meta">
                                    <span>532 supporters</span>
                                    <span>30 days left</span>
                                </div>
                                
                                                   <form method="POST" action="{{ route('paystack.pay') }}">
    @csrf
    <input type="hidden" name="email" value="donor@example.com"> <!-- Use real user email if available -->
    <input type="hidden" name="amount" value="5000"> <!-- Amount in Naira -->
    <input type="hidden" name="campaign" value="Public Awareness & Education"> <!-- Optional campaign tag -->
    
    <button type="submit" class="primary-button">Donate Now</button>
     <a href="#" class="secondary-button">Learn More</a>
</form>
                            </div>
                        </div>

                        <div class="campaign-card">
                            <div class="campaign-image">
                                <img src="{{ asset('frontend/images/law.avif') }}" alt="Healthcare Access">
                            </div>
                            <div class="campaign-content">
                                <h3>Policy and Legal Advocacy.</h3>
                                <p>To influence national health polices to include dementia care,protection and push for increased dementia research funding.</p>
                                
                                <div class="campaign-progress">
                                    <div class="progress-info">
                                        <span>$16,200</span>
                                        <span>of $30,000</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 60%"></div>
                                    </div>
                                </div>
                                
                                <div class="campaign-meta">
                                    <span>312 supporters</span>
                                    <span>45 days left</span>
                                </div>
                                
                              <form method="POST" action="{{ route('paystack.pay') }}">
    @csrf
    <input type="hidden" name="email" value="donor@example.com"> <!-- Use real user email if available -->
    <input type="hidden" name="amount" value="5000"> <!-- Amount in Naira -->
    <input type="hidden" name="campaign" value="Public Awareness & Education"> <!-- Optional campaign tag -->
    
    <button type="submit" class="primary-button">Donate Now</button>
     <a href="#" class="secondary-button">Learn More</a>
</form>

                            </div>
                        </div>

                        <div class="campaign-card">
                            <div class="campaign-image">
                                <img src="{{ asset('frontend/images/technology.avif') }}" alt="Clean Water Initiative">
                            </div>
                            <div class="campaign-content">
                                <h3>Promote tech solutions for dementia care and safety.</h3>
                                <p>To promote training programs for caregivers to use assistive technologies in smart support for dementia and also merging technology with compassion.</p>
                                
                                <div class="campaign-progress">
                                    <div class="progress-info">
                                        <span>$28,900</span>
                                        <span>of $60,000</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 48%"></div>
                                    </div>
                                </div>
                                
                                <div class="campaign-meta">
                                    <span>189 supporters</span>
                                    <span>60 days left</span>
                                </div>
                                
                                                  <form method="POST" action="{{ route('paystack.pay') }}">
    @csrf
    <input type="hidden" name="email" value="donor@example.com"> <!-- Use real user email if available -->
    <input type="hidden" name="amount" value="5000"> <!-- Amount in Naira -->
    <input type="hidden" name="campaign" value="Public Awareness & Education"> <!-- Optional campaign tag -->
    
    <button type="submit" class="primary-button">Donate Now</button>
     <a href="#" class="secondary-button">Learn More</a>
</form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="upcoming-campaigns">
                    <div class="message-card">
                        <h3>Exciting New Campaigns Coming Soon!</h3>
                        <p>We're preparing to launch new initiatives that will address critical needs in our communities. Stay tuned for updates!</p>
                        <a href="#" class="secondary-button">Get Notified</a>
                    </div>
                </div>
                
                <div class="tab-content" id="completed-campaigns">
                    <div class="message-card">
                        <h3>Past Success Stories</h3>
                        <p>Thanks to your support, we've successfully completed numerous campaigns that have made a real difference in people's lives.</p>
                        <a href="#" class="secondary-button">View Impact Reports</a>
                    </div>
                </div>
            </div>

            <!-- <div class="help-section">
                <h2>How You Can Help</h2>
                <div class="help-options">
                    <div class="help-card">
                        <h3>Donate to a campaign</h3>
                        <p>Every dollar counts. Even a small contribution can provide food, medicine, or shelter to those in need.</p>
                        <a href="#donation" class="primary-button">Donate Now</a>
                    </div>
                    <div class="help-card">
                        <h3>Share our campaigns</h3>
                        <p>Help us spread the word on social media and within your community.</p>
                        <a href="#" class="secondary-button">Share Now</a>
                    </div>
                    <div class="help-card">
                        <h3>Volunteer</h3>
                        <p>Get hands-on with fundraising and campaign organization.</p>
                        <a href="#get-involved" class="secondary-button">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Donation Section -->
    <!-- <section id="donation" class="section">
        <div class="container">
            <div class="page-header">
                <h1>Your Generosity Can Change Lives</h1>
                <p>Giving is not just about making a donation; it's about making a difference. 
                At Healing Hands, we ensure that every contribution is used effectively to support those in need.</p>
            </div>

            <div class="donation-options">
                <div class="donation-card">
                    <div class="donation-header">
                        <h2>One-Time Donation</h2>
                        <p>Make a quick, secure contribution</p>
                    </div>
                    <div class="donation-content">
                        <p>Your one-time gift can provide immediate relief to those in need, from emergency medical care to essential supplies.</p>
                        <p><strong>Benefits:</strong></p>
                        <ul>
                            <li>Immediate impact</li>
                            <li>Flexible amount</li>
                            <li>Tax-deductible</li>
                        </ul>
                        <a href="#donation-form" class="primary-button full-width">Donate Now</a>
                    </div>
                </div>

                <div class="donation-card featured">
                    <div class="donation-header featured">
                        <h2>Monthly Giving</h2>
                        <p>Become a recurring donor</p>
                    </div>
                    <div class="donation-content">
                        <p>Join our community of monthly donors and provide sustainable support that helps us plan and implement long-term solutions.</p>
                        <p><strong>Benefits:</strong></p>
                        <ul>
                            <li>Sustained impact</li>
                            <li>Exclusive updates</li>
                            <li>Special recognition</li>
                        </ul>
                        <a href="#donation-form" class="primary-button full-width">Become a Monthly Donor</a>
                    </div>
                </div>

                <div class="donation-card">
                    <div class="donation-header">
                        <h2>Sponsor a patient/Family</h2>
                        <p>Direct support to individuals</p>
                    </div>
                    <div class="donation-content">
                        <p>Create a personal connection by sponsoring a specific child or family, providing them with ongoing support and care.</p>
                        <p><strong>Benefits:</strong></p>
                        <ul>
                            <li>Personal connection</li>
                            <li>Regular updates</li>
                            <li>Transformative impact</li>
                        </ul>
                        <a href="#donation-form" class="primary-button full-width">Sponsor Now</a>
                    </div>
                </div>
            </div> -->

            <div class="donation-form" id="donation-form">
                <h2>Make Your Donation</h2>
                
                <div class="tabs-container">
                    <div class="tabs">
                        <button class="tab-button active" data-tab="onetime-donation">One-Time</button>
                        <button class="tab-button" data-tab="monthly-donation">Monthly</button>
                        <button class="tab-button" data-tab="sponsor-donation">Sponsor</button>
                    </div>
                    
                <form method="POST" action="{{ route('paystack.pay') }}" id="donationForm">
    @csrf

    <div class="form-group">
        <label>Donation Amount</label>
        <div class="donation-amounts">
            @foreach ([25, 50, 100, 250] as $amount)
                <div class="donation-amount" data-amount="{{ $amount }}">₦{{ $amount }}</div>
            @endforeach
            <div class="donation-amount" data-amount="custom">Custom</div>
        </div>

        <div class="custom-amount-input" style="display: none;">
            <input type="number" id="customAmount" name="custom_amount" placeholder="Enter custom amount" min="1">
        </div>

        <!-- Final amount field to send to Laravel -->
        <input type="hidden" id="amount" name="amount" required>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" placeholder="Last Name" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email Address" required>
    </div>

    <div class="form-group">
        <label for="campaign">Designate Your Gift (Optional)</label>
        <select id="campaign" name="campaign">
            <option value="">Where would you like your donation to go?</option>
            <option value="general">General Fund</option>
            <option value="education">Education for All</option>
            <option value="disaster">Support People with Dementia</option>
            <option value="healthcare">Healthcare Access</option>
            <option value="water">Innovation and Technology</option>
        </select>
    </div>

    <button type="submit" class="primary-button full-width large">Complete Donation</button>
</form>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const amountButtons = document.querySelectorAll(".donation-amount");
    const amountInput = document.getElementById("amount");
    const customInputDiv = document.querySelector(".custom-amount-input");
    const customInput = document.getElementById("customAmount");

    amountButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            amountButtons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            if (btn.dataset.amount === "custom") {
                customInputDiv.style.display = "block";
                amountInput.value = ""; // clear the value until user enters
            } else {
                customInputDiv.style.display = "none";
                amountInput.value = btn.dataset.amount;
            }
        });
    });

    // Update hidden input if custom is typed
    customInput.addEventListener("input", () => {
        amountInput.value = customInput.value;
    });
});
</script>

                    <div class="tab-content" id="monthly-donation">
                        <form>
                            <div class="form-group">
                                <label>Monthly Donation Amount</label>
                                <div class="donation-amounts">
                                    <div class="donation-amount active" data-amount="10">$10/mo</div>
                                    <div class="donation-amount" data-amount="25">$25/mo</div>
                                    <div class="donation-amount" data-amount="50">$50/mo</div>
                                    <div class="donation-amount" data-amount="100">$100/mo</div>
                                    <div class="donation-amount" data-amount="custom">Custom</div>
                                </div>
                                <div class="custom-amount-input">
                                    <input type="number" placeholder="Enter custom amount" min="1">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstNameMonthly">First Name</label>
                                    <input type="text" id="firstNameMonthly" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastNameMonthly">Last Name</label>
                                    <input type="text" id="lastNameMonthly" placeholder="Last Name" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="emailMonthly">Email</label>
                                <input type="email" id="emailMonthly" placeholder="Email Address" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="campaignMonthly">Designate Your Gift (Optional)</label>
                                <select id="campaignMonthly">
                                    <option value="">Where would you like your donation to go?</option>
                                    <option value="general">General Fund</option>
                                    <option value="education">Education for All</option>
                                    <option value="disaster">Support People with Dementia</option>
                                    <option value="healthcare">Healthcare Access</option>
                                    <option value="water">Innovation and Technology</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="primary-button full-width large">Become a Monthly Donor</button>
                            <p class="text-center" style="margin-top: 15px; color: #666; font-size: 14px;">
                                Your donation is secure and tax-deductible. You can cancel anytime.
                            </p>
                        </form>
                    </div>
                    
                    <div class="tab-content" id="sponsor-donation">
                        <form>
                            <div class="form-group">
                                <label for="sponsorType">Sponsor Type</label>
                                <select id="sponsorType" required>
                                    <option value="">Select type of sponsorship</option>
                                    <option value="child">Child Sponsorship</option>
                                    <option value="family">Family Sponsorship</option>
                                    <option value="community">Community Project</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Sponsorship Amount</label>
                                <div class="donation-amounts">
                                    <div class="donation-amount active" data-amount="30">$30/mo</div>
                                    <div class="donation-amount" data-amount="50">$50/mo</div>
                                    <div class="donation-amount" data-amount="100">$100/mo</div>
                                    <div class="donation-amount" data-amount="custom">Custom</div>
                                </div>
                                <div class="custom-amount-input">
                                    <input type="number" placeholder="Enter custom amount" min="1">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstNameSponsor">First Name</label>
                                    <input type="text" id="firstNameSponsor" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastNameSponsor">Last Name</label>
                                    <input type="text" id="lastNameSponsor" placeholder="Last Name" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="emailSponsor">Email</label>
                                <input type="email" id="emailSponsor" placeholder="Email Address" required>
                            </div>
                            
                            <button type="submit" class="primary-button full-width large">Start Sponsorship</button>
                            <p class="text-center" style="margin-top: 15px; color: #666; font-size: 14px;">
                                Your sponsorship is secure and tax-deductible. You'll receive updates about your sponsored child/family.
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="donation-uses">
                <div class="use-card">
                    <h3>Innovation and Technology</h3>
                    <p>A virtual support service reaching remote caregivers and patients weekly.</p>
        
                <div class="use-card">
                    <h3>Medical Care</h3>
                    <p>Covering the cost of medical treatments, vaccinations, and surgeries.</p>
                </div>
                
                <div class="use-card">
                    <h3> Awareness & Education</h3>
                    <p>Public seminar on early signs, risk reduction, and caregiving tips.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section id="get-involved" class="section">
        <div class="container">
            <div class="page-header">
                <h1>Join Our Mission – Make a Lasting Impact</h1>
                <p>Want to do more than just donate? Get involved! There are many ways you can contribute to our cause and help
                bring positive change.</p>
            </div>

            <!-- Get Involved Tabs -->
            <div class="tabs-container">
                <div class="tabs">
                    <button class="tab-button active" data-tab="volunteer-tab">Volunteer</button>
                    <button class="tab-button" data-tab="fundraise-tab">Fundraise</button>
                    <button class="tab-button" data-tab="partner-tab">Partner</button>
                </div>

                <div class="tab-content active" id="volunteer-tab">
                    <div class="volunteer-content">
                        <div class="volunteer-info">
                            <h2>Volunteer Opportunities</h2>
                            <p>Our volunteers are the heart of our organization. By giving your time and skills, you can make a direct
                            impact on the lives of those in need. We offer various volunteering opportunities to match your
                            interests and availability.</p>

                            <div class="volunteer-options">
                                <div class="volunteer-option">
                                    <h3>Medical Volunteers</h3>
                                    <p>Healthcare professionals can join our medical missions or provide telehealth services.</p>
                                </div>
                                <div class="volunteer-option">
                                    <h3>Event Volunteers</h3>
                                    <p>Help organize and run fundraising events, awareness campaigns, and community outreach programs.</p>
                                </div>
                                <div class="volunteer-option">
                                    <h3>Administrative Support</h3>
                                    <p>Assist with office tasks, data management, and communications to keep our operations running
                                    smoothly.</p>
                                </div>
                                <div class="volunteer-option">
                                    <h3>Skilled Volunteers</h3>
                                    <p>Contribute your professional skills in areas like graphic design, translation, or IT support.</p>
                                </div>
                            </div>

                            <a href="#volunteer-form" class="primary-button">Apply to Volunteer</a>
                        </div>
<form
  action="https://formspree.io/f/xyzjpqrj"
  method="POST"
>
                        <div class="volunteer-form" id="volunteer-form">
                            <h3>Volunteer Application</h3>
                            <form>     <div class="form-row">
                                    <div class="form-group">
                                        <label for="volunteerFirstName">First Name</label>
                                        <input id="volunteerFirstName" type="text" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="volunteerLastName">Last Name</label>
                                        <input id="volunteerLastName" type="text" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="volunteerEmail">Email</label>
                                    <input id="volunteerEmail" type="email" placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label for="volunteerPhone">Phone</label>
                                    <input id="volunteerPhone" type="tel" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="volunteerInterests">Areas of Interest</label>
                                    <select id="volunteerInterests" required>
                                        <option value="">Select an option</option>
                                        <option value="medical">Medical Support</option>
                                        <option value="events">Event Planning</option>
                                        <option value="admin">Administrative Support</option>
                                        <option value="skilled">Skilled Volunteering</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="volunteerMessage">Why do you want to volunteer?</label>
                                    <textarea id="volunteerMessage" placeholder="Tell us about your motivation and any relevant experience" rows="4"></textarea>
                                </div>

                                <button type="submit" class="primary-button full-width">Submit Application</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="fundraise-tab">
                    <div class="fundraise-content">
                        <div class="fundraise-info">
                            <h2>Start Your Own Fundraiser</h2>
                            <p>Fundraising is a powerful way to support our mission while engaging your community. Whether it's a
                            birthday fundraiser, a sponsored event, or a community challenge, your efforts can make a significant
                            impact.</p>

                            <div class="fundraise-steps">
                                <h3>How It Works</h3>
                                <ol>
                                    <li>Choose a fundraising idea that resonates with you</li>
                                    <li>Set up your fundraising page on our platform</li>
                                    <li>Share with friends, family, and social networks</li>
                                    <li>Track your progress and thank your supporters</li>
                                </ol>
                            </div>

                            <div class="fundraise-ideas">
                                <h3>Fundraising Ideas</h3>
                                <ul>
                                    <li>Birthday or special occasion fundraiser</li>
                                    <li>Sponsored run, walk, or fitness challenge</li>
                                    <li>Community event or bake sale</li>
                                    <li>School or workplace fundraising drive</li>
                                    <li>Livestream or gaming fundraiser</li>
                                </ul>
                            </div>

                            <a href="#" class="primary-button">Start Fundraising</a>
                        </div>

                        <div class="fundraise-spotlight">
                            <div class="spotlight-card">
                                <h3>Fundraiser Spotlight</h3>
                                <div class="spotlight-image">
                                    <img src="{{ asset('frontend/images/fundraiser spotlight.jpg') }}" alt="Fundraiser spotlight">
                                </div>
                                <h4>Sarah's Marathon for Medicine</h4>
                                <p class="spotlight-meta">Raised $3,450 of $3,000 goal</p>
                                <p class="spotlight-quote">
                                    "I ran my first marathon to raise funds for Healing Hands. The support was incredible, and knowing
                                    that every mile helped provide medical care to those in need kept me going!"
                                </p>
                                <a href="#" class="secondary-button">See More Success Stories</a>
                            </div>

                            <div class="support-card">
                                <h3>We'll Support You</h3>
                                <p>When you fundraise for Healing Hands, you're not alone. We provide:</p>
                                <ul>
                                    <li>Personalized fundraising page</li>
                                    <li>Fundraising toolkit with tips and resources</li>
                                    <li>Social media templates and graphics</li>
                                    <li>Dedicated support from our team</li>
                                </ul>
                                <p class="testimonial">
                                    "The resources and support from the Dementia Support Alliance team made fundraising so much easier. They were with
                                    me every step of the way!" - Mark, Community Fundraiser
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="partner-tab">
                    <div class="partner-content">
                        <div class="partner-info">
                            <h2>Partnership Opportunities</h2>
                            <p>Partnerships are essential to our work. By collaborating with businesses, organizations, and community
                            groups, we can amplify our impact and reach more people in need.</p>

                            <div class="partnership-types">
                                <div class="partnership-type">
                                    <h3>Corporate Partnerships</h3>
                                    <p>Partner with us to fulfill your corporate social responsibility goals while making a meaningful
                                    difference.</p>
                                    <ul>
                                        <li>Cause marketing campaigns</li>
                                        <li>Employee giving and matching programs</li>
                                        <li>Sponsorship opportunities</li>
                                        <li>Skills-based volunteering</li>
                                    </ul>
                                </div>

                                <div class="partnership-type">
                                    <h3>Community Partnerships</h3>
                                    <p>We collaborate with schools, faith groups, and local organizations to create community-driven
                                    initiatives.</p>
                                    <ul>
                                        <li>Joint awareness campaigns</li>
                                        <li>Community health initiatives</li>
                                        <li>Educational programs</li>
                                        <li>Resource sharing</li>
                                    </ul>
                                </div>
                            </div>

                            <a href="#partner-form" class="primary-button">Become a Partner</a>
                        </div>

                        <div class="partner-form" id="partner-form">
                            <h3>Partner With Us</h3>
                            <form>
                                <div class="form-group">
                                    <label for="orgName">Organization Name</label>
                                    <input id="orgName" type="text" placeholder="Organization Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="contactName">Contact Person</label>
                                    <input id="contactName" type="text" placeholder="Contact Person" required>
                                </div>

                                <div class="form-group">
                                    <label for="partnerEmail">Email</label>
                                    <input id="partnerEmail" type="email" placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label for="partnerPhone">Phone</label>
                                    <input id="partnerPhone" type="tel" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="partnershipType">Partnership Interest</label>
                                    <select id="partnershipType" required>
                                        <option value="">Select an option</option>
                                        <option value="corporate">Corporate Partnership</option>
                                        <option value="community">Community Partnership</option>
                                        <option value="sponsorship">Event Sponsorship</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="partnerMessage">Tell us about your organization and partnership goals</label>
                                    <textarea id="partnerMessage" placeholder="Your message" rows="4"></textarea>
                                </div>

                                <button type="submit" class="primary-button full-width">Submit Inquiry</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
<!-- 
            <div class="cta-section">
                <h2>Ready to Make a Difference?</h2>
                <a href="#volunteer-form" class="primary-button large">Take Action Today</a>
            </div>
        </div> -->
    </section>

    <!-- News Section -->
    <section id="news" class="section">
        <div class="container">
            <div class="page-header">
                <h1>Stay Updated – Stories of Impact & Inspiration</h1>
                <p>Welcome to our blog, where we share stories of hope, updates on our campaigns, and insights into the impact of
                your contributions.</p>
            </div>

            <div class="featured-story">
                <div class="featured-image">
                    <img src="{{ asset('frontend/images/save 4.jpg') }}" alt="Featured story">
                    <div class="featured-overlay">
                        <span class="featured-tag">Featured Story</span>
                        <h2>Emergency Response Team successfully intervend and provided life saving care to an individual with cognitive disability,following a self-inflicted injury.</h2>
                        <p>This incident highlights the importance of rapid-response  dementia care protocols and intergrated mental health support in vulnerable populations.</p>
                        <a href="#" class="primary-button">Read Full Story</a>
                    </div>
                </div>
            </div>

            <div class="news-content">
                <div class="news-main">
                    <div class="news-tabs">
                        <div class="tabs">
                            <button class="tab-button active" data-tab="all-news">All</button>
                            <button class="tab-button" data-tab="success-news">Success Stories</button>
                            <button class="tab-button" data-tab="updates-news">Updates</button>
                            <button class="tab-button" data-tab="insights-news">Insights</button>
                        </div>

                        <div class="tab-content active" id="all-news">
                            <div class="blog-grid">
                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/mobile clinic.jpg') }}" alt="Mobile Clinic">
                                        <span class="blog-category">Success Stories</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>Mobile Clinic Reaches Remote Village, Treats 200 Patients</h3>
                                        <p class="blog-meta">June 10, 2025 • by Dr. Peter Chidileume</p>
                                        <p>Our medical team traveled to a remote village to provide essential healthcare services to residents who had limited access to medical care.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>

                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/new patnership.jpg') }}" alt="New Partnership">
                                        <span class="blog-category">Announcements</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>New Partnership Expands Healthcare Access in Rural Communities</h3>
                                        <p class="blog-meta">June 17, 2025 • by General Dr Emmanuel Elusakin, Partnerships Director</p>
                                        <p>We're excited to announce our new partnership with Regional Medical Center, which will help us reach more underserved communities.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>

                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/medical volunteers.jpg') }}" alt="Volunteer Spotlight">
                                        <span class="blog-category">Volunteer Spotlights</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>Volunteer Spotlight: Meet Aisha, Our Dedicated Nurse</h3>
                                        <p class="blog-meta">May 29, 2025 • by Emma Williams</p>
                                        <p>Aisha has been volunteering with us for five years, bringing her nursing expertise to communities in need. Learn about her inspiring journey.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>

                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/healthcare inequality.jpg') }}" alt="Healthcare Inequality">
                                        <span class="blog-category">Industry Insights</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>The Growing Crisis of Healthcare Inequality: What We Can Do</h3>
                                        <p class="blog-meta">June 28, 2025 • by Dr. Frank Lee, Medical Director</p>
                                        <p>Healthcare inequality continues to affect millions worldwide. In this article, we explore the causes and potential solutions.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="load-more">
                                <button class="secondary-button">Load More Stories</button>
                            </div>
                        </div>

                        <div class="tab-content" id="success-news">
                            <!-- Success stories content -->
                            <div class="blog-grid">
                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="Mobile Clinic">
                                        <span class="blog-category">Success Stories</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>Mobile Clinic Reaches Remote Village, Treats 200 Patients</h3>
                                        <p class="blog-meta">March 15, 2025 • by Dr. Sarah Johnson</p>
                                        <p>Our medical team traveled to a remote village to provide essential healthcare services to residents who had limited access to medical care.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="updates-news">
                            <!-- Updates content -->
                            <div class="blog-grid">
                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="New Partnership">
                                        <span class="blog-category">Announcements</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>New Partnership Expands Healthcare Access in Rural Communities</h3>
                                        <p class="blog-meta">March 10, 2025 • by Michael Chen, Partnerships Director</p>
                                        <p>We're excited to announce our new partnership with Regional Medical Center, which will help us reach more underserved communities.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="insights-news">
                            <!-- Insights content -->
                            <div class="blog-grid">
                                <div class="blog-card">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="Healthcare Inequality">
                                        <span class="blog-category">Industry Insights</span>
                                    </div>
                                    <div class="blog-content">
                                        <h3>The Growing Crisis of Healthcare Inequality: What We Can Do</h3>
                                        <p class="blog-meta">February 28, 2025 • by Dr. Robert Lee, Medical Director</p>
                                        <p>Healthcare inequality continues to affect millions worldwide. In this article, we explore the causes and potential solutions.</p>
                                        <a href="#" class="secondary-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-sidebar">
                    <div class="sidebar-widget">
                        <h3>Search</h3>
                        <div class="search-form">
                            <input type="text" placeholder="Search articles...">
                            <button type="submit"></button>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h3>Categories</h3>
                        <ul class="category-list">
                            <li><a href="#">Success Stories</a></li>
                            <li><a href="#">Announcements</a></li>
                            <li><a href="#">Volunteer Spotlights</a></li>
                            <li><a href="#">Industry Insights</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Impact Reports</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h3>Subscribe</h3>
                        <p>Stay updated with our latest news and stories.</p>
                        <div class="subscribe-form">
                            <input type="email" placeholder="Your email address">
                            <button type="submit" class="primary-button">Subscribe</button>
                        </div>
                    </div>

                    <div class="sidebar-widget highlight">
                        <h3>Share Your Story</h3>
                        <p>Have you been impacted by our work? We'd love to feature your story.</p>
                        <a href="#" class="secondary-button">Submit Your Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="page-header">
                <h1>We'd Love to Hear from You!</h1>
                <p>Whether you have questions, want to get involved, or need support, we're here to help.</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <h2>Contact Information</h2>

                    <div class="contact-cards">
                        <div class="contact-card">
                            <div class="contact-details">
                                <h3>Address</h3>
                                <p>
                                    Living faith, Suite 200<br>
                                    Apo City, Abuja
                                </p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-details">
                                <h3>Phone</h3>
                                <p>+234810976338</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-details">
                                <h3>Email</h3>
                                <p>mahmouddoukali51@gmail.com</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-details">
                                <h3>Hours</h3>
                                <p>
                                    Monday - Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday: 10:00 AM - 2:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h2>Send Us a Message</h2>
                    <form class="contact-form" action="https://formspree.io/f/mblykvnn" method="POST">
                        <div class="form-row">
                            <div class="form-group">
        <label for="contactName">Name</label>
        <input type="text" id="contactName" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <label for="contactEmail">Email</label>
        <input type="email" id="contactEmail" name="email" placeholder="Your Email" required>
      </div>
    </div>

    <div class="form-group">
      <label for="contactSubject">Subject</label>
      <input type="text" id="contactSubject" name="subject" placeholder="Subject">
    </div>

    <div class="form-group">
      <label for="contactMessage">Message</label>
      <textarea id="contactMessage" name="message" placeholder="Your Message" rows="5" required></textarea>
    </div>
                        <button type="submit" class="primary-button full-width">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="faq-section">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-grid">
                    <div class="faq-card">
                        <h3>How can I volunteer with Dementia Alliance Support?</h3>
                        <p>
                            You can volunteer by filling out our volunteer application form on the Get Involved page. We have
                            opportunities for medical professionals, event volunteers, and administrative support.
                        </p>
                    </div>

                    <div class="faq-card">
                        <h3>Is my donation tax-deductible?</h3>
                        <p>
                            Yes, Dementia Suport Allianceis a registered 501(c)(3) non-profit organization, and all donations are tax-deductible
                            to the extent allowed by law.
                        </p>
                    </div>

                    <div class="faq-card">
                        <h3>How is my donation used?</h3>
                        <p>
                            Your donation directly supports our medical missions, community health programs, and operational costs. We
                            maintain transparency in our financial reporting, which is available upon request.
                        </p>
                    </div>

                    <div class="faq-card">
                        <h3>Can I donate medical supplies?</h3>
                        <p>
                            Yes, we accept donations of medical supplies. Please contact us directly to discuss the specific items you
                            wish to donate and arrange for delivery or pickup.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Healing Hands</h3>
                    <p>Dedicated to providing essential medical care to underserved rural communities worldwide.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#campaigns">Our Campaigns</a></li>
                        <li><a href="#donation">Donate</a></li>
                        <li><a href="#get-involved">Get Involved</a></li>
                        <li><a href="#news">News & Blog</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="contact-info">
                        <li>123 living faith, Suite 200<br>Apo City, Abuja</li>
                        <li>+2348109763638</li>
                        <li>mahmouddoukali51@gmail.com</li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates on our work and impact.</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Your email">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <span id="current-year"></span> Dementia Support Alliance. All rights reserved.</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
  </div>
</html>

