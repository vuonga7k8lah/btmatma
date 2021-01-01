<form class="ui form" action="action.php" method="post">
	<h1 style="text-align: center">Giao Diện Giải Mã</h1>
	<div class="field">
		<label>Chuỗi Ký Tự Cần Giả Mã</label>
		<input type="text" name="GiaiMa" placeholder="Nhập Chuỗi Ký Cần Giải Mã" required>
	</div>
	<div class="field">
		<label>Chọn Phương Thức Mật Mã</label>
		<select class="ui dropdown" name="Loai">
		<option value="aes-128-cbc">AES-128-CBC</option>
		<option value="AES-256-CBC">AES-256-CBC</option>
		</select>
	</div>
	<div class="field">
		<label>Nhập Mã Key</label>
		<input type="text" name="KEY" required placeholder="Nhập Mã KEY">
	</div>
	<button class="ui button" name="GiaiMaFrom" type="submit">Submit</button>
</form>

