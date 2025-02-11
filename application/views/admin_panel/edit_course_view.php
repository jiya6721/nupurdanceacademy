<?php $this->load->view('admin_panel/admin_sidebar_view'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Course</h1>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Image/Video</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin_course/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $course->id ?>">

                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" name="name" class="form-control" value="<?= $course->name ?>">
                            </div>

                            <div class="form-group">
                                <label>Current File</label>
                                <p><?= $course->file ?></p>
                            </div>

                            <div class="form-group">
                                <label>Upload New File (Optional)</label>
                                <input type="file" name="file" class="form-control">
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