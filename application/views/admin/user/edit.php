<h2>Sửa thông tin thành viên</h2>
<div id="main">
    <form method="post" onsubmit="return checkValidate()" name="form" enctype="multipart/form-data">
        <table class="table_form">
            <tr>
                <td width="30%"></td>
                <td width="10%">họ tên</td>
                <td width="30%"><input tabindex="1" required type="text" name="txt_name" size="50" value="<?php echo $item['user_fullname']; ?>"></td>
                <td width="30%"></td>
            </tr>
            <tr>
                <td></td>
                <td>số điện thoại</td>
                <td><input tabindex="2" required type="text" name="txt_phone" size="50" onchange="checkPhone(this.value)" value="<?php echo $item['user_phone']; ?>"></td>
                <td><input class="note" id="err_phone" type="text" name="err_phone"></td>
            </tr>
            <tr>
                <td></td>
                <td>địa chỉ</td>
                <td><input tabindex="3" required type="text" name="txt_address" size="50" value="<?php echo $item['user_address']; ?>"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>email</td>
                <td><input tabindex="4" required type="text" name="txt_email" size="50" onchange="checkEmail(this.value)" value="<?php echo $item['user_email']; ?>"></td>
                <td><input class="note" id="err_email" type="text" name="err_email"></td>
            </tr>
            <tr>
                <td></td>
                <td>ngày sinh</td>
                <td><input tabindex="5" required type="date" name="txt_date" size="50" value="<?php echo $item['user_birthday']; ?>"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>tên đăng nhập</td>
                <td><input tabindex="6" required type="text" name="txt_username" size="50" value="<?php echo $item['user_name']; ?>"></td>
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
                    <input tabindex="8" type="radio" name="gender" value="1" <?php echo ($item['user_gender'] == 1)?'checked':''; ?>> Nam
                    <input tabindex="9" type="radio" name="gender" value="0" <?php echo ($item['user_gender'] == 0)?'checked':''; ?>> Nữ
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>kích hoạt</td>
                <td>
                    <input tabindex="10" type="radio" name="active" value="1" <?php echo ($item['user_active'] == 1)?'checked':''; ?>> Có
                    <input tabindex="11" type="radio" name="active" value="0" <?php echo ($item['user_active'] == 0)?'checked':''; ?>> Không
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>quyền hạn</td>
                <td>
                    <select tabindex="12" name="role" id="role">
                        <?php foreach($list as $key=>$val): ?>
                            <option <?php echo ($item['user_role_id'] == $val['role_id'])?'selected':''; ?> value="<?php echo $val['role_id']; ?>"><?php echo $val['role_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Giới thiệu</td>
                <td><textarea tabindex="13" name="description" id="description" cols="38" rows="5"><?php echo $item['user_description']; ?></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input tabindex="14" type="submit" name="submit" value="Cập nhật">
                    <input tabindex="15" type="reset" value="Làm Lại">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
