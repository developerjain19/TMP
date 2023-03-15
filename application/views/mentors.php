<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                alert('asjdks');

                var value = $(this).val().toLowerCase();
                $("#mytable div").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="main_wrapper">


        <section class="team team_inner service_bg pt-60">
            <div class="service_another_bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-sm-12 mb-50">
                            <div id="search" class="widget widget_search">
                                <div class="sidebar_search">
                                    <form class="search_form" action="https://wpthemebooster.com/demo/themeforest/html/lawreto/search.php">
                                        <input type="search" id="myInput" name="search" class="keyword form-control" placeholder="Search">
                                        <button type="submit" class="form-control-submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" id="mytable">
                        <?php

                        if ($mentors) {
                            foreach ($mentors as $fetchrow) {
                        ?>
                                <div class="col-lg-3">
                                    <div class="team_block">
                                        <div class="team_image">
                                            <img src="<?= setImage($fetchrow['image'], 'uploads/mentors/') ?>" alt="<?= $fetchrow['name']; ?>">
                                        </div>
                                        <div class="team_content">
                                            <h4><?= $fetchrow['name']; ?></h4>
                                            <h6><?= $fetchrow['experience']; ?></h6>
                                        </div>
                                    </div>
                                </div>

                        <?php

                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>



        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {


                    var value = $(this).val().toLowerCase();
                    $("#mytable div").filter(function() {
                        $(this).toggle($(this).html().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


        <?php include 'includes/footer.php'; ?>

       
    </div>

    <?php include 'includes/footer-link.php'; ?>
</body>

</html>