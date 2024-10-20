// script.js
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorMessage = document.getElementById("error-message");

    if (username.trim() === "" || password.trim() === "") {
        errorMessage.textContent = "Both fields are required!";
        return false;
    }

    // You can add more validations here, like checking password length
    if (password.length < 6) {
        errorMessage.textContent = "Password must be at least 6 characters!";
        return false;
    }

    return true;
}
