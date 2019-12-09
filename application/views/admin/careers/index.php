

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Manage Portfolio</div>
  <div>
    <a href="<?php echo base_url() ?>admin/Careers/create"><button class="add_button"><i class="fas fa-plus"></i>Add Job</button></a>
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
          <th>Job Id</th>
          <th>Job Title</th>
          <th>Job Location</th>
          <th>Job Type</th>
           <th>Job Description</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
if (count($career)):
    $cnt = 1;
    foreach ($career as $row): ?>
			    <td><?php echo htmlentities($cnt); ?></td>
			    <td><?php echo htmlentities($row->job_id) ?></td>
			    <td><?php echo htmlentities($row->title) ?></td>
				<td><?php echo htmlentities($row->location) ?></td>
				<td><?php echo htmlentities($row->type) ?></td>
				<td><?php echo htmlentities($row->description) ?></td>
				<td><?php echo anchor("admin/Careers/update/{$row->id}", ' ', 'class="fa fa-edit"') ?>
				<?php echo anchor("admin/Careers/delete/{$row->id}", ' ', 'class="fa fa-trash"') ?> </td>
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