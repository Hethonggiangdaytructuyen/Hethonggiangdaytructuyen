<h2>Thành viên</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm thành viên</span></p>
    </div>

    <div class="form <?php if(isset($error)){ echo 'collapsed-box'; } ?>">
        <div class="minimize">
            <button class="close">X</button>
        </div>
        <form action="" method="post" onsubmit="return checkValidate()" name="form" enctype="multipart/form-data">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">họ tên</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_name" size="50" value="<?php echo set_value('txt_name'); ?>"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>số điện thoại</td>
                    <td><input tabindex="2" required type="text" name="txt_phone" size="50" onchange="checkPhone(this.value)" value="<?php echo set_value('txt_phone'); ?>"></td>
                    <td><input class="note" id="err_phone" type="text" name="err_phone"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>địa chỉ</td>
                    <td><input tabindex="3" required type="text" name="txt_address" size="50" value="<?php echo set_value('txt_address'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>email</td>
                    <td><input tabindex="4" required type="text" name="txt_email" size="50" onchange="checkEmail(this.value)" value="<?php echo set_value('txt_email'); ?>"></td>
                    <td><input class="note" id="err_email" type="text" name="err_email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>ngày sinh</td>
                    <td><input tabindex="5" required type="date" name="txt_date" size="50" value="<?php echo set_value('txt_date'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>tên đăng nhập</td>
                    <td><input tabindex="6" required type="text" name="txt_username" size="50" value="<?php echo set_value('txt_username'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mật khẩu</td>
                    <td><input tabindex="7" required type="password" name="txt_pass" size="50" onkeyup="checkPass()" value="<?php echo set_value(''); ?>"></td>
                    <td><input class="note" type="text" id="err_pass" name="err_pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>giới tính</td>
                    <td>
                        <input tabindex="8" type="radio" name="gender" value="1" <?php echo (set_value('gender') == 1)?'checked':''; ?>> Nam
                        <input tabindex="9" type="radio" name="gender" value="0" <?php echo (set_value('gender') == 0)?'checked':''; ?>> Nữ
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                        <input tabindex="10" type="radio" name="active" value="1" <?php echo (set_value('active') == 1)?'checked':''; ?>> Có
                        <input tabindex="11" type="radio" name="active" value="0" <?php echo (set_value('active') == 0)?'checked':''; ?>> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>quyền hạn</td>
                    <td>
                        <select tabindex="12" name="role" id="role">
                            <?php foreach($list_role as $key_role=>$val_role): ?>
                                <option <?php echo (set_value('role') == $val_role['role_id'])?'selected':''; ?> value="<?php echo $val_role['role_id'] ?>"><?php echo $val_role['role_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Giới thiệu</td>
                    <td><textarea tabindex="13" name="description" id="description" cols="38" rows="5"><?php echo set_value('description'); ?></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="14" type="submit" name="submit" value="Thêm Mới">
                        <input tabindex="15" type="reset" value="Làm Lại">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <table id="user_table" class="list display norwap" width="100%">
        <thead>
            <tr class="title"> 
                <td class="border-right">id</td>
                <td class="border-right">email</td>
                <td class="border-right">tên đăng nhập</td>
                <td class="border-right">họ tên</td>
                <td class="border-right">điện thoại</td>
                <td class="border-right">địa chỉ</td>
                <td class="border-right">giới tính</td>
                <td class="border-right">kích hoạt</td>
                <td class="border-right">quyền hạn</td>
                <td class="border-right">sửa</td>
                <td>xóa</td>
            </tr>
        </thead>

        <tbody>
        <?php foreach($list as $key=>$val): ?>
            <tr>
                <td class="bold"><?php echo $val['user_id']; ?></td>
                <td class="bold"><?php echo $val['user_email']; ?></td>
                <td><?php echo $val['user_name']; ?></td>
                <td><?php echo $val['user_fullname']; ?></td>
                <td><?php echo $val['user_phone']; ?></td>
                <td><?php echo $val['user_address']; ?></td>
                <td><?php echo ($val['user_gender']==1)?'Nam':'Nữ'; ?></td>
                <td><?php echo ($val['user_active']==1)?'Có':'Không'; ?></td>
                <td><?php echo $val['role_name'] ?></td>
                <td><a class="blue" href="./admin/edit_user/<?php echo $val['user_id']; ?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                <td><a class="blue" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./admin/del_user/<?php echo $val['user_id']; ?>"><i class="fa fa-trash fa-lg"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#user_table').DataTable( {
            select: true,
            ordering: false,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }
            }
        } );
    } );
</script>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
