<section id="contact" class="contact-section">
    <div class="contact-container">
        <!-- Section Header -->
        <div class="contact-header">
            <h2 class="contact-title">Contact Us</h2>
            <p class="contact-desc">
                Get in touch with our team for any questions about our services, 
                scheduling appointments, or accessing your test results.
            </p>
        </div>

        <div class="contact-main">
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <h3 class="contact-form-title">Send Us a Message</h3>
                <form id="contactForm" class="contact-form">
                    <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label for="name" class="contact-label">Full Name *</label>
                            <input type="text" id="name" name="name" required class="contact-input" placeholder="Enter your full name">
                        </div>
                        <div class="contact-form-group">
                            <label for="email" class="contact-label">Email Address *</label>
                            <input type="email" id="email" name="email" required class="contact-input" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="contact-form-group">
                        <label for="phone" class="contact-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="contact-input" placeholder="Enter your phone number">
                    </div>
                    <div class="contact-form-group">
                        <label for="message" class="contact-label">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="contact-input contact-textarea" placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    <button type="submit" class="contact-btn">
                        <i data-lucide="send" class="icon-md"></i>
                        <span>Send Message</span>
                    </button>
                </form>
                <div id="successMessage" class="contact-success-message hidden">
                    <div class="contact-success-inner">
                        <i data-lucide="check-circle" class="icon-md"></i>
                        <span class="contact-success-text">Message sent successfully! We'll get back to you soon.</span>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h3 class="contact-info-title">Get in Touch</h3>
                @php
                    $contactInfo = [
                        [
                            'icon' => 'phone',
                            'title' => 'Phone',
                            'primary' => '(555) 123-4567',
                            'secondary' => 'Emergency: (555) 123-4911',
                            'color' => 'contact-info-icon-primary'
                        ],
                        [
                            'icon' => 'mail',
                            'title' => 'Email',
                            'primary' => 'info@medlabpro.com',
                            'secondary' => 'results@medlabpro.com',
                            'color' => 'contact-info-icon-secondary'
                        ],
                        [
                            'icon' => 'map-pin',
                            'title' => 'Location',
                            'primary' => '123 Medical Center Drive',
                            'secondary' => 'Healthcare City, HC 12345',
                            'color' => 'contact-info-icon-primary'
                        ],
                        [
                            'icon' => 'clock',
                            'title' => 'Hours',
                            'primary' => 'Mon-Fri: 6:00 AM - 8:00 PM',
                            'secondary' => 'Sat-Sun: 7:00 AM - 5:00 PM',
                            'color' => 'contact-info-icon-secondary'
                        ]
                    ];
                @endphp
                <div class="contact-info-list">
                    @foreach($contactInfo as $info)
                        <div class="contact-info-item">
                            <div class="contact-info-icon-bg">
                                <i data-lucide="{{ $info['icon'] }}" class="icon-md {{ $info['color'] }}"></i>
                            </div>
                            <div>
                                <h4 class="contact-info-label">{{ $info['title'] }}</h4>
                                <div class="contact-info-primary">{{ $info['primary'] }}</div>
                                <div class="contact-info-secondary">{{ $info['secondary'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="contact-quick-actions">
                    <h4 class="contact-quick-title">Quick Actions</h4>
                    <div class="contact-quick-list">
                        <button class="contact-quick-btn" onclick="document.dispatchEvent(new CustomEvent('openBooking'))">
                            <i data-lucide="calendar" class="icon-sm"></i>
                            <span>Book Appointment</span>
                        </button>
                        <button class="contact-quick-btn contact-quick-btn-outline" onclick="window.open('tel:(555) 123-4567')">
                            <i data-lucide="phone" class="icon-sm"></i>
                            <span>Call Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Locations -->
        <div class="contact-locations-section">
            <div class="contact-locations-header">
                <h3 class="contact-locations-title">Our Locations</h3>
                <p class="contact-locations-desc">
                    Visit any of our convenient locations for your laboratory testing needs.
                </p>
            </div>
            <div class="contact-locations">
                @php
                    $locations = [
                        [
                            'name' => 'Main Laboratory',
                            'address' => '123 Medical Center Drive, Healthcare City, HC 12345',
                            'phone' => '(555) 123-4567',
                            'hours' => 'Mon-Fri: 6:00 AM - 8:00 PM'
                        ],
                        [
                            'name' => 'Downtown Branch',
                            'address' => '456 Downtown Ave, Healthcare City, HC 12346',
                            'phone' => '(555) 123-4568',
                            'hours' => 'Mon-Fri: 7:00 AM - 6:00 PM'
                        ],
                        [
                            'name' => 'Westside Center',
                            'address' => '789 West Medical Blvd, Healthcare City, HC 12347',
                            'phone' => '(555) 123-4569',
                            'hours' => 'Mon-Sat: 6:30 AM - 7:00 PM'
                        ]
                    ];
                @endphp
                @foreach($locations as $location)
                    <div class="contact-location">
                        <h4 class="contact-location-name">{{ $location['name'] }}</h4>
                        <div class="contact-location-details">
                            <div class="contact-location-detail">
                                <i data-lucide="map-pin" class="icon-sm"></i>
                                <span>{{ $location['address'] }}</span>
                            </div>
                            <div class="contact-location-detail">
                                <i data-lucide="phone" class="icon-sm"></i>
                                <span>{{ $location['phone'] }}</span>
                            </div>
                            <div class="contact-location-detail">
                                <i data-lucide="clock" class="icon-sm"></i>
                                <span>{{ $location['hours'] }}</span>
                            </div>
                        </div>
                        <button class="contact-location-btn" onclick="document.dispatchEvent(new CustomEvent('openBooking'))">
                            Book at This Location
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Get form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    // Here you would typically submit to your Laravel backend
    console.log('Contact form submitted:', data);
    // Show success message
    const successMessage = document.getElementById('successMessage');
    successMessage.classList.remove('hidden');
    // Reset form
    this.reset();
    // Hide success message after 3 seconds
    setTimeout(() => {
        successMessage.classList.add('hidden');
    }, 3000);
});
</script> 