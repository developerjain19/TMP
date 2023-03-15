<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="main_wrapper">
        <div class="blog_inner blog_inner_padding">
            <div class="container">
                <div class="blog_details ">

                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 mentor-box">
                            <div class="blog_details_inner">
                                <div class="makeacomment">
                                    <h4 class="text-center">
                                        Mentee Login

                                    </h4>
                                    <form class="contact_form " action="" method="post">

                                        <div class="form-container mentor-form">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="uname" class="form-control" placeholder="Number/Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Password*" required="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group ">
                                                        <button class="btn_one btn w-100">Submit</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12 mt-4 text-center">

                                                    <h5>Don't have Account <a href="<?= base_url('mentee-registration') ?>"> Click Here To Register </a> </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'includes/footer.php'; ?>


    </div>

    <?php include 'includes/footer-link.php'; ?>
</body>

</html>