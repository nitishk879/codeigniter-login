
      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input();?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
<div class="breatcome_area">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="breatcome_title">
                <div class="breatcome_title_inner">
                    <h2><?php echo $meta_tags['page_name']; ?></h2>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="<?php echo base_url("/"); ?>">home<i class="fa fa-angle-right"></i></a><?php echo $meta_tags['page_name']; ?></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog_area blog-grid blog-details-area" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog_reply">
                    <div class="reply_ttl">
                        <h1><?php echo lang('change_password_heading');?></h1>
                    </div>
                    <div class="commentst_content">
                        <p id="infoMessage"></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="em_contact_form">
                                <?php echo form_open("auth/change_password");?>
                                <div class="contact_form_inner">
                                    <div class="form_field">
                                        <div class="form_field_inner">
                                            <?php echo form_input($old_password, '', 'placeholder="'. lang('change_password_old_password_label') .'"');?>
                                        </div>
                                        <div class="form_field_inner">
                                            <?php echo form_input($new_password_confirm, '', 'placeholder="' . sprintf(lang('change_password_new_password_label'), $min_password_length) . '"');?>
                                        </div>
                                    </div>
                                    <div class="form_field">
                                        <div class="form_field_comment">
                                            <div class="field_comment_inner">
                                                <?php echo lang('login_remember_label', 'remember');?>
                                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact_bnt">
                                        <button type="submit"><?php echo lang("login_submit_btn"); ?></button>
                                    </div>
                                </div>
                                <?php echo form_close();?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
