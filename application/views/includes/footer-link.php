<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/menu/ma5-menu.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/funfacts.js"></script>
<script src="<?= base_url() ?>assets/plugins/preloader/preloader.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 10000);
</script>
<script>
    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });

    $(function() {
		$("input[name='number']").on('input', function(e) {
			$(this).val($(this).val().replace(/[^0-9]/g, ''));
		});
	});
</script>