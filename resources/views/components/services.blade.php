<section id="services" class="services-section">
    <div class="services-container">
        <!-- Section Header -->
        <div class="services-header">
            <h2 class="services-title">Diagnostic Services</h2>
            <p class="services-desc">
                Comprehensive laboratory testing with state-of-the-art equipment and 
                experienced medical professionals ensuring accurate results.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            @php
                $services = [
                    [
                        'id' => 1,
                        'title' => 'Complete Blood Count (CBC)',
                        'description' => 'Comprehensive blood analysis including white blood cells, red blood cells, and platelets.',
                        'icon' => 'test-tube',
                        'price' => '$45',
                        'duration' => '30 min',
                        'popular' => true,
                        'features' => ['White Blood Cells', 'Red Blood Cells', 'Platelet Count', 'Hemoglobin']
                    ],
                    [
                        'id' => 2,
                        'title' => 'Lipid Panel',
                        'description' => 'Cholesterol and triglyceride levels assessment for cardiovascular health monitoring.',
                        'icon' => 'heart',
                        'price' => '$65',
                        'duration' => '25 min',
                        'popular' => false,
                        'features' => ['Total Cholesterol', 'HDL/LDL', 'Triglycerides', 'Risk Assessment']
                    ],
                    [
                        'id' => 3,
                        'title' => 'Thyroid Function Tests',
                        'description' => 'Complete thyroid hormone panel including TSH, T3, and T4 levels.',
                        'icon' => 'activity',
                        'price' => '$85',
                        'duration' => '35 min',
                        'popular' => true,
                        'features' => ['TSH Level', 'T3 & T4', 'Thyroid Antibodies', 'Metabolism Check']
                    ],
                    [
                        'id' => 4,
                        'title' => 'Diabetes Panel',
                        'description' => 'Blood glucose and HbA1c testing for diabetes monitoring and management.',
                        'icon' => 'zap',
                        'price' => '$55',
                        'duration' => '20 min',
                        'popular' => false,
                        'features' => ['Glucose Level', 'HbA1c', 'Insulin Resistance', 'Risk Factors']
                    ],
                    [
                        'id' => 5,
                        'title' => 'Liver Function Tests',
                        'description' => 'Comprehensive liver enzyme and protein analysis for hepatic health assessment.',
                        'icon' => 'shield',
                        'price' => '$70',
                        'duration' => '30 min',
                        'popular' => false,
                        'features' => ['ALT/AST', 'Bilirubin', 'Albumin', 'Liver Enzymes']
                    ],
                    [
                        'id' => 6,
                        'title' => 'Vitamin D Test',
                        'description' => 'Vitamin D level assessment for bone health and immune system function.',
                        'icon' => 'activity',
                        'price' => '$40',
                        'duration' => '15 min',
                        'popular' => true,
                        'features' => ['25-OH Vitamin D', 'Deficiency Check', 'Bone Health', 'Immune Support']
                    ]
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="service-card">
                    @if($service['popular'])
                        <div class="service-popular">Popular</div>
                    @endif
                    <div class="service-card-content">
                        <!-- Service Header -->
                        <div class="service-card-header">
                            <div class="service-icon-group">
                                <div class="service-icon-bg">
                                    <i data-lucide="{{ $service['icon'] }}" class="service-icon"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">{{ $service['title'] }}</h3>
                                    <div class="service-meta">
                                        <span>{{ $service['price'] }}</span>
                                        <span>•</span>
                                        <span>{{ $service['duration'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <p class="service-desc">{{ $service['description'] }}</p>
                        <!-- Features -->
                        <div class="service-features">
                            @foreach($service['features'] as $feature)
                                <div class="service-feature">
                                    <i data-lucide="check-circle" class="service-feature-icon"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                        <!-- CTA Button -->
                        <button 
                            class="service-btn" 
                            onclick="document.dispatchEvent(new CustomEvent('openBooking'))"
                        >
                            <i data-lucide="calendar" class="icon-sm"></i>
                            <span>Book This Test</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="services-info">
            <div class="services-info-inner">
                <h3 class="services-info-title">Why Choose Our Laboratory?</h3>
                <div class="services-info-grid">
                    <div class="services-info-item">
                        <div class="services-info-icon-bg">
                            <i data-lucide="clock" class="services-info-icon"></i>
                        </div>
                        <h4 class="services-info-item-title">Fast Results</h4>
                        <p class="services-info-item-desc">Most results available within 24-48 hours</p>
                    </div>
                    <div class="services-info-item">
                        <div class="services-info-icon-bg">
                            <i data-lucide="shield" class="services-info-icon"></i>
                        </div>
                        <h4 class="services-info-item-title">Accurate Testing</h4>
                        <p class="services-info-item-desc">State-of-the-art equipment and certified technicians</p>
                    </div>
                    <div class="services-info-item">
                        <div class="services-info-icon-bg">
                            <i data-lucide="user-check" class="services-info-icon"></i>
                        </div>
                        <h4 class="services-info-item-title">Expert Staff</h4>
                        <p class="services-info-item-desc">Experienced medical professionals and pathologists</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 