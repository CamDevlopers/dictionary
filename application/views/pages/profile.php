<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div style="background: #<?php if(isset($success)){
                 echo "64DD17";
              } ?>;" class="mdl-typography--text-center bg-sky-no-padding">
          	<h2 class="text-white">
            <?php  
              if(isset($success)){
                 echo $success;
              }else{
                 echo "Setting up your profile!";
              }
            ?></h2>
        </div>
        
        <!-- word content -->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp form-add-new">
        <div class="mdl-typography content-list">
      		<form action="<?php echo base_url('manages/update_profile');?>" method="post">
                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input name="full_name" class="mdl-textfield__input" type="text" id="word_title" value="<?php echo set_value('full_name')?set_value('full_name'):$profile->users_full_name; ?>">
                      <label class="mdl-textfield__label" for="word_title">Display Name *</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('full_name');?></span>

                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input name="user_name" class="mdl-textfield__input" type="text" id="word_title" value="<?php echo set_value('user_name')?set_value('user_name'):$profile->users_name; ?>">
                      <label class="mdl-textfield__label" for="word_title">User Name *</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('user_name');?></span>

                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input name="password" class="mdl-textfield__input" type="password" id="word_title" value="">
                      <label class="mdl-textfield__label" for="word_title">Password *</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('password');?></span>

                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input name="re-password" class="mdl-textfield__input" type="password" id="word_title" value="">
                      <label class="mdl-textfield__label" for="word_title">Re-type Password *</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('re-password');?></span>

                    <div class="mdl-dialog__actions">
                      <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Update now</button>
                      <input type="reset" class="mdl-button mdl-js-button mdl-js-ripple-effect" value="Cancel"/>
                    </div>
                </form>
        </div>
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        