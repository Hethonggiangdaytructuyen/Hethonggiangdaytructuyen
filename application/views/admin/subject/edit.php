<h2>Chỉnh sửa lớp học</h2>
<div id="main">
    <div class="form" style="height: auto">
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">Mã ngành</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_tilte" size="50"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Môn học</td>
                    <td><input tabindex="2" required type="text" name="txt_description" size="50"></td>
                    <td><input class="note" type="text" name="err_phone"></td>
                </tr>
                 <tr>
                    <td></td>
                    <td>Ngày tạo</td>
                    <td><input tabindex="3" required type="date" name="create_date" size="50"></td>
                    <td><input class="note" type="text" name="err_pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Trạng thái</td>
                    <td>
                    	<input tabindex="4" checked="checked" type="radio" name="active"> Có
                        <input tabindex="5" type="radio" name="active"> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mã môn</td>
                    <td><input tabindex="6" required type="text" name="txt_tilte" size="50"></td>
                    <td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="7" name="description" id="description" cols="38" rows="5"></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Giảng viên </td>
                    <td><input tabindex="8" required type="text" name="txt_user_id" size="50"></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td colspan="4">
                        <input tabindex="9" type="submit" name="sumit" value="Cập nhật">
                        <input tabindex="10" type="reset" value="Làm Lại">
                    </td>
                </tr>
               	
            </table>
        </form>
    </div>
</div>