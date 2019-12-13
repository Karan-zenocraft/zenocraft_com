


<div class="row">
            <a href="<?php echo base_url() ?>admin/Manage_Users" class="Ablock"><div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-black bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="fas fa-user-tie"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($users); ?> Users</div>
                </div>
                <a class="card-footer text-black clearfix small z-1 Ablock" href="<?php echo base_url() ?>admin/Manage_Users">
                  <span class="float-left">Total Registered Users</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div></a>
            <a href="<?php echo base_url() ?>admin/Portfolio" class="Ablock"><div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-black bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($portfolios); ?> Portfolio</div>
                </div>
                <a class="card-footer text-black clearfix small z-1 Ablock" href="<?php echo base_url() ?>admin/Portfolio">
                  <span class="float-left">Total Portfolios</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div></a>
            <a href="<?php echo base_url() ?>admin/Category" class="Ablock"><div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-black bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="far fa-list-alt"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($categories); ?> Category</div>
                </div>
                <a class="card-footer text-black clearfix small z-1 Ablock" href="<?php echo base_url() ?>admin/Portfolio">
                  <span class="float-left">Total Categories</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div></a>
            <a href="<?php echo base_url() ?>admin/Careers" class="Ablock"><div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-black bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="fas  fa-graduation-cap"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($careers); ?> Careers</div>
                </div>
                <a class="card-footer text-black clearfix small z-1 Ablock" href="<?php echo base_url() ?>admin/Portfolio">
                  <span class="float-left">Total Careers</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div></a>
             <a href="<?php echo base_url() ?>admin/Hire" class="Ablock"><div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-black bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="fas  fa-users"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($hires); ?> Hire Resources</div>
                </div>
                <a class="card-footer text-black clearfix small z-1 Ablock" href="<?php echo base_url() ?>admin/Portfolio">
                  <span class="float-left">Total Hire Resources</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div></a>

          </div>