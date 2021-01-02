<form class="ui form" action="action.php" method="post">
    <h1 style="text-align: center">Giao Diện Mã Hóa</h1>
    <div class="field">
        <label>Chuỗi Ký Tự Cần Mã Hóa</label>
        <input type="text" name="MaHoa" placeholder="Nhập Chuỗi Ký Tự Vào" required>
    </div>
    <div class="field">
        <label>Chọn Phương Thức Mật Mã</label>
        <select class="ui dropdown" name="Loai">
            <option value="128">AES-128-CBC</option>
            <option value="192">AES-192-CBC</option>
            <option value="256">AES-256-CBC</option>
        </select>
    </div>
    <div class="field">
        <label>Nhập Mã secret</label>
        <input type="text" name="KEY" required placeholder="Nhập Mã secret">
    </div>
    <button class="ui button" name="MaHoaFrom" type="submit">Submit</button>
</form>