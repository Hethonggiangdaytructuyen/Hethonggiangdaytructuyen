<h2>Chỉnh sửa lớp học</h2>
<div id="main">
    <div class="form" style="height: auto">
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">ngành</td>
                    <td width="30%">
                        <select name="cat" id="cat" tabindex="1">
                            <?php
                                foreach($cat as $key_cat=>$val_cat):
                                    if($val_cat['parent'] == 0){
                            ?>
                                        <option <?php echo ($item['category_id'] == $val_cat['category_id'])?'selected':''; ?> value="<?php echo $val_cat['category_id'] ?>"><?php echo $val_cat['category_name']; ?></option>
                                        <?php
                                            foreach($cat as $key_cat_sub=>$val_cat_sub):
                                                if($val_cat['category_id'] == $val_cat_sub['parent']){
                                        ?>
                                                    <option <?php echo ($item['category_id'] == $val_cat_sub['category_id'])?'selected':''; ?> value="<?php echo $val_cat_sub['category_id'] ?>"><?php echo"--". $val_cat_sub['category_name']; ?></option>
                                        <?php
                                                }
                                            endforeach;
                                    }
                                endforeach;
                            ?>
                        </select>
                    </td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Môn học</td>
                    <td><input tabindex="2" required type="text" name="txt_subject_name" size="50" value="<?php echo $item['subject_name']; ?>"></td>
                    <td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td>Ngày tạo</td>
                    <td><input disabled="true" tabindex="3" required type="date" name="txt_created_date" size="50" value="<?php echo $item['subject_created_date']; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                    	<input tabindex="4" type="radio" name="active" value="1" <?php echo ($item['subject_active'] == 1)?'checked':''; ?>> Có
                        <input tabindex="5" type="radio" name="active" value="0" <?php echo ($item['subject_active'] == 0)?'checked':''; ?>> Không
                    </td>
                    <td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="7" name="description" id="description" cols="38" rows="5"><?php echo $item['subject_description']; ?></textarea></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td colspan="4">
                        <input tabindex="9" type="submit" name="submit" value="Cập nhật">
                        <input tabindex="10" type="reset" value="Làm Lại">
                    </td>
                </tr>
               	
            </table>
        </form>
    </div>
</div>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
