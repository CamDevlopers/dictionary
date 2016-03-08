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
    <a href="search.html" class="btn-search-animation mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"></a></div>
    <?php } ?>
    
    <script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
  </body>
</html>
