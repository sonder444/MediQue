<!-- Booking Modal -->
<div id="bookingModal" class="modal-overlay hidden">
    <div class="modal-center">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h2 class="modal-title">Book Your Appointment</h2>
                    <p class="modal-desc">Schedule your laboratory test in just a few steps</p>
                </div>
                <button data-close-modal class="modal-close-btn">
                    <i data-lucide="x" class="icon-md"></i>
                </button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <!-- Progress Steps -->
                <div class="modal-steps">
                    @php
                        $steps = [
                            ['number' => 1, 'title' => 'Personal Info'],
                            ['number' => 2, 'title' => 'Test Selection'],
                            ['number' => 3, 'title' => 'Schedule'],
                            ['number' => 4, 'title' => 'Confirm']
                        ];
                    @endphp
                    @foreach($steps as $index => $step)
                        <div class="modal-step-indicator-group">
                            <div class="modal-step-indicator" data-step="{{ $step['number'] }}">{{ $step['number'] }}</div>
                            @if($index < count($steps) - 1)
                                <div class="modal-step-line"></div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <!-- Step 1: Personal Information -->
                <div id="step1" class="modal-step">
                    <h3 class="modal-step-title">Personal Information</h3>
                    <div class="modal-step-row">
                        <div class="modal-form-group">
                            <label for="firstName" class="modal-label">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required class="modal-input" placeholder="Enter your first name">
                        </div>
                        <div class="modal-form-group">
                            <label for="lastName" class="modal-label">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required class="modal-input" placeholder="Enter your last name">
                        </div>
                        <div class="modal-form-group">
                            <label for="email" class="modal-label">Email Address *</label>
                            <input type="email" id="email" name="email" required class="modal-input" placeholder="Enter your email">
                        </div>
                        <div class="modal-form-group">
                            <label for="phone" class="modal-label">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required class="modal-input" placeholder="Enter your phone number">
                        </div>
                    </div>
                </div>
                <!-- Step 2: Test Selection -->
                <div id="step2" class="modal-step hidden">
                    <h3 class="modal-step-title">Select Your Test</h3>
                    <div class="modal-step-list">
                        @php
                            $testTypes = [
                                'Complete Blood Count (CBC)',
                                'Lipid Panel',
                                'Thyroid Function Tests',
                                'Diabetes Panel',
                                'Liver Function Tests',
                                'Vitamin D Test',
                                'Custom Panel'
                            ];
                        @endphp
                        @foreach($testTypes as $test)
                            <label class="modal-radio-label">
                                <input type="radio" name="testType" value="{{ $test }}" class="modal-radio">
                                <span>{{ $test }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <!-- Step 3: Schedule -->
                <div id="step3" class="modal-step hidden">
                    <h3 class="modal-step-title">Schedule Your Appointment</h3>
                    <div class="modal-step-row">
                        <div class="modal-form-group">
                            <label for="appointmentDate" class="modal-label">Preferred Date *</label>
                            <input type="date" id="appointmentDate" name="appointmentDate" required class="modal-input">
                        </div>
                        <div class="modal-form-group">
                            <label for="timeSlot" class="modal-label">Preferred Time *</label>
                            <select id="timeSlot" name="timeSlot" required class="modal-input">
                                <option value="">Select a time</option>
                                @php
                                    $timeSlots = [
                                        '8:00 AM', '8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM',
                                        '11:00 AM', '11:30 AM', '1:00 PM', '1:30 PM', '2:00 PM', '2:30 PM',
                                        '3:00 PM', '3:30 PM', '4:00 PM', '4:30 PM'
                                    ];
                                @endphp
                                @foreach($timeSlots as $slot)
                                    <option value="{{ $slot }}">{{ $slot }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-form-group">
                        <label for="notes" class="modal-label">Additional Notes</label>
                        <textarea id="notes" name="notes" rows="3" class="modal-input modal-textarea" placeholder="Any special requirements or notes..."></textarea>
                    </div>
                </div>
                <!-- Step 4: Confirmation -->
                <div id="step4" class="modal-step hidden">
                    <h3 class="modal-step-title">Confirm Your Appointment</h3>
                    <div class="modal-confirm-box">
                        <div class="modal-confirm-row">
                            <div>
                                <h4 class="modal-confirm-label">Personal Information</h4>
                                <div class="modal-confirm-info">
                                    <div id="confirmName"></div>
                                    <div id="confirmEmail"></div>
                                    <div id="confirmPhone"></div>
                                </div>
                            </div>
                            <div>
                                <h4 class="modal-confirm-label">Appointment Details</h4>
                                <div class="modal-confirm-info">
                                    <div id="confirmTest"></div>
                                    <div id="confirmDate"></div>
                                    <div id="confirmTime"></div>
                                </div>
                            </div>
                        </div>
                        <div id="confirmNotes" class="hidden">
                            <h4 class="modal-confirm-label">Additional Notes</h4>
                            <div class="modal-confirm-info" id="confirmNotesText"></div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <div class="modal-nav">
                    <button id="prevBtn" onclick="previousStep()" class="modal-btn modal-btn-outline hidden">Previous</button>
                    <div class="modal-nav-right">
                        <button id="nextBtn" onclick="nextStep()" class="modal-btn">Next</button>
                        <button id="submitBtn" onclick="submitBooking()" class="modal-btn hidden">Confirm Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentStep = 1;
const totalSteps = 4;
function showStep(step) {
    document.querySelectorAll('.modal-step').forEach(el => {
        el.classList.add('hidden');
    });
    document.getElementById(`step${step}`).classList.remove('hidden');
    document.querySelectorAll('.modal-step-indicator').forEach((el, index) => {
        const stepNum = index + 1;
        if (stepNum <= step) {
            el.classList.add('modal-step-indicator-active');
        } else {
            el.classList.remove('modal-step-indicator-active');
        }
    });
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    if (step === 1) {
        prevBtn.classList.add('hidden');
        nextBtn.classList.remove('hidden');
        submitBtn.classList.add('hidden');
    } else if (step === totalSteps) {
        prevBtn.classList.remove('hidden');
        nextBtn.classList.add('hidden');
        submitBtn.classList.remove('hidden');
        updateConfirmation();
    } else {
        prevBtn.classList.remove('hidden');
        nextBtn.classList.remove('hidden');
        submitBtn.classList.add('hidden');
    }
}
function nextStep() {
    if (validateCurrentStep()) {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }
}
function previousStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}
function validateCurrentStep() {
    const currentStepEl = document.getElementById(`step${currentStep}`);
    const requiredFields = currentStepEl.querySelectorAll('[required]');
    for (let field of requiredFields) {
        if (!field.value.trim()) {
            field.focus();
            return false;
        }
    }
    return true;
}
function updateConfirmation() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const testType = document.querySelector('input[name="testType"]:checked')?.value || '';
    const date = document.getElementById('appointmentDate').value;
    const time = document.getElementById('timeSlot').value;
    const notes = document.getElementById('notes').value;
    document.getElementById('confirmName').textContent = `${firstName} ${lastName}`;
    document.getElementById('confirmEmail').textContent = email;
    document.getElementById('confirmPhone').textContent = phone;
    document.getElementById('confirmTest').textContent = testType;
    document.getElementById('confirmDate').textContent = date;
    document.getElementById('confirmTime').textContent = time;
    if (notes.trim()) {
        document.getElementById('confirmNotes').classList.remove('hidden');
        document.getElementById('confirmNotesText').textContent = notes;
    } else {
        document.getElementById('confirmNotes').classList.add('hidden');
    }
}
function submitBooking() {
    const formData = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        testType: document.querySelector('input[name="testType"]:checked')?.value,
        appointmentDate: document.getElementById('appointmentDate').value,
        timeSlot: document.getElementById('timeSlot').value,
        notes: document.getElementById('notes').value
    };
    console.log('Booking submitted:', formData);
    alert('Appointment booked successfully! We\'ll send you a confirmation email shortly.');
    document.getElementById('bookingModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
    document.getElementById('bookingModal').querySelector('form')?.reset();
    currentStep = 1;
    showStep(1);
}
document.addEventListener('DOMContentLoaded', function() {
    showStep(1);
});
</script> 