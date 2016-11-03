<h2>Thành viên</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm thành viên</span></p>
    </div>

    <div class="form">
        <div class="minimize">
            <button class="close">X</button>
        </div>
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
                    <td><input class="note" type="text" id="err_pass" name="err_pass"></td>
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