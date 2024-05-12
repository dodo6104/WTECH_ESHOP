


function togglePasswordVisibility(icon) {

    var passwordEntry;

    if(icon.getAttribute('id') === 'login-panel-password-icon-1'){
        passwordEntry = document.getElementById('login-panel-password-1');
    }
    else if(icon.getAttribute('id') === 'register-panel-password-icon-1'){
        passwordEntry = document.getElementById('register-panel-password-1');
    }
    else if(icon.getAttribute('id') === 'register-panel-password-icon-2'){
        passwordEntry = document.getElementById('register-panel-password-2');
    }

    // var passwordEntry = document.getElementById('password-entry');

    // Check the current type of the input
    var currentType = passwordEntry.getAttribute('type');

    // Toggle between 'password' and 'text'
    var newType = (currentType === 'password') ? 'text' : 'password';

    // Set the new type
    passwordEntry.setAttribute('type', newType);
}