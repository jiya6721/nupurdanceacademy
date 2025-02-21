
<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>

<?php if($this->session->flashdata('update_success')): ?>
                <script>
                  Swal.fire({
                    title: 'Success!',
                    text: '<?= $this->session->flashdata('update_success'); ?>',
                    icon: 'success'
                  });
                </script>
              <?php endif; ?>

              <?php if($this->session->flashdata('update_fail')): ?>
              <script>
                Swal.fire({
                  title: 'Error!',
                  text: '<?= $this->session->flashdata('update_fail'); ?>',
                  icon: 'error'
                });
              </script>
<?php endif; ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Event</h1>
          </div>




            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Event</h4>
                  </div>
                  <div class="card-body">

                    <form action="<?=base_url('admin_add_events')?>" method="post" enctype='multipart/form-data'>


                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title"class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Discription</label>
                        <input type="text" name="discription" class="form-control">
                      </div>
                      <!-- <div class="form-group">
                        <label>Event File</label>
                        <input type="file" name="file[]" id="event-file" class="form-control multiple" multiple >
                      </div> -->
                      <div class="form-group">
  <label for="event-file">Event File</label>
  <input type="file" name="file[]" id="event-file" class="form-control" multiple>
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
                          <th>Title</th>
                          <th>Discription</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php

                    foreach ($events as $key => $event) { ?>
                      

                      <tr>
                          <td><?=$event->title?></td>
                          <td><?=$event->discription?></td>
                          <td>
                    <a href="<?= base_url('admin_events/edit/' . $event->id) ?>" class="btn btn-warning">Edit</a>
                  </td>
                  <td>
                    <a href="<?= base_url('admin_events/delete/' . $event->id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this file?');">Delete</a>
                 </td>
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