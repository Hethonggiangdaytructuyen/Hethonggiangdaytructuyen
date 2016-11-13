<style type="text/css">
    .collapsed-box{ height: 400px }
</style>
<h2>Môn học</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">Thêm môn học</span></p>
    </div>

    <div class="form <?php if(isset($error)){ echo 'collapsed-box'; } ?>">
        <div class="minimize">
            <button class="close">X</button>
        </div>
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
                                        <option <?php echo (set_value('cat') == $val_cat['category_id'])?'selected':''; ?> value="<?php echo $val_cat['category_id'] ?>"><?php echo $val_cat['category_name']; ?></option>
                                        <?php
                                            foreach($cat as $key_cat_sub=>$val_cat_sub):
                                                if($val_cat['category_id'] == $val_cat_sub['parent']){
                                        ?>
                                                    <option <?php echo (set_value('cat') == $val_cat_sub['category_id'])?'selected':''; ?> value="<?php echo $val_cat_sub['category_id'] ?>"><?php echo"--". $val_cat_sub['category_name']; ?></option>
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
                    <td><input tabindex="2" required type="text" name="txt_title" size="50" value="<?php echo set_value('txt_title'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                    	<input tabindex="3" type="radio" name="active" value="1" <?php echo (set_value('active') == 1)?'checked':'' ?>> Có
                        <input tabindex="4" type="radio" name="active" value="0" <?php echo (set_value('active') == 0)?'checked':'' ?>> Không
                    </td>
                    <td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="5" name="description" id="description" cols="38" rows="5" ><?php echo set_value('description'); ?></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="6" type="submit" name="submit" value="Thêm Mới">
                        <input tabindex="7" type="reset" value="Làm Lại">
                    </td>
                </tr>
               	
            </table>
        </form>
    </div>

    <table id="subject_table" class="list display norwap" width="100%">
        <thead>
            <tr class="title">
                <td class="border-right">Id</td>
                <td class="border-right">Môn học</td>
                <td class="border-right">Ngày tạo</td>
                <td class="border-right">Trạng thái</td>
                <td class="border-right">Ngành</td>
                <td class="border-right">Giới thiệu</td>
                <td class="border-right">Sửa</td>
                <td>Xóa</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach($list as $key=>$val):?>
                <tr>
                    <td class="bold"><?php echo $val['subject_id']; ?></td>
                    <td class="bold"><?php echo $val['subject_name']; ?></td>
                    <td><?php echo $val['subject_created_date']; ?></td>
                    <td><?php echo ($val['subject_active'] == 1)?'Kích hoạt':'Không Kích hoạt' ; ?></td>
                    <td><?php echo $val['category_name']; ?></td>
                    <td><?php echo $val['subject_description']; ?></td>
                    <td><a class="blue" href="./admin/edit_subject/<?php echo $val['subject_id']; ?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                    <td><a class="blue" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./admin/del_subject/<?php echo $val['subject_id']; ?>"><i class="fa fa-trash fa-lg"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#subject_table').DataTable( {
            select: true,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }
            }
        } );
    } );
</script>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
