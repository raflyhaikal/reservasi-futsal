<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="<?= base_url('/'); ?>assets/auth/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?= base_url('/'); ?>assets/auth/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="<?= base_url('/'); ?>assets/auth/js/plugins/canvasbg/canvasbg.js"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="<?= base_url('/'); ?>assets/auth/js/utility/utility.js"></script>
<script src="<?= base_url('/'); ?>assets/auth/js/demo/demo.js"></script>
<script src="<?= base_url('/'); ?>assets/auth/js/main.js"></script>

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>