onload();

document.querySelectorAll('.form-field').forEach(item => {
    item.addEventListener('keyup', event => {
        event.target.nextElementSibling.innerText = "";
    })
});

function validate(event) {
    event.preventDefault();
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

    grecaptcha.execute();
}

function onload() {
    var element = document.getElementById('btn-submit');
    element.onclick = validate;
  }

function login(token){
    var obj = document.getElementById("form-login");
    var url = obj.getAttribute("action");

    var username = document.getElementById("inpUsername").value;
    var password = document.getElementById("inpPassword").value;
    var code = document.getElementById("inpCode").value;

    resetMessage();

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if(response.errorCode === 0){
                openPopup();
            }else{
                setMessage("inpUsernameMessage", response.data.usernameMessage);
                setMessage("inpPasswordMessage", response.data.passwordMessage);
                setMessage("inpCodeMessage", response.data.codeMessage);
            }
        }
    };
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username+"&password="+password+"&code="+code+"&token="+token);
}

function resetMessage(){
    setMessage("inpUsernameMessage", "");
    setMessage("inpPasswordMessage", "");
    setMessage("inpCodeMessage", "");
}

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
            } else {
                width++;
                elem.style.width = width + "%";
                document.getElementById("processing").innerText = width + "%";
            }
        }
    }
}

function openPopup() {
    document.getElementById("login-popup").checked = true;
    move();
}

function closePopup(){
    document.getElementById("login-popup").checked = false;
}

function setMessage(id, message) {
    document.getElementById(id).innerText = message;
}