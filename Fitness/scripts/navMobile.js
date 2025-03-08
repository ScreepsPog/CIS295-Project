document.getElementById("button1").addEventListener("click", navMobileUpdate);

function navMobileUpdate() {
    const button1 = document.getElementById("button1");
    const navExpand = document.getElementById("navExpand");
    const headerContainer = document.getElementById("headerContainer");
    if(button1.getAttribute("class") == "menuClosed") {
        button1.setAttribute("class", "menuOpened");
        navExpand.style.display = "block";
        headerContainer.style.borderBottom = "2px solid #f3a562";
        setTimeout(function() {
            document.getElementById("navExpand").style.opacity = "1";
        }, 1);
    } else {
        button1.setAttribute("class", "menuClosed");
        navExpand.style.opacity = "0"
        headerContainer.style.borderBottom = "2px solid transparent"
        setTimeout(function() {
            document.getElementById("navExpand").style.display = "none";
        }, 500);
    }
}