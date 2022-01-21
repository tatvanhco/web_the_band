<?php
    echo '<div class="container" id="login">
            <h2>Đăng nhập Admin</h2>
            <form class="needs-validation" action="admin/checkdangnhap.php" method="POST" novalidate>
                <div class="form-group">
                <label for="uname">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="uname" placeholder="Nhập tên đăng nhập" name="uname" required>
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Điền đầy đủ vào đây</div>
                </div>
                <div class="form-group">
                <label for="pswd">Mật khẩu:</label>
                <input type="password" class="form-control" id="pswd" placeholder="Nhập mật khẩu" name="pswd" required>
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Điền đầy đủ vào đây</div>
                <br>
                <button type="submit" class="btn btn-success" id="btn_submit" name="submit">Đăng nhập</button>
            </form>
        </div>';
?>