function togglePasswordVisibility() {
  const passwordInput = document.getElementById('password');
  const passwordIcon = document.getElementById('password-icon');

  if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      passwordIcon.classList.remove('bi-eye-fill');
      passwordIcon.classList.add('bi-eye');
  } else {
      passwordInput.type = 'password';
      passwordIcon.classList.remove('bi-eye');
      passwordIcon.classList.add('bi-eye-fill');
  }

  const passwordInput2 = document.getElementById('password2');
  const passwordIcon2 = document.getElementById('password-icon2');

  if (passwordInput2.type === 'password') {
      passwordInput2.type = 'text';
      passwordIcon2.classList.remove('bi-eye-fill');
      passwordIcon2.classList.add('bi-eye');
  } else {
      passwordInput2.type = 'password';
      passwordIcon2.classList.remove('bi-eye');
      passwordIcon2.classList.add('bi-eye-fill');
  }
}