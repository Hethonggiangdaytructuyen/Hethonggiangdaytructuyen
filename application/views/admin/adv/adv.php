<style type="text/css">
    .collapsed-box{ height: 460px }
</style>
<h2>Quảng cáo</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm quảng cáo</span></p>
    </div>

    <div class="form">
        <div class="minimize">
            <button class="close">X</button>
        </div>
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

    <table class="list" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="title">
                <td width="2%">id</td>
                <td width="19%">Tiêu đề</td>
                <td width="10%">Mô tả</td>
                <td width="15%">Tên người dùng</td>
                <td width="10%">Nội dung</td>
                <td width="20%">Hình ảnh</td>
                <td width="5%">Trạng thái</td>
                <td width="5%">Ngày tạo</td>
                <td width="8%">Vị trí</td>
                <td width="3%">sửa</td>
                <td width="3%">xóa</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Admin</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>2</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Admin</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>3</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Author</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>4</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Advertiser</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>5</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Customer</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>6</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Customer</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>7</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Customer</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>8</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Advertiser</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>9</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Author</td>
                <td><i class="fa fa-pencil fa-lg"></i></td>
                <td><i class="fa fa-trash fa-lg"></i></td>
            </tr>

            <tr>
                <td>10</td>
                <td>phanvanngockd@gmail.com</td>
                <td>trungtc</td>
                <td>Phan Văn Ngọc</td>
                <td>0168 3535 845</td>
                <td>Nghĩa Đô, Cầu Giấy, Hà Nội</td>
                <td>Nam</td>
                <td>Có</td>
                <td>Author</td>
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