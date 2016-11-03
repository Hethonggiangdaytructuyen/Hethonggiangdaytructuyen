<style type="text/css">
    .collapsed-box{ height: 250px }
</style>
<h2>chuyên ngành</h2>

<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm chuyên ngành</span></p>
    </div>

    <div class="form">
        <div class="minimize">
            <button class="close">X</button>
        </div>
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
                        <input tabindex="14" type="submit" name="sumit" value="Thêm Mới">
                        <input tabindex="15" type="reset" value="Làm Lại">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <table class="list" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="title">
                <td width="5%">id</td>
                <td width="44%">chuyên ngành</td>
                <td width="5%">kích hoạt</td>
                <td width="40%">ngày tạo</td>
                <td width="3%">sửa</td>
                <td width="3%">xóa</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>4</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>5</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>6</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>7</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>8</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>9</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>10</td>
                <td>Công Nghệ Thông Tin</td>
                <td>Có</td>
                <td>10-10-2016</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>
        </tbody>
    </table>

    <div class="pagination">
        <table>
            <tr>
                <td width="80%"></td>
                <td><a href="#">First</a></td>
                <td><a href="#"><<</a></td>
                <td class="number active">1</td>
                <td class="number"><a href="#">2</a></td>
                <td class="number"><a href="#">3</a></td>
                <td class="number"><a href="#">4</a></td>
                <td><a href="#">>></a></td>
                <td><a href="#">Last</a></td>
            </tr>
        </table>
    </div>
</div>