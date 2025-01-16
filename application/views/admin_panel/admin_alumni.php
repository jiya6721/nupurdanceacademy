
<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Alumni</h1>
          </div>
            
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Alumni</h4>
                  </div>
                  <div class="card-body">

                    <form action="<?=base_url('admin_add_alumni')?>" method="post" enctype='multipart/form-data'>


                      <div class="form-group">
                        <label>Alumni Name</label>
                        <input type="text" name="name"class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Alumni Year</label>
                        <input type="text" name="year"class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Alumni File</label>
                        <input type="file" name="file" class="form-control">
                      </div>


                      <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                  </div>
                </div>

                <div class="card mt-5">
                  <div class="card-header">
                      List
                  </div>
                  <div class="card-body">
                  <table class="table ">

                  <thead>
                        <tr>
                          <th>Name</th>
                          <th>Year</th>
                          <th>File</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php

                    foreach ($alumni as $key => $alumni) { ?>
                      

                      <tr>
                          <td><?=$alumni->name?></td>
                          <td><?=$alumni->year?></td>
                          <td><?=$alumni->file?></td>
                        </tr>
                     <?php }
                     
                    ?>
                     
                        
                       </tbody>
                    </table>

                  </div>
                
                </div>
                  
                   
                  </div>
                </div>
                
              </div>
              

               </div>
          </div>
          

          <?php $this->load->view('admin_panel/admin_footer_view'); ?>

          
        </section>
      </div>