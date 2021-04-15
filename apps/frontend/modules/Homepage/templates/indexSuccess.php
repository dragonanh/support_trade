<div class="main">
    <div class="form-login">
        <br>
        <br>
        <br>
        <div class="title">Đăng nhập hệ thống</div>
        <form class="form">
            <div class="form-control">
                <label class="form-label">TÀI KHOẢN</label>
                <input id="inpUsername" id-error="inpUsernameMessage" type="text" class="form-field" name="username" />
                <div id="inpUsernameMessage" class="form-error"></div>
            </div>
            <div class="form-control">
                <label class="form-label">MẬT KHẨU</label>
                <input id="inpPassword" type="password" class="form-field" name="password" />
                <div id="inpPasswordMessage" class="form-error"></div>
            </div>
            <div class="form-control">
                <label class="form-label">Mã phần mềm - Nhận tại hotline/Zalo: 0985.20.8888</label>
                <input id="inpCode" type="text" class="form-field" name="code" />
                <div id="inpCodeMessage" class="form-error"></div>
            </div>
            <div class="form-actions">
                <button class="btn-login" type="button" onclick="openPopup()" name="btn_login">Đăng nhập</button>
            </div>
        </form>
    </div>
</div>