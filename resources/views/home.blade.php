@extends('layouts.app')

@section('title', 'MedLab Pro - Advanced Diagnostic Excellence')

@section('content')
<div class="min-h-screen bg-background">
    @include('components.header')
    
    <main>
        @include('components.hero')
        @include('components.services')
        @include('components.about')
        @include('components.contact')
    </main>
    
    @include('components.footer')
    
    @include('components.booking-modal')
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const handleClick = (e) => {
        const target = e.target;
        if (target.href && target.href.includes('#')) {
            e.preventDefault();
            const id = target.href.split('#')[1];
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };

    // Add event listeners to all anchor links
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => link.addEventListener('click', handleClick));

    // Booking modal functionality
    const handleBookingOpen = () => {
        const modal = document.getElementById('bookingModal');
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    };

    document.addEventListener('openBooking', handleBookingOpen);

    // Close modal functionality
    const closeModal = () => {
        const modal = document.getElementById('bookingModal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    };

    // Close modal when clicking outside or on close button
    document.addEventListener('click', function(e) {
        const modal = document.getElementById('bookingModal');
        if (e.target === modal) {
            closeModal();
        }
    });

    const closeButtons = document.querySelectorAll('[data-close-modal]');
    closeButtons.forEach(button => {
        button.addEventListener('click', closeModal);
    });
});
</script>
@endsection 