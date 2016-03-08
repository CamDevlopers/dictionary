<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div style="background: #<?php echo $result->color; ?>" class="mdl-typography--text-center bg-sky-no-padding">
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
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <span class="pull-right">Added by: <b style="color: #<?php echo $result->color; ?>;"><?php echo $result->users_full_name; ?> </b></span>
            <span>Category: <b style="color: #<?php echo $result->color; ?>;"><?php echo ucfirst($result->keyword_category); ?> </b></span>
          </div>
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        