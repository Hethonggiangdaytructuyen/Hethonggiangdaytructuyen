<style type="text/css">
    .collapsed-box{ height: 400px }
</style>
<h2>chuyên ngành</h2>

<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm chuyên ngành</span></p>
    </div>

    <div class="form <?php if(isset($error)){ echo 'collapsed-box'; } ?>">
        <div class="minimize">
            <button class="close">X</button>
        </div>
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tên danh mục</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_title" size="50" value="<?php echo set_value('txt_title'); ?>"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>kích hoạt</td>
                    <td>
                        <input tabindex="2" type="radio" name="active" value="1" <?php echo(set_value('active') == 1)?'checked':''; ?>> Có
                        <input tabindex="3" type="radio" name="active" value="0" <?php echo(set_value('active') == 0)?'checked':''; ?>> Không
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
                                foreach($list as $key_cat=>$val_cat):
                                    if($val_cat['parent'] == 0 && $val_cat['can_delete'] != 0){
                            ?>
                                        <option <?php echo(set_value('cat') == $val_cat['category_id'])?'selected':''; ?> value="<?php echo $val_cat['category_id']; ?>"><?php echo $val_cat['category_name']; ?></option>
                            <?php
                                    }
                                endforeach;
                            ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="5" name="description" id="description" cols="38" rows="5"><?php echo set_value('description'); ?></textarea></td>
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

    <table id="category_table" class="list display norwap" width="100%">
        <thead>
            <tr class="title">
                <td class="border-right">Id</td>
                <td class="border-right">Chuyên ngành</td>
                <td class="border-right">Kích hoạt</td>
                <td class="border-right">Ngày tạo</td>
                <td class="border-right">Mô tả</td>
                <td class="border-right">Sửa</td>
                <td class="border-right">Xóa</td>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($list as $key=>$val):
                    if($val['parent'] == 0){
            ?>
                    <tr>
                        <td class="bold"><?php echo $val['category_id']; ?></td>
                        <td class="text-left bold"><?php echo $val['category_name']; ?></td>
                        <td><?php echo ($val['active'] == 1)?'Kích hoạt':'Không kích hoạt'; ?></td>
                        <td><?php echo $val['created_date']; ?></td>
                        <td><?php echo $val['category_description']; ?></td>
                        <td><a class="blue <?php if($val['can_delete'] == 0){ echo 'ban'; } ?>" <?php if($val['can_delete'] != 0){ ?> href="./admin/edit_category/<?php echo $val['category_id']; ?>" <?php } ?>><i class="fa fa-pencil fa-lg"></i></a></td>
                        <td><a class="blue <?php if($val['can_delete'] == 0){ echo 'ban'; } ?>" <?php if($val['can_delete'] != 0){ ?> onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./admin/del_category/<?php echo $val['category_id']; ?>"<?php } ?>><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                    <?php
                        foreach($list as $key_sub=>$val_sub):
                            if($val['category_id'] == $val_sub['parent']){
                    ?>
                                <tr>
                                    <td class="bold"><?php echo $val_sub['category_id']; ?></td>
                                    <td class="text-left bold"><?php echo"----". $val_sub['category_name']; ?></td>
                                    <td><?php echo ($val_sub['active'] == 1)?'Kích hoạt':'Không kích hoạt'; ?></td>
                                    <td><?php echo $val_sub['created_date']; ?></td>
                                    <td><?php echo $val_sub['category_description']; ?></td>
                                    <td><a class="blue" href="./admin/edit_category/<?php echo $val_sub['category_id']; ?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                                    <td><a class="blue" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./admin/del_category/<?php echo $val_sub['category_id']; ?>"><i class="fa fa-trash fa-lg"></i></a></td>
                                </tr>
                    <?php
                            }
                        endforeach;
                    }
                endforeach;
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#category_table').DataTable( {
            select: true,
            ordering: false,
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
