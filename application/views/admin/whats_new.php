<?php include('template/header_link.php'); ?>
<div class="holder">


    <?php include('template/header.php'); ?>
    <?php $this->load->view('admin/template/sidebar'); ?>
    <main>
        <div class="container-fluid site-width">
            <section class="page-content container-fluid">
                <div class="row">
                    <div class="col-sm-10  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0"><?= $title ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-content container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            <div class="">
                                                <div class="form-group">
                                                    <label class="">What's New Banner</label>
                                                    <div class="pos-relative">
                                                        <input class="form-control pd-r-80" type="file" name="img" accept="image/png, image/gif, image/jpeg">

                                                        <input type="hidden" name="image" value="<?= $banner['0']['image'] ?>">
                                                        <img src="<?= base_url() ?>uploads/New/<?= $banner['0']['image'] ?>" height="50px">
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div>
<?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>