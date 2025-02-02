function showFrame() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popupFrame").style.display = "block";
    document.getElementById("mainContent").classList.add("blurred");
    
}

function closeFrame() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popupFrame").style.display = "none";
    document.getElementById("mainContent").classList.remove("blurred");
}