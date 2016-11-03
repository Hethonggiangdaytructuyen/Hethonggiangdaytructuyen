<h2>Chỉnh sửa quảng cáo</h2>
<div id="main">
    <div class="form" style="height: auto">
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tiêu đề</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_tilte" size="50"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>hãng quảng cáo</td>
                    <td><input tabindex="2" required type="text" name="txt_user_id" size="50"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>nội dung</td>
                    <td><textarea tabindex="3" name="content" id="content" cols="38" rows="5"></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>hình ảnh</td>
                    <td><input tabindex="4" required type="file" name="file_image" size="50"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                        <input tabindex="5" checked="checked" type="radio" name="active"> Có
                        <input tabindex="6" type="radio" name="active"> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>ngày tạo</td>
                    <td><input tabindex="7" required type="date" name="create_date" size="50"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>vị trí</td>
                    <td>
                        <select tabindex="8" name="position">
                            <option value="left_sidebar">Left Sidebar</option>
                            <option value="footer">Footer</option>
                            <option value="header">Header</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="9" name="description" id="description" cols="38" rows="5"></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="10" type="submit" name="sumit" value="Thêm Mới">
                        <input tabindex="11" type="reset" value="Làm Lại">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>