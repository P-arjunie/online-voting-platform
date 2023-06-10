// Get the form and form inputs
const form = document.getElementById('registration-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const passwordError = document.getElementById('password-error');
const confirmPasswordError = document.getElementById('confirm-password-error');

// Add event listener to the form on submit
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  // Get the values entered by the user
  const username = usernameInput.value;
  const password = passwordInput.value;
  const confirmPassword = confirmPasswordInput.value;

  // Reset error messages
  passwordError.textContent = '';
  confirmPasswordError.textContent = '';

  // Perform validation
  if (username.trim() === '') {
    alert('Please enter a username');
    return;
  }

  if (password.trim() === '') {
    passwordError.textContent = 'Please enter a password';
    return;
  }

  if (confirmPassword.trim() === '') {
    confirmPasswordError.textContent = 'Please confirm the password';
    return;
  }

  if (password !== confirmPassword) {
    confirmPasswordError.textContent = 'Passwords do not match';
    return;
  }

  // If validation passes, proceed with form submission
  // You can replace the alert below with your desired logic
  alert('Registration successful');
});