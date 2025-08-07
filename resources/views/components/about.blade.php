<section id="about" class="about-section">
    <div class="about-container">
        <!-- Section Header -->
        <div class="about-header">
            <h2 class="about-title">Why Choose MedLab Pro</h2>
            <p class="about-desc">
                Leading medical laboratory services with cutting-edge technology, 
                expert staff, and unwavering commitment to accuracy and patient care.
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="about-stats">
            @php
                $stats = [
                    [
                        'icon' => 'users',
                        'number' => '50,000+',
                        'label' => 'Patients Served',
                        'description' => 'Trusted by thousands annually'
                    ],
                    [
                        'icon' => 'calendar',
                        'number' => '15+',
                        'label' => 'Years Experience',
                        'description' => 'Established excellence in diagnostics'
                    ],
                    [
                        'icon' => 'award',
                        'number' => '99.9%',
                        'label' => 'Accuracy Rate',
                        'description' => 'Precise and reliable results'
                    ],
                    [
                        'icon' => 'clock',
                        'number' => '< 2hrs',
                        'label' => 'Average Turnaround',
                        'description' => 'Fast results when you need them'
                    ]
                ];
            @endphp
            @foreach($stats as $index => $stat)
                <div class="about-stat">
                    <div class="about-stat-icon-bg">
                        <i data-lucide="{{ $stat['icon'] }}" class="about-stat-icon"></i>
                    </div>
                    <div class="about-stat-number">{{ $stat['number'] }}</div>
                    <div class="about-stat-label">{{ $stat['label'] }}</div>
                    <div class="about-stat-desc">{{ $stat['description'] }}</div>
                </div>
            @endforeach
        </div>

        <div class="about-main">
            <!-- Content -->
            <div class="about-main-content">
                <h3 class="about-main-title">Excellence in Diagnostic Medicine</h3>
                <p class="about-main-desc">
                    Since 2008, MedLab Pro has been at the forefront of medical diagnostics, 
                    providing accurate, reliable, and timely laboratory testing services. Our 
                    commitment to excellence has made us a trusted partner in healthcare.
                </p>
                @php
                    $features = [
                        "State-of-the-art diagnostic equipment",
                        "Board-certified pathologists and technicians",
                        "24/7 emergency testing capabilities",
                        "Comprehensive quality assurance program",
                        "Electronic health record integration",
                        "Multi-location convenience"
                    ];
                @endphp
                <div class="about-features">
                    @foreach($features as $feature)
                        <div class="about-feature">
                            <i data-lucide="check-circle" class="about-feature-icon"></i>
                            <span>{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
                <button 
                    class="about-btn" 
                    onclick="document.dispatchEvent(new CustomEvent('openBooking'))"
                >
                    <i data-lucide="calendar" class="icon-md"></i>
                    <span>Schedule Your Test</span>
                </button>
            </div>
            <!-- Certifications -->
            <div class="about-certifications">
                <div class="about-certifications-inner">
                    <h4 class="about-certifications-title">Certifications & Standards</h4>
                    @php
                        $certifications = [
                            ['name' => 'CAP Certified', 'desc' => 'College of American Pathologists'],
                            ['name' => 'CLIA Approved', 'desc' => 'Clinical Laboratory Improvement Amendments'],
                            ['name' => 'ISO 15189', 'desc' => 'International Quality Standard'],
                            ['name' => 'HIPAA Compliant', 'desc' => 'Health Insurance Portability']
                        ];
                    @endphp
                    <div class="about-certifications-list">
                        @foreach($certifications as $cert)
                            <div class="about-certification">
                                <div class="about-certification-icon-bg">
                                    <i data-lucide="award" class="about-certification-icon"></i>
                                </div>
                                <div>
                                    <div class="about-certification-name">{{ $cert['name'] }}</div>
                                    <div class="about-certification-desc">{{ $cert['desc'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="about-team-section">
            <div class="about-team-header">
                <h3 class="about-team-title">Meet Our Expert Team</h3>
                <p class="about-team-desc">
                    Our team of board-certified pathologists and experienced technicians 
                    ensure the highest standards of diagnostic accuracy.
                </p>
            </div>
            <div class="about-team">
                @php
                    $team = [
                        [
                            'name' => 'Dr. Sarah Smith',
                            'role' => 'Chief Pathologist',
                            'experience' => '15 years',
                            'specialty' => 'Internal Medicine',
                            'image' => '👩‍⚕️'
                        ],
                        [
                            'name' => 'Dr. Michael Johnson',
                            'role' => 'Cardiovascular Specialist',
                            'experience' => '12 years',
                            'specialty' => 'Cardiology',
                            'image' => '👨‍⚕️'
                        ],
                        [
                            'name' => 'Dr. Emily Williams',
                            'role' => 'Endocrinology Expert',
                            'experience' => '10 years',
                            'specialty' => 'Endocrinology',
                            'image' => '👩‍⚕️'
                        ],
                        [
                            'name' => 'Dr. David Brown',
                            'role' => 'Laboratory Director',
                            'experience' => '18 years',
                            'specialty' => 'Pathology',
                            'image' => '👨‍⚕️'
                        ]
                    ];
                @endphp
                @foreach($team as $member)
                    <div class="about-team-member">
                        <div class="about-team-img">{{ $member['image'] }}</div>
                        <h4 class="about-team-name">{{ $member['name'] }}</h4>
                        <div class="about-team-role">{{ $member['role'] }}</div>
                        <div class="about-team-specialty">{{ $member['specialty'] }}</div>
                        <div class="about-team-experience">{{ $member['experience'] }} experience</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> 