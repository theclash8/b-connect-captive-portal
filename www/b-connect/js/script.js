document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    var emailInput = document.getElementById("emailValidation");
    var ageSelect = document.getElementById("ageValidation");
    var genderSelect = document.getElementById("genderValidation");
    var termsCheckbox = document.getElementById("checkboxValidation");

    // Custom validation for Email
    emailInput.oninvalid = function(event) {
        event.target.setCustomValidity("");
        if (!event.target.validity.valid) {
            event.target.setCustomValidity("Input your email address. For example: john@email.com");
        }
    };
    emailInput.oninput = function(event) {
        event.target.setCustomValidity("");
    };

    // Custom validation for Age
    ageSelect.oninvalid = function(event) {
        event.target.setCustomValidity("");
        if (!event.target.validity.valid) {
            event.target.setCustomValidity("Select your age.");
        }
    };
    ageSelect.onchange = function(event) {
        event.target.setCustomValidity("");
    };

    // Custom validation for Gender
    genderSelect.oninvalid = function(event) {
        event.target.setCustomValidity("");
        if (!event.target.validity.valid) {
            event.target.setCustomValidity("Select your gender.");
        }
    };
    genderSelect.onchange = function(event) {
        event.target.setCustomValidity("");
    };

    // Custom validation for Terms and Conditions checkbox
    termsCheckbox.oninvalid = function(event) {
        event.target.setCustomValidity("");
        if (!event.target.validity.valid) {
            event.target.setCustomValidity("You must accept the Terms & conditions to proceed.");
        }
    };
    termsCheckbox.onchange = function(event) {
        event.target.setCustomValidity("");
    };

    // Form submission handler
    form.addEventListener("submit", function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
        }
    }, false);
});