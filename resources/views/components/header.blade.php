<header class="site-header">
    <div class="header-container">
        <div class="header-row">
            <!-- Logo -->
            <div class="logo-group">
                <div class="logo-icon">
                    <span class="logo-text">ML</span>
                </div>
                <span class="logo-title">MedLab Pro</span>
            </div>

            <!-- Desktop Navigation -->
            <nav class="nav desktop-nav">
                <a href="#home" class="nav-link">Home</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#contact" class="nav-link">Contact</a>
            </nav>

            <!-- Contact Info & CTA -->
            <div class="header-contact">
                <div class="header-phone">
                    <i data-lucide="phone" class="icon-sm"></i>
                    <span>(555) 123-4567</span>
                </div>
                <button 
                    class="cta-btn" 
                    onclick="document.dispatchEvent(new CustomEvent('openBooking'))"
                >
                    Book Appointment
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button
                onclick="toggleMobileMenu()"
                class="mobile-menu-btn"
                id="mobileMenuButton"
            >
                <i data-lucide="menu" class="icon-md" id="menuIcon"></i>
                <i data-lucide="x" class="icon-md hidden" id="closeIcon"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu hidden" id="mobileMenu">
            <nav class="nav mobile-nav">
                <a href="#home" class="nav-link" onclick="toggleMobileMenu()">Home</a>
                <a href="#services" class="nav-link" onclick="toggleMobileMenu()">Services</a>
                <a href="#about" class="nav-link" onclick="toggleMobileMenu()">About</a>
                <a href="#contact" class="nav-link" onclick="toggleMobileMenu()">Contact</a>
                <div class="mobile-contact">
                    <div class="header-phone">
                        <i data-lucide="phone" class="icon-sm"></i>
                        <span>(555) 123-4567</span>
                    </div>
                    <button 
                        class="cta-btn" 
                        onclick="document.dispatchEvent(new CustomEvent('openBooking'))"
                    >
                        Book Appointment
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
}
</script> 