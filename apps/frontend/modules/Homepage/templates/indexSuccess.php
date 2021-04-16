<div class="main">
    <div class="form-login">
        <br>
        <br>
        <br>
        <div class="title">Đăng nhập hệ thống</div>
        <form id="form-login" class="form" action="<?php echo url_for("ajax_login")?>">
            <div class="form-control">
                <label class="form-label">TÀI KHOẢN</label>
                <input id="inpUsername" autocomplete="off" type="text" class="form-field" name="username" />
                <div id="inpUsernameMessage" class="form-error"></div>
            </div>
            <div class="form-control">
                <label class="form-label">MẬT KHẨU</label>
                <input id="inpPassword" type="password" class="form-field" name="password" />
                <div id="inpPasswordMessage" class="form-error"></div>
            </div>
            <div class="form-control">
                <label class="form-label">Mã phần mềm - Nhận tại hotline/Zalo: 0985.20.8888</label>
                <input id="inpCode" type="text" autocomplete="off" class="form-field" name="code" />
                <div id="inpCodeMessage" class="form-error"></div>
            </div>
            <div class="form-actions">
            <div id='recaptcha' class="g-recaptcha"
                 data-sitekey="6Lem1HcUAAAAAJhnk_fpkwiHnVVXYjnRw9_65bh7"
                 data-callback="login"
                 data-size="invisible"></div>
                <button class="btn-login" id="btn-submit">Đăng nhập</button>
            </div>
        </form>
    </div>
</div>