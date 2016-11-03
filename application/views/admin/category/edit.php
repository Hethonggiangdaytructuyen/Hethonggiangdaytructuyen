<h2>Chỉnh sửa chuyên ngành</h2>
<div id="main">
    <div class="form" style="height: auto">
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tên danh mục</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_name" size="50"></td>
                    <td width="30%"></td>
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
                    <td>Thuộc ngành</td>
                    <td>
                        <select name="sl">
                            <option value="1">Ngành 1</option>
                            <option value="2">Ngành 2</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mô tả</td>
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
</div>