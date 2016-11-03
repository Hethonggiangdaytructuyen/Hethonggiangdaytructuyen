<style type="text/css">
    .collapsed-box{ height: 360px }
</style>
<h2>Bài đăng</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm bài viết</span></p>
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
                    <td width="30%"><input tabindex="1" required type="text" name="txt_title" size="50"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>avatar</td>
                    <td><input tabindex="2" required type="file" name="image"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>tác giả</td>
                    <td><input tabindex="3" required type="text" name="txt_author" size="50"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>môn học</td>
                    <td><input tabindex="4" required type="text" name="txt_subject" size="50"></td>
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
                    <td>có thể xóa</td>
                    <td>
                        <input tabindex="7" checked="checked" type="radio" name="active"> Có
                        <input tabindex="8" type="radio" name="active"> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>nội dung</td>
                    <td><textarea tabindex="9" name="content" id="content" cols="38" rows="5"></textarea></td>
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
                <td width="19%">email</td>
                <td width="10%">tên đăng nhập</td>
                <td width="15%">họ tên</td>
                <td width="10%">điện thoại</td>
                <td width="20%">địa chỉ</td>
                <td width="5%">giới tính</td>
                <td width="5%">kích hoạt</td>
                <td width="8%">quyền hạn</td>
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