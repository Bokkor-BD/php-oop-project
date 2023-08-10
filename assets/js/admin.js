
$(document).ready(function() {
    $('#registerBtn').on('click', function () {
        $('#loginFormSection').hide();
        $('#registerFormSection').show();
    });
    $('#registerSignBtn').on('click', function () {
        $('#registerFormSection').hide();
        $('#loginFormSection').show();
    });
    $('#forgotPasswordBtn').on('click', function () {
        $('#loginFormSection').hide();
        $('#passwordResetForm').show();
    });
    $('#backToLoginBtn').on('click', function () {
        $('#passwordResetForm').hide();
        $('#loginFormSection').show();
    });
});

// console.log('working....');