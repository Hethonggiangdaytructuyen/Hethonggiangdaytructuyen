<style type="text/css">
    .collapsed-box{ height: 1080px }
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
        <form action="" method="post" name="form" enctype="multipart/form-data">
            <table class="table_form">
                <tr>
                    <td width="30%"></td>
                    <td width="10%">tiêu đề</td>
                    <td width="30%"><input tabindex="1" required type="text" name="txt_title" size="50" value="<?php echo set_value('txt_title'); ?>"></td>
                    <td width="30%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>avatar</td>
                    <td><input tabindex="2" required type="file" name="article_image"><input type="hidden" name="article_image" value="<?php echo set_value('article_image'); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>tác giả</td>
                    <td>
                        <input disabled="true" type="text" name="txt_author" tabindex="3" required value="<?php echo $this->session->userdata('user_fullname'); ?>">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>môn học</td>
                    <td>
                        <select tabindex="4" name="subject_cat" id="subject_cat">
                            <?php
                                foreach($subject_list as $subject_key=>$subject_value):
                            ?>
                                    <option <?php echo (set_value('subject_cat') == $subject_value['subject_id'])?'selected':''; ?> value="<?php echo $subject_value['subject_id']; ?>"><?php echo $subject_value['subject_name']; ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <?php if($this->session->userdata('user_role_id') == 1){ ?>
                    <tr>
                        <td></td>
                        <td>kích hoạt</td>
                        <td>
                            <input tabindex="5" type="radio" name="active" value="1" <?php echo (set_value('active') == 1)?'checked':''; ?>>Có
                            <input tabindex="6" type="radio" name="active" value="0" <?php echo (set_value('active') == 0)?'checked':''; ?>>Không
                        </td>
                        <td></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="bold uppercase">nội dung bài viết</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4"><textarea tabindex="7" name="content" id="content"><?php echo set_value('content'); ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input tabindex="8" type="submit" name="submit" value="Thêm Mới">
                        <input tabindex="9" type="reset" value="Làm Lại">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>

    <table class="list" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="title">
                <td width="2%">id</td>
                <td width="19%">tiêu đề</td>
                <td width="10%">tác giả</td>
                <td width="15%">môn học</td>
                <td width="10%">ngày tạo</td>
                <td width="20%">nội dung</td>
                <td width="5%">kích hoạt</td>
                <td width="8%">ảnh giới thiệu</td>
                <td width="3%">sửa</td>
                <td width="3%">xóa</td>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($list as $key=>$val):
            ?>
                    <tr>
                        <td><?php echo $val['article_id']; ?></td>
                        <td><?php echo $val['article_name']; ?></td>
                        <td><?php echo $val['user_fullname']; ?></td>
                        <td><?php echo $val['subject_name']; ?></td>
                        <td><?php echo $val['created_date']; ?></td>
                        <td><?php echo substr($val['article_content'],0,100); ?></td>
                        <td><?php echo ($val['active'] == 1)?'Kích hoạt':'Không kích hoạt'; ?></td>
                        <td><img width="60" src="template/images/admin/<?php echo $val['article_image']; ?>" /></td>
                        <td><a <?php if($val['active'] == 0){ ?> href="./admin/edit_article/<?php echo $val['article_id']; ?>" <?php }else{ ?> class="ban" onclick="return confirm('Bạn không thể sửa bài viết đã được kích hoạt!')" <?php } ?>><i class="fa fa-pencil fa-lg"></i></a></td>
                        <td><i class="fa fa-trash fa-lg"></i></td>
                    </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>
<?php if(isset($error)){ ?>
    <script>alert('<?php echo $error; ?>')</script>
<?php } ?>
