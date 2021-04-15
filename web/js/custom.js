document.addEventListener("keyup", function (e) {
    e.target.nextElementSibling.innerText = "";
})

var i = 0;
function move() {
    if (i === 0) {
        i = 1;
        var elem = document.getElementById("progress-bar");
        var width = 1;
        var id = setInterval(frame, 50);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
                closePopup();
                setMessage("inpCodeMessage", "Mã phần mềm không chính xác");
            } else {
                width++;
                elem.style.width = width + "%";
                document.getElementById("processing").innerText = width + "%";
            }
        }
    }
}

function openPopup() {
    var username = document.getElementById("inpUsername").value;
    var password = document.getElementById("inpPassword").value;
    var code = document.getElementById("inpCode").value;

    if(username === ""){
        setMessage("inpUsernameMessage", "Vui lòng nhập Tài khoản");
        return false;
    }
    if(password === ""){
        setMessage("inpPasswordMessage", "Vui lòng nhập Mật khẩu");
        return false;
    }
    if(code === ""){
        setMessage("inpCodeMessage", "Vui lòng nhập Mã phần mềm");
        return false;
    }

    setMessage("inpUsernameMessage", "");
    setMessage("inpPasswordMessage", "");
    setMessage("inpCodeMessage", "");

    document.getElementById("login-popup").checked = true;
    move();
}

function closePopup(){
    document.getElementById("login-popup").checked = false;
}

function setMessage(id, message) {
    document.getElementById(id).innerText = message;
}