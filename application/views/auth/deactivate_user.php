<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                    <a href=""><?php echo $meta_tags['page_name']; ?></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url("/"); ?>">home<i class="fa fa-angle-right"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $meta_tags['page_name']; ?></li>
            </ol>
        </nav>
        <div class="content-viewport">
            <div class="row">
                <div class="col-lg-6 equel-grid">
                    <div class="grid">
                        <p class="grid-header"><?php echo lang('deactivate_heading'); ?></p>
                        <p class="grid-header"><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <?php echo form_open("remove-user/{$user->id}"); ?>
                                <div class="form-group">
                                    <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                                    <input type="radio" name="confirm" value="yes" checked="checked" />
                                    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                                    <input type="radio" name="confirm" value="no" />
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1">Password</label>
                                    <?php echo form_hidden($csrf); ?>
                                    <?php echo form_hidden(array('id' => $user->id)); ?>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary"><?php echo lang("deactivate_submit_btn"); ?></button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
