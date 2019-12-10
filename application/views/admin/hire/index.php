<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Manage Resources</div>
  <div>
    <a href="<?php echo base_url() ?>admin/Hire/create"><button class="add_button"><i class="fas fa-plus"></i>Add Technology</button></a>
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
          <th>Rate</th>
          <th>Description</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
if (count($hire)):
    $cnt = 1;
    foreach ($hire as $row): ?>
					    <td><?php echo htmlentities($cnt); ?></td>
					    <td><?php echo htmlentities($row->rate) ?></td>
						<td><?php echo htmlentities($row->description) ?></td>
						<td><?php echo anchor("admin/Hire/update/{$row->id}", ' ', 'class="fa fa-edit"') ?>
						<?php echo anchor("admin/Hire/delete/{$row->id}", ' ', 'class="fa fa-trash"') ?> </td>
							</tr><?php $cnt++;endforeach;else: ?>
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