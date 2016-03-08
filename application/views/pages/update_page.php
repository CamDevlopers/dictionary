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
                 echo 'Editing "'.$result->keyword_title.'"';
              }
            ?></h2>
        </div>
        
        <!-- word content -->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp form-add-new">
        <div class="mdl-typography content-list">
      		<form action="<?php echo base_url('manages/update_word');?>" method="post">
                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input name="title" class="mdl-textfield__input" type="text" id="word_title" value="<?php echo set_value('title')?set_value('title'):$result->keyword_title; ?>">
                      <label class="mdl-textfield__label" for="word_title">Technical word *</label>

                    </div>
                    <span class="text-error form-error"><?php echo form_error('title');?></span>

                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <select name="category" class="mdl-textfield__input">
                        <option value=""></option>
                        <option <?php echo set_value('category')=='general'|| $result->keyword_category=='general'?'selected="selected"':''; ?> value="general">General</option>
                        <option <?php echo set_value('category')=='networking' || $result->keyword_category=='networking'?'selected="selected"':''; ?> value="networking">Networking</option>
                        <option <?php echo set_value('category')=='programming' || $result->keyword_category=='programming'?'selected="selected"':''; ?> value="programming">Programming</option>
                      </select>
                      <label class="mdl-textfield__label" for="word_title">Category *</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('category');?></span>

                    
                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <textarea name="desc_en" class="mdl-textfield__input" type="text" rows= "3" id="en_description" ><?php echo set_value('desc_en')?set_value('desc_en'):$result->keyword_desc_en; ?></textarea>
                      <label  class="mdl-textfield__label" for="en_description">Description in English *</label>
                    </div>

                    <span class="text-error form-error"><?php echo form_error('desc_en');?></span>

                    <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <textarea name="desc_kh" class="mdl-textfield__input" type="text" rows= "3" id="kh_description" ><?php echo set_value('desc_kh')?set_value('desc_kh'):$result->keyword_desc_kh; ?></textarea>
                      <label class="mdl-textfield__label" for="kh_description">Description in Khmer</label>
                    </div>
                    <span class="text-error form-error"><?php echo form_error('desc_kh');?></span>
                    <input type="hidden" name="id" value="<?php echo $result->keywords_id;?>"/>
                    <div class="mdl-dialog__actions">
                      <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Update now</button>
                      <input type="reset" class="mdl-button mdl-js-button mdl-js-ripple-effect" value="Cancel"/>
                    </div>
                </form>
        </div>
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        