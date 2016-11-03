<h2>Chỉnh sửa bài viết</h2>

<div id="main">
    <div class="member_form" style="height: auto;">
        <form action="" method="post" name="member_form">
            <table>
                <tr>
                    <td width="60%"><input type="text" required name="txt_title" value="Tiêu đề bài viết" size="100%"></td>
                    <td rowspan="3" width="40%" class="second_col">
                        <ul>
                            <li>Đăng bài viết</li>
                            <li><i class="fa fa-calendar"></i>Trạng thái: <b>Đã đăng</b></li>
                            <li><i class="fa fa-eye"></i>Chế độ xem: <b>Public</b></li>
                            <li><i class="fa fa-calendar"></i>Được đăng vào: <b>Th10 5, 2016 @ 14:10</b></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"><input type="file" name="image" required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td><textarea name="content" id="content"></textarea></td>
                    <td>
                        <table class="sub_table" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><input type="submit" name="submit" value="Đăng bài viết"></td>
                            </tr>
                            <tr>
                                <td>Chuyên mục</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Chưa được phân loại</li>
                                        <li><input type="checkbox">Chuyên mục 1</li>
                                        <li><input type="checkbox">Chuyên mục 2</li>
                                        <li><input type="checkbox">Chuyên mục 3</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace('content');
</script>