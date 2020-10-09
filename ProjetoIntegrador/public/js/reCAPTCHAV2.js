

function validateRecaptcha() {
    var response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert("Você não validou o reCAPTCHA");
        return false;
    } else {
        return true;
    }
}