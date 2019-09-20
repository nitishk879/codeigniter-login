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
                <p class="grid-header"><?php echo lang('create_user_heading'); ?></p>
                <div class="grid-body">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                            <?php echo form_open("register"); ?>
                            <div class="form-group input-rounded">
                                <?php echo form_input($first_name, '', 'placeholder="First Name" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($last_name, '', 'placeholder="Last Name" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo $identity_column =='email' ? "" : form_input($identity, '', 'placeholder="Username" class="form-control"') ?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($company, '', 'placeholder="Company" class="form-control"');?>
                            </div>
                            <div class="form-group input-rounded">
                                <?php echo form_input($email, '', 'placeholder="Email" class="form-control"');?>
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
                            <button type="submit" class="btn btn-primary btn-block"><?php echo lang("create_user_submit_btn"); ?></button>
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