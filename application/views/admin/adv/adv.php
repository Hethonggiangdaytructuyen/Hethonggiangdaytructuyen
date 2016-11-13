<style type="text/css">
    .collapsed-box{ height: 725px }
</style>
<h2>Quảng cáo</h2>
<div id="main">
    <div>
        <p id="add-prd"><span class="add_button">thêm quảng cáo</span></p>
    </div>

    <div class="form <?php if(isset($error)){ echo 'collapsed-box'; } ?>">
        <div class="minimize">
            <button class="close">X</button>
        </div>
        <form action="" method="post" name="form">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tiêu đề</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_title" size="50" value="<?php echo set_value('txt_title'); ?>"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>hãng quảng cáo</td>
                    <td><input tabindex="2" required type="text" name="txt_name" size="50" value="<?php echo set_value('txt_name'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>nội dung</td>
                    <td><textarea tabindex="3" name="content" id="content" cols="38" rows="5"><?php echo set_value('content'); ?></textarea></td>
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
                    	<input tabindex="5" type="radio" name="active" value="1" <?php echo(set_value('active') == 1)?'checked':''; ?>> Có
                        <input tabindex="6" type="radio" name="active" value="0" <?php echo(set_value('active') == 0)?'checked':''; ?>> Không
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>ngày tạo</td>
                    <td><input tabindex="7" required type="date" name="create_date" size="50" value="<?php echo(set_value('create_date')); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>vị trí</td>
                    <td>
                        <select tabindex="8" name="position" id="position">
                            <?php foreach($list_position as $key_position=>$val_position): ?>
                        	   <option <?php echo (set_value('position') == $val_position['position_id'])?'selected':''; ?> value="<?php echo $val_position['position_id']; ?>"><?php echo $val_position['posittion']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>mô tả</td>
                    <td><textarea tabindex="9" name="description" id="description" cols="38" rows="5"><?php echo set_value('description'); ?></textarea></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="10" type="submit" name="submit" value="Thêm Mới">
                        <input tabindex="11" type="reset" value="Làm Lại">
                    </td>
                </tr>
               	
            </table>
        </form>
    </div>

    <table id="advertiser_table" class="list norwap" border="1" width="100%">
        <thead>
            <tr class="title">
                <td class="border-right">id</td>
                <td class="border-right">Tiêu đề</td>
				<td class="border-right">Hãng quảng cáo</td>
				<td class="border-right">Nội dung</td>
                <td class="border-right">Ảnh</td>
                <td class="border-right">User ID</td>
                <td class="border-right">Ngày tạo</td>
				<td class="border-right">Kích hoạt</td>
                <td class="border-right">Vị trí</td>
				<td class="border-right">Mô tả</td>
                <td class="border-right">sửa</td>
                <td class="border-right">xóa</td>
            </tr>
        </thead>

        <tbody>
		 <?php
                foreach($list as $key=>$val){
                 
            ?>
            <tr>
                <td class="bold"><?php echo $val['adv_id']; ?></td>
                <td class="bold"><?php echo $val['adv_title']; ?></td>
				<td><?php echo $val['adv_name']; ?></td>
				<td><?php echo substr($val['adv_content'],0,100); ?></td>
                <td><img src="template/images/<?php echo $val['adv_img']; ?>"></td>
            
                <td><?php echo $val['user_id']; ?></td>
                <td><?php echo $val['created_date']; ?></td>
                <td><?php echo ($val['active'] == 1)?'Kích hoạt':'Không kích hoạt';?></td>
				<td><?php echo $val['position_id']; ?></td>
				<td><?php echo $val['adv_description']; ?></td>
                <td><a class="blue <?php if($val['can_delete'] == 0){ echo 'ban'; } ?>" <?php if($val['can_delete'] != 0){ ?> href="./admin/edit_adv/<?php echo $val['adv_id']; ?>" <?php } ?>><i class="fa fa-pencil fa-lg"></i></a></td>
                <td><a class="blue" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./admin/del_adv/<?php echo $val['adv_id']; ?>"><i class="fa fa-trash fa-lg"></i></a></td>
            </tr>
					<?php }
				
					?>
           
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#advertiser_table').DataTable( {
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
