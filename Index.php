<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./semantic-ui/semantic.min.css">
    <base href="http://127.0.0.1/BTmatma/Index.php">
    <style>
        #root {
            width: 1200px;
            margin: 60px;
            float: left;
        }
    </style>
</head>
<body id="root">
<div class="ui three item menu">
    <a href="http://127.0.0.1/BTmatma/Index.php" class="active item">Home</a>
    <a href="http://127.0.0.1/BTmatma/Index.php?action=MaHoa" class="active item">Trình Mã Hóa</a>
    <a href="http://127.0.0.1/BTmatma/Index.php?action=GiaiMa" class="active item">Trình Giải Mã</a>
</div>
<?php
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "MaHoa":
			require_once 'mahoa.php';
			break;
		case "GiaiMa":
			require_once 'giaima.php';
			break;
		default:
			true;
			break;
	}
}else{
    echo "<div style='text-align: center;'>";
    echo "<h2> Chương Trình Giải Mã Và Mã Hóa </h2>";
	echo "<h2> Main by Hiếu and Vương </h2>";
	echo "</div>";
}
?>
</body>
</html>
