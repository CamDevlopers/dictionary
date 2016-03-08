<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">

        <form action="<?php echo base_url();?>logins/do_login" method="post">
          <div class="logo-font android-slogan">
          	<div class="div-center demo-card-wide mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title">
			    <h2 class="mdl-card__title-text text-blue"><i class="material-icons login-icon">lock_outline</i> Login</h2>
			  </div>
			  <div class="mdl-card__supporting-text">
			    <form action="#">
				  <div class="mdl-textfield login-form mdl-js-textfield mdl-textfield--floating-label">
				    <input name="username" value="<?php echo set_value('username');?>" class="mdl-textfield__input" type="text" id="username">
				    <label class="mdl-textfield__label" for="username">Username</label>
				    <span class="text-error form-error"><?php echo form_error('username');?></span>
				  </div>
				  <div class="mdl-textfield login-form mdl-js-textfield mdl-textfield--floating-label">
				  	<input name="password" class="mdl-textfield__input" type="password" id="password">
				    <label class="mdl-textfield__label" for="password">Password</label>
				    <span class="text-error form-error"><?php echo form_error('password');?></span>
				  </div>
				</form>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			  	<button type="reset" class="mdl-button mdl-button--accent mdl-js-button mdl-button--raised mdl-js-ripple-effect">Reset</button> &nbsp;&nbsp;&nbsp;
			  	<button type="submit" class="mdl-button mdl-button--primary mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</button>
			  </div>
			</div>

          </div>
        </div>
     </form>
<?php $this->load->view('partial/footer');?>
        