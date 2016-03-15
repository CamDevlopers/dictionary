<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="mdl-typography--text-center search-div bg-purple-no-padding">
          	<form action="<?php echo base_url('pages/search'); ?>" method="get">
              <div class="search-firefox mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input name="keyword" class="mdl-textfield__input" type="text" id="search_fire_field">
                <label class="mdl-textfield__label label-fire" for="search_fire_field">Type your keyword here!</label>
                <span class="text-error form-error"><?php echo isset($error)!=''?$error:''; ?></span>
              </div>

            </form>
        </div>

        <!-- word content -->
        <div class="mdl-typography content-list">
      		
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        