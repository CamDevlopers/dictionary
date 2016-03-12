<?php $this->load->view('partial/header');?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="mdl-typography--text-center bg-sky-no-padding">
          	<h2 class="text-white">Welcome back, <?php echo current_user($this->session->userdata('user_id'))->users_full_name?>!</h2>
          	<p class="text-white-only">Thanks for times to share and contributed with us. We still need your help to improve some contents.</p>

            <!-- button add -->
            <a href="<?php echo base_url('manages/add_user'); ?>"> <button id="add-form" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect text-yellow">
              Add New User<i class="material-icons">chevron_right</i>
            </button></a>
            <!-- button add -->
        </div>
        <!-- word content -->
        <div class="mdl-typography content-list">
      		<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp table-word">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">No</th>
                  <th class="mdl-data-table__cell--non-numeric">Display Name</th>
                  <th>User Name</th>
                  <th>Gender</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $i = 1;
              if($users->num_rows()>0){
                  foreach ($users->result() as $value) {
                     # code...
                    
              ?>
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $i;?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $value->users_full_name; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $value->users_name;?></td>
                    <td>
                    <?php echo $value->gender==1?'Male':'Female';
                    ?></td>
                    <td><a class="text-blue" href="<?php echo base_url('manages/update_form/'.$value->users_id);?>">Update</a> | <a class="text-error" onclick="return confirm('Are you sure to delete?');" href="<?php echo base_url('manages/delete/'.$value->users_id);?>">Delete</a></td>
                  </tr>
              <?php
              $i++;
                } 
              }else{ ?>
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric" colspan="5">No data</td>
                  </tr>
              <?php } ?>
                

              </tbody>
          </table>
        </div>
        <!-- end content word -->
<?php $this->load->view('partial/footer');?>
        