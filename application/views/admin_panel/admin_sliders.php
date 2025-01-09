
<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Slider</h1>
          </div>
            
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Slider</h4>
                  </div>
                  <div class="card-body">

                    <form action="<?=base_url('admin_add_slider')?>" method="post">


                      <div class="form-group">
                        <label>Slider name</label>
                        <input type="text" name="name"class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Slider File</label>
                        <input type="file" name="file" class="form-control">
                      </div>


                      <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
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