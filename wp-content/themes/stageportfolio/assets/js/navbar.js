function myFunction() {
    var x = document.getElementById("navbarId");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}