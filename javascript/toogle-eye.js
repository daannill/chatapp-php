const toogle = document.getElementById('icon');
const passwordInput = document.getElementById('password')

toogle.addEventListener('click', function() {
    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;

    this.classList.toggle('bi-eye');
    this.classList.toggle('bi-eye-slash');
});