var visible = true;
function hs() {
    if (visible === true) {
        visible = false;
        document.getElementById("content").style.display = "none";
    } else {
        if (visible === false) {
            visible = true;
            document.getElementById("content").style.display = "block";
        }
    }
}