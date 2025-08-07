// Tab switching
const tabLogin = document.getElementById('tab-login');
const tabSignup = document.getElementById('tab-signup');
const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');
const formDesc = document.getElementById('form-desc');

function setTab(tab) {
    if(tab === 'login') {
        tabLogin.classList.add('active');
        tabSignup.classList.remove('active');
        loginForm.style.display = '';
        signupForm.style.display = 'none';
        formDesc.textContent = 'Medical Staff Portal';
    } else {
        tabLogin.classList.remove('active');
        tabSignup.classList.add('active');
        loginForm.style.display = 'none';
        signupForm.style.display = '';
        formDesc.textContent = 'Join our medical team';
    }
}
tabLogin.addEventListener('click', () => setTab('login'));
tabSignup.addEventListener('click', () => setTab('signup'));

// Role selection
const roleGroup = document.getElementById('role-group');
const roleOptions = roleGroup.querySelectorAll('.role-option');
const portalInfo = document.getElementById('portal-info');
const loginEmail = document.getElementById('login-email');
const signupEmail = document.getElementById('signup-email');
const licenseGroup = document.getElementById('license-group');

let selectedRole = 'doctor';
function updateRole(role) {
    selectedRole = role;
    roleOptions.forEach(opt => {
        if(opt.getAttribute('data-role') === role) {
            opt.classList.add('selected');
        } else {
            opt.classList.remove('selected');
        }
    });
    // Update portal info
    portalInfo.textContent =
        role === 'doctor' ? 'Doctor Portal Access' :
        role === 'admin' ? 'Admin Portal Access' :
        'Receptionist Portal Access';
    // Update email placeholders
    loginEmail.placeholder = signupEmail.placeholder = `${role}@healthpoint.com`;
    // Show/hide license field
    if(role === 'doctor') {
        licenseGroup.style.display = '';
    } else {
        licenseGroup.style.display = 'none';
    }
}
roleOptions.forEach(opt => {
    opt.addEventListener('click', () => updateRole(opt.getAttribute('data-role')));
});
// Set initial role
updateRole('doctor');

// Show/hide password
function togglePassword(inputId, btn) {
    const input = document.getElementById(inputId);
    if(input.type === 'password') {
        input.type = 'text';
        btn.innerHTML = '&#128064;';
    } else {
        input.type = 'password';
        btn.innerHTML = '&#128065;';
    }
}
