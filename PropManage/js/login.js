const loginForm = document.getElementById("loginForm");

const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

const emailError = document.getElementById("emailError");
const passwordError = document.getElementById("passwordError");

const passwordToggle =
    document.getElementById("passwordToggle");

const eyeIcon =
    document.getElementById("eyeIcon");



/* =========================================
   SHOW / HIDE PASSWORD
========================================= */

passwordToggle.addEventListener("click", function () {

    if (passwordInput.type === "password") {

        passwordInput.type = "text";

        eyeIcon.classList.remove("fa-eye");

        eyeIcon.classList.add("fa-eye-slash");

    } else {

        passwordInput.type = "password";

        eyeIcon.classList.remove("fa-eye-slash");

        eyeIcon.classList.add("fa-eye");

    }

});



/* =========================================
   LOGIN VALIDATION
========================================= */

loginForm.addEventListener("submit", function (event) {

    event.preventDefault();

    let isValid = true;


    emailError.textContent = "";
    passwordError.textContent = "";


    /* EMAIL / USER ID */

    if (emailInput.value.trim() === "") {

        emailError.textContent =
            "Email Address/User ID is required.";

        isValid = false;
    }


    /* PASSWORD */

    if (passwordInput.value.trim() === "") {

        passwordError.textContent =
            "Password is required.";

        isValid = false;
    }


    /* FORM VALID */

    if (isValid) {

        /*
         * Backend authentication will be
         * connected here later.
         */

        console.log("Login form is valid.");

    }

});