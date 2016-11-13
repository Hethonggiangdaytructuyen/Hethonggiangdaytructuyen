<h2>Chỉnh sửa bài viết</h2>
<style>
	input[type="submit"] {
    text-align: right;
    margin-right: 10px;
    margin-top: 10px;
	height:30px;
	width:90px;
	font-weight:bold;
	border-radius:5px;
	}
	
</style>


<div id="main">
    <div class="member_form" style="height: auto;">
        <form action="" method="post" name="member_form">
            <table>
                <tr>
                    <td width="60%"><input type="text" required name="txt_title" value="<?php echo $item['article_name']; ?>" size="100%"></td>
                    <td rowspan="3" width="40%" class="second_col">
                        <ul>
                            <li>Đăng bài viết</li>
                            <li><i class="fa fa-calendar"></i>Trạng thái: <b>Đã đăng</b></li>
                            <li><i class="fa fa-eye"></i>Chế độ: <b><?php echo ($item['active'] == 1)?'Kích hoạt':'Không kích hoạt'; ?></b></li>
                            <li><i class="fa fa-calendar"></i>Được đăng vào: <b><?php echo $item['created_date']; ?></b></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"><input type="file" name="image" required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td><textarea name="content" id="content"><?php echo $item['article_content']; ?></textarea></td>
                    <td>
                        <table id="sub_table"  class="sub_table" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><input type="submit" name="submit" value="Đăng bài viết"></td>
                            </tr>
                            <tr>
                                <td>Môn học</td>
                            </tr>
                            <tr >
                                <td id="row-select">
                                    <select name="subject_cat" id="subject_cat" onclick="show()" onmouseout="show1()">
                                        <?php
                                            foreach($subject_list as $subject_key=>$subject_val):
                                        ?>
                                                <option <?php echo($subject_val['subject_id'] == $item['article_subject_id'])?'selected':''; ?> value="<?php $subject_val['subject_id']; ?>"><?php echo $subject_val['subject_name']; ?></option>
                                        <?php
                                            endforeach;
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr> 
                                <td id="row-select1">
                                    Tác giả: <?php echo $this->session->userdata('user_fullname'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td id="row-select2">Kích hoạt:
                                    <input type="radio" name="active" value="1" <?php echo($item['active'] == 1)?'checked':''; ?>>Có
                                    <input type="radio" name="active" value="0" <?php echo($item['active'] == 0)?'checked':''; ?>>Không
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
<script>
	function show(){
	
	//document.getElementById('row-select').style.height="300px";
	
	document.getElementById('sub_table').style.position = "relative";
	document.getElementById('row-select1').style.position = "absolute";
	document.getElementById('row-select2').style.position = "absolute";
	document.getElementById('row-select1').style.top= "300px";
	document.getElementById('row-select2').style.top= "320px";
	}
	
	function show1(){
		document.getElementById('row-select1').style.top = "120px";
		document.getElementById('row-select2').style.top = "140px";
	}
</script>
