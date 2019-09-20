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
                        <p class="grid-header"><?php echo lang('create_group_heading'); ?></p>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <?php echo form_open("add-group"); ?>
                                <div class="form-group">
                                    <label for="inputEmail1">Email</label>
                                    <?php echo form_input($group_name, '', 'placeholder="Group Name" class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1">Password</label>
                                    <?php echo form_input($description, '', 'placeholder="Description" class="form-control"'); ?>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary"><?php echo lang("edit_group_submit_btn"); ?></button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
