<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="main_wrapper">

        <section class="service service_bg pd-50">
            <div class="service_another_bg">
                <div class="container">
                    <div class="row">
                        <?php if ($msg = $this->session->userdata('msg')) :
                        ?>
                            <div class="col-lg-12">
                                <div class="team_block">

                                    <div class="team_content">
                                        <h4>
                                            <?= $msg; ?>
                                        </h4>

                                    </div>
                                </div>
                            </div>

                        <?php $this->session->unset_userdata('msg');
                        endif; ?>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service_box">

                                        <div class="service_inner">

                                            <div class="content">
                                                <h4>Welcome <?= sessionId('login_user_name') ?></h4>
                                                <p><?= sessionId('login_user_email') ?></p>
                                                <p><?= sessionId('login_user_number') ?></p>
                                                <p>The form is below. if you wish to Update your profile.</p>
                                                <a href="<?= base_url() ?>logout" class="btn_one btn"><span>Logout</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="form contact_form_page form-1 mentor-box mentor-form">
                            <form method="post">
                                <div class="form-container">
                                    <div class="row">

                                        <div class="col-sm-12 ">

                                            <div class="col-md-12 mt-10">
                                                <div class="row ">
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name*" value="<?php echo $profiledata[0]['name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="number" class="form-control" placeholder="Your Phone*" value="<?php echo $profiledata[0]['number'] ?>" maxlength="10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" placeholder="Email Address*" value="<?php echo $profiledata[0]['email'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="college" class="form-control" placeholder="Your College*" value="<?php echo $profiledata[0]['college'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <select name="student_type" class="form-control">
                                                                <option value="Select Profession" class="form-control">Select Type*</option>
                                                                <option value="professional" class="form-control" <?= (($profiledata[0]['student_type'] == 'professional') ? 'selected' : '') ?>>professional</option>
                                                                <option value="Student" class="form-control" <?= (($profiledata[0]['student_type'] == 'Student') ? 'selected' : '') ?>>Student</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" name="mentorship" class="form-control" placeholder="Mentorship Looking For*" value="<?php echo $profiledata[0]['mentorship'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="form-group text-center">
                                                            <button class="btn_one btn">Update Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'includes/footer.php'; ?>


    </div>

    <?php include 'includes/footer-link.php'; ?>
</body>

</html>