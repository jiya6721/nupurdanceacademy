<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Event</h1>
        </div>
        <?php echo "<pre>";
        print_R($event); 
        die();?>

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
                                <input type="text" name="title" class="form-control"><?= isset($event->title) ? htmlspecialchars($event->title) : '' ?>
                            </div>

                            <div class="form-group">
    <label>Description</label>
    <textarea name="discription" class="form-control"><?= isset($event->discription) ? htmlspecialchars($event->discription) : '' ?></textarea>
</div>

                            <div class="form-group">
                                <label>Current File</label>
                                <p><?= $event->files ?></p>
                            </div>

                            <div class="form-group">
                                <label>Upload New File (Optional)</label>
                                <input type="files" name="files" class="form-control" multiple>
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