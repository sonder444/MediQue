<section id="home" class="hero-section">
    <!-- Background Image -->
    <div class="hero-bg">
        <img
            src="{{ asset('images/hero-lab.jpg') }}"
            alt="Medical Laboratory"
            class="hero-img"
        />
        <div class="hero-bg-overlay"></div>
    </div>

    <div class="hero-content">
        <div class="hero-grid">
            <!-- Content -->
            <div class="hero-text">
                <h1 class="hero-title">
                    Advanced
                    <span class="hero-title-secondary">Diagnostic</span>
                    Excellence
                </h1>
                <p class="hero-desc">
                    State-of-the-art medical laboratory services with precise diagnostics, 
                    fast results, and convenient online scheduling. Your health is our priority.
                </p>

                <div class="hero-btn-group">
                    <button
                        class="hero-btn hero-btn-primary"
                        onclick="document.dispatchEvent(new CustomEvent('openBooking'))"
                    >
                        <i data-lucide="calendar" class="icon-md mr-2"></i>
                        Schedule Test
                    </button>
                    <button
                        class="hero-btn hero-btn-outline"
                        onclick="document.getElementById('services').scrollIntoView({behavior: 'smooth'})"
                    >
                        View Services
                    </button>
                </div>

                <!-- Quick Stats -->
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">24/7</div>
                        <div class="hero-stat-label">Available</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">&lt; 2hrs</div>
                        <div class="hero-stat-label">Results</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">99.9%</div>
                        <div class="hero-stat-label">Accuracy</div>
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="hero-features">
                <div class="hero-feature">
                    <i data-lucide="clock" class="icon-lg hero-feature-icon"></i>
                    <h3 class="hero-feature-title">Fast Results</h3>
                    <p class="hero-feature-desc">
                        Quick turnaround times for all diagnostic tests
                    </p>
                </div>

                <div class="hero-feature">
                    <i data-lucide="shield" class="icon-lg hero-feature-icon"></i>
                    <h3 class="hero-feature-title">HIPAA Compliant</h3>
                    <p class="hero-feature-desc">
                        Your privacy and data security guaranteed
                    </p>
                </div>

                <div class="hero-feature">
                    <i data-lucide="award" class="icon-lg hero-feature-icon"></i>
                    <h3 class="hero-feature-title">Certified Lab</h3>
                    <p class="hero-feature-desc">
                        CAP and CLIA certified laboratory facility
                    </p>
                </div>

                <div class="hero-feature">
                    <i data-lucide="calendar" class="icon-lg hero-feature-icon"></i>
                    <h3 class="hero-feature-title">Easy Booking</h3>
                    <p class="hero-feature-desc">
                        Schedule appointments online 24/7
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Wave -->
    <div class="hero-bottom-wave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="hero-bottom-wave-svg">
            <path d="M0,60 C240,120 480,0 720,60 C960,120 1200,0 1200,60 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section> 