<div style="width: 600px;margin: 20px auto">
<?php
require_once 'aes.class.php';
$a= new aes;
if (isset($_POST['MaHoaFrom'])){
// Start loop
	$data['string'] = $_POST['MaHoa'];
	$data['KEY'] = substr(sha1($_POST['KEY'],false),0,16);


// End the clock time in seconds
	$aValues=$a->encode($data['string'],$data['KEY']);
	echo 'Chuỗi Ký Tự Nhập Vào Là: '.$data['string'];
	echo "<br>";
	echo 'Chuỗi Ký Tự Đã Mã Hóa Là: '.$aValues[1];
	echo "<br>";
	echo 'Thời Gian Mã Hóa là: '.$aValues[0];
	echo "<br>";
	echo "<a href='http://127.0.0.1/BTMatMa'><button class=\"ui button\"  type=\"submit\" style='margin-top: 20px;'>Về Trang 
	Home</button></a>";
}
if (isset($_POST['GiaiMaFrom'])){
	$data['string'] = $_POST['GiaiMa'];
	$data['KEY'] = substr(sha1($_POST['KEY'],false),0,16);


// End the clock time in seconds
	$aValues=$a->decode($data['string'],$data['KEY']);
	echo 'Chuỗi Ký Tự Nhập Vào Là: '.$data['string'];
	echo "<br>";
	echo 'Chuỗi Ký Tự Giải Mã Là: '.$aValues[1];
	echo "<br>";
	echo 'Thời Gian Giải Mã là: '.$aValues[0];
	echo "<br>";
	echo "<a href='http://127.0.0.1/BTMatMa'><button class=\"ui button\"  type=\"submit\" style='margin-top: 20px;'>Về Trang 
	Home</button></a>";
}
?>
</div>
