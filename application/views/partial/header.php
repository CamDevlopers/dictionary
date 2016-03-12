<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PNC Dictionary</title>

    <!-- Page styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url(); ?>images/dictionary-logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="<?php echo $this->uri->segment(2)==''?'active':''; ?> mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url();?>">Home</a>
              <a class="<?php echo $this->uri->segment(2)=='word_list'?'active':''; ?> mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url();?>pages/word_list">Word list</a>
              <?php 
                if($this->session->userdata('user_id')){
              ?>
                <button id="demo-menu-lower-right" class="mdl-button mdl-button--primary mdl-js-button">
                  <?php echo current_user($this->session->userdata('user_id'))->users_full_name; ?>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                <a class="sub_link" href="<?php echo base_url().'manages/add_new'; ?>"><li class="mdl-menu__item">Add New Word</li></a>
                <?php if($this->session->userdata('user_id')==1){?>
                <a class="sub_link" href="<?php echo base_url().'manages/add_user'; ?>"><li class="mdl-menu__item">Add New User</li></a>
                <?php } ?>
                <a class="sub_link" href="<?php echo base_url().'manages/dashboard'; ?>"><li class="mdl-menu__item">My Dashboard</li></a>
                  <a class="sub_link" href="<?php echo base_url().'manages/profile'; ?>"><li class="mdl-menu__item">Profile</li></a>
                  <a class="sub_link" href="<?php echo base_url().'logins/logout'; ?>"><li class="mdl-menu__item">Logout</li></a>
                </ul>
              <?php
                }else{
              ?>
                     <a class="<?php echo $this->uri->segment(2)=='login'?'active':''; ?> mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url();?>pages/login">Login</a>
              <?php  }
              ?>
             
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url(); ?>images/dictionary-logo.png">
          </span>
          
        </div>
      </div>
      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <h4 class="android-logo-image text-white-profile">
            <?php 
                  if($this->session->userdata('user_id')){
            ?>
               <?php echo current_user($this->session->userdata('user_id'))->users_full_name; ?>
            <?php
                }else{
            ?>
            Welcome Genius,
            <?php  }
              ?>
          </h4>
        </span>
        <nav class="mdl-navigation">
          <a class="<?php echo $this->uri->segment(2)==''?'active':''; ?> mdl-navigation__link" href="<?php echo base_url();?>">Home</a>
          
          <a class="<?php echo $this->uri->segment(2)=='about'?'active':''; ?> mdl-navigation__link" href="<?php echo base_url();?>pages/about">About</a>
          <?php 
            if($this->session->userdata('user_id')){
          ?>
            <a class="mdl-navigation__link" href="<?php echo base_url().'logins/logout'; ?>">Logout</a>
          <?php
            }else{
          ?>
            <a class="<?php echo $this->uri->segment(2)=='login'?'active':''; ?> mdl-navigation__link" href="<?php echo base_url();?>pages/login">Login</a>
          <?php } ?>
        </nav>
      </div>