<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>


    <div class="main_wrapper">
        <div class="page_header">
            <div class="page_header_content">
                <div class="container">
                    <h2 class="heading">Contact Us</h2>

                </div>
            </div>
        </div>


        <section class="contact_inner service_bg" style="background: #FAF7F6;">
            <div class="service_another_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact_box" data-aos="fade-up">
                                <div class="service_inner">
                                    <div class="image">
                                        <img src="assets/images/inner/icon-2.png" alt="service">
                                    </div>
                                    <div class="content">
                                        <h4>Office Address</h4>
                                        <p><?= $this->address ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact_box" data-aos="fade-up">
                                <div class="service_inner">
                                    <div class="image">
                                        <img src="assets/images/inner/icon.png" alt="service">
                                    </div>
                                    <div class="content">
                                        <h4>Phone No</h4>
                                        <p><?= $this->phone ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact_box" data-aos="fade-up">
                                <div class="service_inner">
                                    <div class="image">
                                        <img src="assets/images/inner/icon-1.png" alt="service">
                                    </div>
                                    <div class="content">
                                        <h4>Email Address</h4>
                                        <p><?= $this->email ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form contact_form_page">
                        <form class="contact_form" method="post" data-aos="fade-up">
                            <div class="form-container">
                                <div class="row ">
                                    <div class="col-lg-12">
                                        <div class="heading_common text-center" data-aos="fade-up">
                                            <h5>CONTACT US</h5>
                                            <h3>We'd love to hear from you! Drop us a line</h3>
                                            <p>The Mentorship Project will arrange your first legal consultation totally free of cost</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-8 offset-lg-2 ">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="form-group" data-aos="fade-up">
                                                    <input type="text" name="name" class="form-control" placeholder="Your Name*" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6">
                                                <div class="form-group" data-aos="fade-up">
                                                    <input type="tel"  maxlength="10" name="phone" class="form-control" placeholder="phone*" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group" data-aos="fade-up">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group" data-aos="fade-up">
                                                    <textarea name="message" class="form-control" placeholder="Message*" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12 mt-4">
                                                <div class="form-group text-center" data-aos="fade-up">
                                                    <button class="btn_one btn">SEND MRSSAGE</button>
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
    </div>


    <?php include 'includes/footer-link.php'; ?>
</body>

</html>