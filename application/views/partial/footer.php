<footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>
          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Copyright © 2016 PNC | Designed By PNC Team</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>
        </footer>
      </div>
    </div>
    <?php 
    if($this->uri->segment(1)=='' || $this->uri->segment(1)=='pages'){
    ?>
      <div id="btn-add"> <div class="tooltip"><span id="animation">Click button to start search</span></div>
    <a id="show-dialog" class="btn-search-animation mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"></a></div>
    <?php } ?>
    
     <dialog class="mdl-dialog">
       <form action="<?php echo base_url('pages/search'); ?>">
          <h4 class="mdl-dialog__title">Type your keyword here!</h4>
          <div class="mdl-dialog__content">
            <div class="form-100 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input name="keyword" class="mdl-textfield__input" type="text" id="sample3">
              <label class="mdl-textfield__label" for="sample3">Keyword...</label>
            </div>
          </div>
          <div class="mdl-dialog__actions">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Search</button>
            <button type="button" class="mdl-button close">Close</button>
          </div>
        </form>
    </dialog>

    <script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
      <script>
      var dialog = document.querySelector('dialog');
      var showDialogButton = document.querySelector('#show-dialog');
      if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
      }
      showDialogButton.addEventListener('click', function() {
        dialog.showModal();
      });
      dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
      });
    </script>
  </body>
</html>
