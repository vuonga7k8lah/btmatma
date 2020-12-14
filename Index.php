<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./semantic-ui/semantic.min.css">
    <style>
        #root {
            width: 1200px;
            margin: 60px ;
            float: left;
        }
    </style>
</head>
<body id="root">
<div style="width:550px;float: left">
<form class="ui form" action="action.php" method="post">
    <h1>From Mã Hóa</h1>
    <div class="field">
        <label>Chuỗi Ký Tự Cần Mã Hóa</label>
        <input type="text" name="MaHoa" placeholder="Nhập Chuỗi Ký Tự Vào" required>
    </div>
    <div class="field">
        <label>Nhập Mã IV</label>
        <input type="text" name="IV" required placeholder="Nhập Mã IV">
    </div>
    <div class="field">
        <label>Nhập Mã Key</label>
        <input type="text" name="KEY" required placeholder="Nhập Mã KEY">
    </div>
    <button class="ui button" name="MaHoaFrom" type="submit">Submit</button>
</form>
</div>
<div style="width:550px;float: left;margin-left: 20px">
<form class="ui form" action="action.php" method="post">
    <h1>From Giải Mã</h1>
    <div class="field">
        <label>Chuỗi Ký Tự Cần Giả Mã</label>
        <input type="text" name="GiaiMa" placeholder="Nhập Chuỗi Ký Cần Giải Mã" required>
    </div>
    <div class="field">
        <label>Nhập Mã IV</label>
        <input type="text" name="IV" required placeholder="Nhập Mã IV">
    </div>
    <div class="field">
        <label>Nhập Mã Key</label>
        <input type="text" name="KEY" required placeholder="Nhập Mã KEY">
    </div>
    <button class="ui button" name="GiaiMaFrom" type="submit">Submit</button>
</form>
</div>
<?php //require_once 'example.php';?>
</body>
</html>
