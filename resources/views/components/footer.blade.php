<footer class="site-footer">
    <div class="footer-container">
        <!-- Main Footer Content -->
        <div class="footer-main">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-company">
                    <div class="footer-logo-group">
                        <div class="footer-logo-icon">
                            <span class="footer-logo-text">ML</span>
                        </div>
                        <span class="footer-logo-title">MedLab Pro</span>
                    </div>
                    <p class="footer-company-desc">
                        Your trusted partner in diagnostic excellence. Providing accurate, 
                        reliable laboratory testing with state-of-the-art technology and 
                        compassionate care since 2008.
                    </p>
                    <!-- Contact Info -->
                    <div class="footer-contact-list">
                        <div class="footer-contact-item">
                            <i data-lucide="phone" class="icon-sm footer-contact-icon"></i>
                            <span>(555) 123-4567</span>
                        </div>
                        <div class="footer-contact-item">
                            <i data-lucide="mail" class="icon-sm footer-contact-icon"></i>
                            <span>info@medlabpro.com</span>
                        </div>
                        <div class="footer-contact-item">
                            <i data-lucide="map-pin" class="icon-sm footer-contact-icon"></i>
                            <span>123 Medical Center Drive, Healthcare City, HC 12345</span>
                        </div>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="footer-links">
                    <h3 class="footer-links-title">Quick Links</h3>
                    <ul class="footer-links-list">
                        @php
                            $quickLinks = [
                                ['name' => 'About Us', 'href' => '#about'],
                                ['name' => 'Services', 'href' => '#services'],
                                ['name' => 'Test Results', 'href' => '#'],
                                ['name' => 'Insurance', 'href' => '#'],
                                ['name' => 'Patient Portal', 'href' => '#'],
                                ['name' => 'Careers', 'href' => '#']
                            ];
                        @endphp
                        @foreach($quickLinks as $link)
                            <li><a href="{{ $link['href'] }}" class="footer-link">{{ $link['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Services -->
                <div class="footer-links">
                    <h3 class="footer-links-title">Services</h3>
                    <ul class="footer-links-list">
                        @php
                            $services = [
                                ['name' => 'Blood Tests', 'href' => '#'],
                                ['name' => 'Diagnostic Imaging', 'href' => '#'],
                                ['name' => 'Genetic Testing', 'href' => '#'],
                                ['name' => 'Wellness Panels', 'href' => '#'],
                                ['name' => 'Corporate Health', 'href' => '#'],
                                ['name' => 'Home Collection', 'href' => '#']
                            ];
                        @endphp
                        @foreach($services as $service)
                            <li><a href="{{ $service['href'] }}" class="footer-link">{{ $service['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Social Links & Newsletter -->
            <div class="footer-social-newsletter">
                <div class="footer-social">
                    <span class="footer-social-label">Follow us:</span>
                    @php
                        $socialLinks = [
                            ['icon' => 'facebook', 'href' => '#', 'label' => 'Facebook'],
                            ['icon' => 'twitter', 'href' => '#', 'label' => 'Twitter'],
                            ['icon' => 'instagram', 'href' => '#', 'label' => 'Instagram'],
                            ['icon' => 'linkedin', 'href' => '#', 'label' => 'LinkedIn']
                        ];
                    @endphp
                    @foreach($socialLinks as $social)
                        <a href="{{ $social['href'] }}" class="footer-social-link" title="{{ $social['label'] }}">
                            <i data-lucide="{{ $social['icon'] }}" class="icon-md"></i>
                        </a>
                    @endforeach
                </div>
                <div class="footer-newsletter">
                    <span class="footer-newsletter-label">Stay updated:</span>
                    <div class="footer-newsletter-form">
                        <input type="email" placeholder="Enter your email" class="footer-newsletter-input">
                        <button class="footer-newsletter-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <div class="footer-bottom-row">
                <div class="footer-bottom-left">
                    <span>&copy; 2024 MedLab Pro. All rights reserved.</span>
                    <span class="footer-bottom-sep">•</span>
                    <span>Made with</span>
                    <i data-lucide="heart" class="icon-sm footer-heart"></i>
                    <span>for better healthcare</span>
                </div>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    <a href="#" class="footer-bottom-link">Terms of Service</a>
                    <a href="#" class="footer-bottom-link">HIPAA Notice</a>
                    <a href="#" class="footer-bottom-link">Accessibility</a>
                </div>
            </div>
        </div>
    </div>
</footer> 