<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Event</h1>
        </div>

       
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Image/Video</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin_events/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $event->id ?>">

                            <div class="form-group">
                                <label>Event title</label>
                                <input type="text" name="title" class="form-control" value="<?= isset($event->title) ? htmlspecialchars($event->title) : '' ?>">
                            </div>

                            <div class="form-group">
    <label>Description</label>
    <textarea name="discription" class="form-control"><?= isset($event->discription) ? htmlspecialchars($event->discription) : '' ?></textarea>
</div>

                           

                            <div class="form-group">
                                <label>Upload New File (Optional)</label>
                                <input type="file" name="files[]" class="form-control" multiple>
                            </div>

                            <div class="form-group">


                            
                            
                                    <label>Current File</label>
                                    <div class="row">

                                    <?php

                                    $images=explode(',',$event->images);

                                    foreach($images as $image){ ?>
                                    <div class="col-md-3">

                                        <img height=100 width=100 src="<?=base_url('public/uploads/events/'.$image)?>" alt="no image" srcset="">
                                    </div>

                                    <?php } ?>
                                    </div>
                                    
                                    </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin_panel/admin_footer_view'); ?>
    </section>
</div>