<h2>Chỉnh sửa chuyên ngành</h2>
<div id="main">
    <div class="form" style="height: auto">
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tên danh mục</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_title" size="50" value="<?php echo $item['category_name']; ?>"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                        <input tabindex="2" type="radio" name="active" value="1" <?php echo($item['active'] == 1)?'checked':''; ?>> Có
                        <input tabindex="3" type="radio" name="active" value="0" <?php echo($item['active'] == 0)?'checked':''; ?>> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Thuộc ngành</td>
                    <td>
                        <select name="cat" id="cat" tabindex="4">
                            <option value="0">Lựa chọn ngành</option>
                            <?php
                                foreach($list as $key=>$val):
                                    if($val['parent'] == 0):
                            ?>
                                        <option <?php echo ($item['parent'] == $val['category_id'])?'selected':''; ?> value="<?php echo $val['category_id']; ?>"><?php echo $val['category_name']; ?></option>
                            <?php
                                    endif;
                                endforeach;
                            ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="5" name="description" id="description" cols="38" rows="5"><?php echo $item['category_description']; ?></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="6" type="submit" name="submit" value="Cập nhật">
                        <input tabindex="7" type="reset" value="Làm Lại">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
