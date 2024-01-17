function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Simple validation, you can add more checks as needed
    if (username === "" || email === "" || password === "") {
        alert("All fields must be filled out");
        return false;
    }

    return true;
}

