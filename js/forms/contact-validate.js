function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var confirmEmail = document.getElementById('confirm_email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    // Reset previous error messages
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function (element) {
        element.style.display = 'none';
    });

    // Flag to check if there are any errors
    var hasErrors = false;

    // Validate name
    if (name === '') {
        document.getElementById('name-error').style.display = 'block';
        hasErrors = true;
    }

    // Validate email
    if (!isValidEmail(email)) {
        document.getElementById('email-error').style.display = 'block';
        hasErrors = true;
    }

    // Validate confirm email
    if (email !== confirmEmail || !isValidEmail(confirmEmail)) {
        document.getElementById('confirm-email-error').style.display = 'block';
        hasErrors = true;
    }

    // Validate subject
    if (subject === '') {
        document.getElementById('subject-error').style.display = 'block';
        hasErrors = true;
    }

    // Validate message
    if (message === '') {
        document.getElementById('message-error').style.display = 'block';
        hasErrors = true;
    }

    // Display alert if there are errors
    if (hasErrors) {
        alert('Please correct the highlighted errors before submitting the form.');
    }
}

function isValidEmail(email) {
    // Basic email validation using a regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}