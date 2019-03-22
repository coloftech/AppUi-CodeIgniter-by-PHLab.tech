<main class="app-layout-content">
 <div class="row  ">
   <div class="col-md-12"> 
    <br/>      
                                <!-- Login card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Login</h3>
                                        <div class="card-block">

        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>

                                            <form action="<?php echo base_url(); ?>loginMe" method="post">
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_email">Email</label>
                                                    <input type="email" class="form-control" id="frontend_login_email" placeholder="Email" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="frontend_login_password" placeholder="Password" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
        <a href="<?php echo base_url() ?>forgotPassword">Forgot Password</a>  
                                      </label>
                                                </div>
                                                <button type="submit" class="btn btn-app-blue btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

                              <!-- Sign up -->
                                <div class="col-md-6">
                                    <div class="card hidden">
                                        <h3 class="card-header h4">Sign up</h3>
                                        <div class="card-block">
                                            <form class="form-horizontal" action="index.html" method="post">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_username">Username</label>
                                                        <input class="form-control" type="text" id="frontend_signup_username" placeholder="Username" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_email">Email</label>
                                                        <input class="form-control" type="email" id="frontend_signup_email" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_password">Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_confirm_password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <label for="frontend_signup_terms" class="css-input switch switch-sm switch-app">
                    <input type="checkbox" id="frontend_signup_terms" name="frontend_signup_terms" /><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
                  </label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-app btn-block" type="submit">Sign Up</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End sign up -->

   </div>
 </div>`
</main>