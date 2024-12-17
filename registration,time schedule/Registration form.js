// Get the form and form inputs
const form = document.getElementById('registration-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const passwordError = document.getElementById('password-error');
const confirmPasswordError = document.getElementById('confirm-password-error');

  // Get the password and confirm password fields
  var passwordField = document.getElementById('test-password');
  var confirmPasswordField = document.getElementById('test-confirm-password');
  
  // Get the error message element
  var errorMessage = document.getElementById('error');
  
  // Add an event listener to the confirm password field
  confirmPasswordField.addEventListener('keyup', function() {
    var password = passwordField.value;
    var confirmPassword = confirmPasswordField.value;
  
    // Check if the passwords match
    if (test-password === test-confirm-password) {
      // Passwords match, clear the error message
      errorMessage.innerHTML = '';
    } else {
      // Passwords don't match, display an error message
      errorMessage.innerHTML = 'Passwords do not match';
    }
  });