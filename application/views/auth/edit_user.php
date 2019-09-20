<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="authentication-theme auth-style_1">
    <div class="row">
        <div class="col-12 logo-section">
            <a href="<?php echo base_url("/")?>" class="logo">
                <img src="<?php echo base_url("assets/images/logo.png");?>" alt="Svodya - Rise of Sign" />
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
            <div class="grid">
                <p class="grid-header"><?php echo lang('edit_user_heading'); ?></p>
                <p class="grid-title"><?php echo lang('edit_user_subheading'); ?></p>
                <div class="grid-body">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                            <?php echo form_open(uri_string()); ?>
                            <div class="form-group input-rounded">
                                <?php echo form_input($first_name, '', 'placeholder="First Name" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($last_name, '', 'placeholder="Last Name" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($company, '', 'placeholder="Company" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($phone, '', 'placeholder="Phone" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($password, '', 'placeholder="Password" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($password_confirm, '', 'placeholder="Password Confirm" class="form-control"');?>
                            </div>
                            <div class="form-inline">
                                <?php if ($this->ion_auth->is_admin()): ?>
                                    <h3><?php echo lang('edit_user_groups_heading');?></h3>
                                    <?php foreach ($groups as $group):?>
                                        <div class="checkbox mb-3">
                                            <?php $gID=$group['id']; $checked = null; $item = null; ?>
                                            <?php foreach($currentGroups as $grp) { if ($gID == $grp->id) { $checked= ' checked="checked"'; break; } } ?>
                                            <label>
                                                <input type="checkbox" name="groups[]" class="form-check-input" value="<?php echo $group['id'];?>" <?php echo $checked;?>>
                                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8'); ?> <i class="input-frame"></i>
                                            </label>
                                        </div>
                                    <?php endforeach?>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_hidden('id', $user->id);?>
                                <?php echo form_hidden($csrf); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><?php echo lang("edit_user_submit_btn"); ?></button>
                            <?php echo form_close(); ?>
                            <div class="signup-link">
                                <p>Already have an account?</p><?php echo anchor("/login", "Log In"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>