<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="mdl-typography--text-center bg-sky-no-padding">
          	<h2 class="text-white">Search result of "<?php echo strtoupper($this->input->get('keyword')); ?>"</h2>
        </div>
        <br/>
        <!-- word content -->
        <?php 
          if($search_result->num_rows()>0){
            foreach ($search_result->result() as $value) {
          ?>
            <div class="form-add-new demo-card-wide mdl-card mdl-shadow--2dp">
              <div style="background: #<?php echo $value->color?>;" class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text"><a class="word-title"><?php echo $value->keyword_title?></a></h2>
              </div>
              <div class="mdl-card__supporting-text">
                <?php echo $value->keyword_desc_en?>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">attachment</i> <?php echo $value->keyword_category?>
                </a>
                <a href="<?php echo base_url('pages/detail/'.$value->keywords_id);?>" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  View Detail <i class="material-icons">arrow_forward</i>
                </a>
              </div>
              <div class="mdl-card__menu">
                  <button class="text-white-only mdl-button mdl-js-button mdl-js-ripple-effect">
                    @<?php echo $value->users_full_name?>
                  </button>
              </div>
            </div>
            <br/>
        <?php
         } }else{
        ?>
        <div class="form-add-new demo-card-wide mdl-card mdl-shadow--2dp">
          <div style="" class="mdl-card__title mdl-card--expand">
            <h2 class="">Not found!...</h2>
          </div>
        </div>
        <?php  }
        ?>
        

        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        