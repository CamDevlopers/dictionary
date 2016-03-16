<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div style="background: #<?php echo $result->color; ?>" class="mdl-typography--text-center bg-sky-no-padding">
        <button onclick="goBack()" style="float: left; top: 25px;left: 10px;" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
            <i class="material-icons">keyboard_backspace</i>
          </button> 
          	<h2 class="text-white"><?php echo $result->keyword_title; ?></h2>
        </div>
        <br/>
        <!-- word content -->
          <div class="form-add-new demo-card-wide mdl-card mdl-shadow--2dp">
          <div style="padding: 20px;">
            <p class="text-flag"><b><i class="material-icons">flag</i> English: </b></p>
            <blockquote ><?php echo $result->keyword_desc_en; ?></blockquote >
            <p class="text-flag"><b><i class="material-icons">flag</i> Khmer: </b></p>
             <blockquote ><?php echo $result->keyword_desc_kh; ?></blockquote >
            <p class="text-flag"><b><i class="material-icons">collections</i> Image explanation: </b></p>
            <?php foreach($images->result() as $imgs){?>
              <img style="width:48%; float:left; padding: 10px;" src="<?php echo base_url('uploads/'.$imgs->file_name); ?>">
            <?php } ?>
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <span class="pull-right">Added by: <b style="color: #<?php echo $result->color; ?>;"><?php echo $result->users_full_name; ?> </b></span>
            <span>Category: <b style="color: #<?php echo $result->color; ?>;"><?php echo ucfirst($result->keyword_category); ?> </b></span>
          </div>
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        