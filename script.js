// Original code (client-side search/filter and booking validation)
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    if (searchForm) {
        searchForm.addEventListener('input', function() {
            console.log('Filters updated:', {
                city: document.getElementById('city').value,
                minPrice: document.getElementById('minPrice').value,
                maxPrice: document.getElementById('maxPrice').value,
                type: document.getElementById('type').value
            });
        });
    }

    // Booking form validation (original)
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            if (!name || !email || !email.includes('@')) {
                e.preventDefault();
                alert('Please enter valid name and email.');
            }
        });
    }

    // New: Login form validation
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            if (!email || !password) {
                e.preventDefault();
                alert('Please enter email and password.');
            } else if (!email.includes('@')) {
                e.preventDefault();
                alert('Please enter a valid email.');
            }
        });
    }

    // New: Signup form validation
    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            if (!name || !email || !password || !confirmPassword) {
                e.preventDefault();
                alert('Please fill all fields.');
                return;
            }
            if (!email.includes('@')) {
                e.preventDefault();
                alert('Please enter a valid email.');
                return;
            }
            if (password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters.');
                return;
            }
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match.');
            }
        });
    }
});
