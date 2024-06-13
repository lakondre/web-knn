function showPassword() {
    const passwordInput = document.getElementById('password');
    const showPasswordIcon = document.querySelector('.show-password i');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordIcon.classList.remove('fa-eye');
        showPasswordIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        showPasswordIcon.classList.remove('fa-eye-slash');
        showPasswordIcon.classList.add('fa-eye');
    }
}