function registerValidation() {
    let name = document.getElementById("name").value;

    let text;
    if (isNaN(name)) {
        text = "Name*";
    }

    document.getElementById("errorName").innerHTML = text;
}