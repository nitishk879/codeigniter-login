<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="authentication-theme auth-style_1">
    <div class="row">
        <div class="col-12 logo-section">
            <a href="<?php echo base_url("/")?>" class="logo">
                <img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="Svodya - Rise of Sign" />
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
            <div class="grid">
                <div class="grid-body">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                            <h1 class="text-center"><?php echo lang('login_heading'); ?></h1>
                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                            <?php echo form_open("login"); ?>
                                <div class="form-group input-rounded">
                                    <?php echo form_input($identity, '', 'placeholder="Username / email" class="form-control"');?>
                                </div>
                                <div class="form-group input-rounded">
                                    <?php echo form_input($password, '', 'placeholder="Password" class="form-control"');?>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="form-check-input" checked'); ?> Remember Me <i class="input-frame"></i>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"><?php echo lang("login_submit_btn"); ?></button>
                            <?php echo form_close(); ?>
                            <div class="signup-link">
                                <p>Don't have an account yet?</p><?php echo anchor("/register", "Register"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>