

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Manage Portfolio</div>
  <div>
    <a href="<?php echo base_url() ?>admin/Portfolio/create"><button class="add_button"><i class="fas fa-plus"></i>Add Portfolio</button></a>
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
          <th>Project Title</th>
          <th>Category</th>
          <th>Description</th>
          <th>Image</th>
           <th>Skill</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
if (count($portfolio)):
    $cnt = 1;
    foreach ($portfolio as $row): ?>
			    <td><?php echo htmlentities($cnt); ?></td>
			    <td><?php echo htmlentities($row->title) ?></td>
			    <td><?php echo htmlentities($row->category) ?></td>
				<td><?php echo htmlentities($row->description) ?></td>
				<td><img src="<?php echo base_url() . "assets/uploads/" . $row->image ?>" width="50%" height="30%"/></td>
				<td><?php echo htmlentities($row->skill) ?></td>
				<td><?php echo anchor("admin/Portfolio/update/{$row->id}", ' ', 'class="fa fa-edit"') ?>
				<?php echo anchor("admin/Portfolio/delete/{$row->id}", ' ', 'class="fa fa-trash"') ?> </td>
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