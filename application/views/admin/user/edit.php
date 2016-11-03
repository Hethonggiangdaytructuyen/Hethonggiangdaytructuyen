<h2>Sửa thông tin thành viên</h2>
<div id="main">
    <form action="" method="post" onsubmit="return checkValidate()" name="form">
        <table class="table_form">
            <tr>
                <td width="30%"></td>
                <td width="10%">họ tên</td>
                <td width="30%"><input tabindex="1" required type="text" name="txt_name" size="50"></td>
                <td width="30%"></td>
            </tr>
            <tr>
                <td></td>
                <td>số điện thoại</td>
                <td><input tabindex="2" required type="text" name="txt_phone" size="50" onchange="checkPhone(this.value)"></td>
                <td><input class="note" id="err_phone" type="text" name="err_phone"></td>
            </tr>
            <tr>
                <td></td>
                <td>địa chỉ</td>
                <td><input tabindex="3" required type="text" name="txt_address" size="50"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>email</td>
                <td><input tabindex="4" required type="text" name="txt_email" size="50" onchange="checkEmail(this.value)"></td>
                <td><input class="note" id="err_email" type="text" name="err_email"></td>
            </tr>
            <tr>
                <td></td>
                <td>ngày sinh</td>
                <td><input tabindex="5" required type="date" name="txt_date" size="50"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>tên đăng nhập</td>
                <td><input tabindex="6" required type="text" name="txt_username" size="50"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>mật khẩu</td>
                <td><input tabindex="7" required type="password" name="txt_pass" size="50" onkeyup="checkPass()"></td>
                <td><input class="note" id="err_pass" type="text" name="err_pass"></td>
            </tr>
            <tr>
                <td></td>
                <td>giới tính</td>
                <td>
                    <input tabindex="8" checked="checked" type="radio" name="gender"> Nam
                    <input tabindex="9" type="radio" name="gender"> Nữ
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>kích hoạt</td>
                <td>
                    <input tabindex="10" checked="checked" type="radio" name="active"> Có
                    <input tabindex="11" type="radio" name="active"> Không
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>quyền hạn</td>
                <td>
                    <select tabindex="12" name="role" id="role">
                        <option selected="selected" value="">Admin</option>
                        <option value="">Nhà quảng cáo</option>
                        <option value="">Khách hàng</option>
                        <option value="">Tác giả</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Giới thiệu</td>
                <td><textarea tabindex="13" name="description" id="description" cols="38" rows="5"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input tabindex="14" type="submit" name="sumit" value="Cập nhật">
                    <input tabindex="15" type="reset" value="Làm Lại">
                </td>
            </tr>
        </table>
    </form>
</div>