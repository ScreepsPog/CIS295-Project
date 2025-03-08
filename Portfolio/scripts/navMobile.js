document.getElementById("button1").addEventListener("click", navMobileUpdate);

function navMobileUpdate() {
    const button1 = document.getElementById("button1");
    const navExpand = document.getElementById("navExpand");
    const navContainer = document.getElementById("navContainer");
    const navName = document.getElementById("navName");
    if(button1.getAttribute("class") == "menuClosed") {
        button1.setAttribute("class", "menuOpened");
        navExpand.style.display = "block";
        navContainer.style.borderBottom = "1px solid #666";
        setTimeout(function() {
            document.getElementById("navExpand").style.opacity = "1";
        }, 1);
    } else {
        button1.setAttribute("class", "menuClosed");
        navExpand.style.opacity = "0"
        navContainer.style.borderBottom = "1px solid transparent"
        setTimeout(function() {
            document.getElementById("navExpand").style.display = "none";
        }, 500);
    }
}