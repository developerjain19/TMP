<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="main_wrapper">
        <section class="pd-50 team ">
            <div class="service_another_bg">
                <div class="container">

                    <div class="form contact_form_page form-1 mentor-box mentor-form">
                        <form method="post">
                            <div class="form-container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="assets/images/mentee.png" class="br-10" style="width: 100%;height: 100%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="col-md-12 mt-10">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="number" class="form-control" placeholder="Your Phone*" required="" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="form-group">
                                                        <select name="graduate" class="form-control">
                                                            <option value="Select Graduate" class="form-control">Select Option</option>
                                                            <option value="1" class="form-control">Yes</option>
                                                            <option value="0" class="form-control">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="graduation_year" class="form-control" placeholder="If graduate, Please mention the year of graduation:*">
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="college" class="form-control" placeholder="Your College*" required="">
                                                    </div>
                                                </div>
                                                 <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="degree" class="form-control" placeholder="Name of Degree" required="">
                                                    </div>
                                                </div>
                                                
                                                  <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="semester" class="form-control" placeholder="If not graduated, currently in which semester/trimester" >
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="free_mentorship" class="form-control" placeholder="Why do you think you deserve free mentorship">
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="mentorship" class="form-control" placeholder="Please mention in brief in which area you need mentorship*" required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Password*" required="" minlength="4" title="Password should be at least 4 digit or character">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mt-4">
                                                    <div class="form-group text-center">
                                                        <button class="btn_one btn w-100">Register</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mt-4 text-center">

                                                    <h5>Alraedy have Account <a href="<?= base_url('mentee-login') ?>"> Click  Here To Login </a> </h5>
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
        </section>


        <?php include 'includes/footer.php'; ?>


    </div>

    <?php include 'includes/footer-link.php'; ?>
</body>

</html>