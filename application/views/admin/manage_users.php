

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Manage Users</div>
  <div>
    <a href="<?php echo base_url() ?>admin/Manage_Users/adduserdetail"><button class="add_button"><i class="fas fa-plus"></i>Add User</button></a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <!---- Success Message ---->
      <?php if ($this->session->flashdata('success')) {?>
      <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
    </div>
    <?php }?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email id</th>
          <th>Reg date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
if (count($userdetails)):
    $cnt = 1;
    foreach ($userdetails as $row):
    ?>                                                                                                                                                                              <td><?php echo htmlentities($cnt); ?></td>                                              <td><?php echo htmlentities($row->firstName) ?></td>                                    <td><?php echo htmlentities($row->lastName) ?></td>
													        <td><?php echo htmlentities($row->emailId) ?></td>                       <td><?php echo htmlentities($row->regDate) ?></td>                                      <td><?php echo anchor("admin/Manage_Users/getuserdetail/{$row->id}", ' ', 'class="fa fa-edit"') ?>                                                                                                                                              <?php echo anchor("admin/Manage_Users/deleteuser/{$row->id}", ' ', 'class="fa fa-trash"') ?>                                                                      </td>                                                                                 </tr>
													        <?php $cnt++;endforeach;else: ?>
        <tr>
          <td colspan="6">No Record found</td>
        </tr>
        <?php
endif;
?>
      </tbody>
    </table>
  </div>
</div>
</div>