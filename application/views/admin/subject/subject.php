<style type="text/css">
    .collapsed-box{ height: 360px }
</style>
<h2>Lớp học</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">Thêm lớp học</span></p>
    </div>

    <div class="form">
        <div class="minimize">
            <button class="close">X</button>
        </div>
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
                        <input tabindex="9" type="submit" name="sumit" value="Thêm Mới">
                        <input tabindex="10" type="reset" value="Làm Lại">
                    </td>
                </tr>
               	
            </table>
        </form>
    </div>

    <table class="list" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="title">
                <td width="5%">id lớp</td>
                <td width="20%">Môn học</td>
                <td width="10%">Ngày tạo</td>
                <td width="10%">Trạng thái</td>
                <td width="5%">id môn</td>
                <td width="20%">Mô tả</td>
               	 <td width="20%">Giảng viên</td>
                <td width="5%">sửa</td>
                <td width="5%">xóa</td>
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